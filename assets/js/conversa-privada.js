(() => {
  const raiz = document.getElementById('privada-app');
  if (!raiz) return;

  const dados = JSON.parse(raiz.dataset.payload);
  const caixa = document.getElementById('chat-mensagens');
  const form = document.getElementById('chat-form');
  const campo = document.getElementById('chat-texto');
  const videoLocal = document.getElementById('video-local');
  const videoRemoto = document.getElementById('video-remoto');
  const statusEl = document.getElementById('video-status');
  const btnVideo = document.getElementById('btn-video');
  const btnMic = document.getElementById('btn-mic');
  const btnCam = document.getElementById('btn-cam');
  const btnSair = document.getElementById('btn-sair-video');

  let ultimoId = 0;
  let enviando = false;
  let pc = null;
  let localStream = null;
  let makingOffer = false;
  const polite = dados.euId > dados.outroId;

  function escapar(texto) {
    return String(texto || '').replace(/[&<>"']/g, (c) => ({
      '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;',
    }[c]));
  }

  function desenhar(lista, substituir) {
    if (substituir) {
      caixa.innerHTML = '';
      ultimoId = 0;
    }
    lista.forEach((msg) => {
      if (msg.id <= ultimoId) return;
      ultimoId = msg.id;
      const linha = document.createElement('div');
      linha.className = 'chat-msg' + (msg.eu ? ' eu' : '');
      linha.innerHTML = `<span class="avatar">${msg.avatar ? `<img src="${escapar(msg.avatar)}" alt="">` : escapar(msg.iniciais)}</span>
        <div>
          <strong>${escapar(msg.nome.split(' ')[0])}</strong>
          <small>${escapar(msg.quando)}</small>
          <p>${escapar(msg.mensagem)}</p>
        </div>`;
      caixa.appendChild(linha);
    });
    if (lista.length) caixa.scrollTop = caixa.scrollHeight;
  }

  async function api(corpo, query) {
    const url = 'api/conversa-privada.php' + (query || '');
    const opcoes = corpo
      ? { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(corpo) }
      : {};
    return fetch(url, opcoes).then((r) => r.json()).catch(() => ({ ok: false }));
  }

  async function buscar(depois) {
    const qs = '?acao=mensagens&id=' + encodeURIComponent(dados.id)
      + (depois ? '&depois=' + encodeURIComponent(depois) : '');
    const retorno = await api(null, qs);
    if (!retorno.ok) return;
    desenhar(retorno.mensagens || [], !depois);
    if (pc) await aplicarSinais(retorno.sinais || []);
  }

  async function registrar(tipo, detalhe) {
    await api({ acao: 'evento', id: dados.id, csrf: dados.csrf, tipo, detalhe: detalhe || '' });
  }

  async function enviarSinal(tipo, payload) {
    await api({ acao: 'sinal', id: dados.id, csrf: dados.csrf, tipo, payload });
  }

  async function aplicarSinais(lista) {
    for (const sinal of lista) {
      if (!sinal || !sinal.payload) continue;
      try {
        if (sinal.tipo === 'description') {
          const desc = sinal.payload;
          const offerCollision = desc.type === 'offer' && (makingOffer || pc.signalingState !== 'stable');
          if (!polite && offerCollision) continue;
          await pc.setRemoteDescription(desc);
          if (desc.type === 'offer') {
            await pc.setLocalDescription();
            await enviarSinal('description', pc.localDescription);
          }
        } else if (sinal.tipo === 'ice') {
          await pc.addIceCandidate(sinal.payload);
        }
      } catch (erro) {
        statusEl.textContent = 'Não foi possível conectar o vídeo. Peça para o colega entrar de novo.';
      }
    }
  }

  async function iniciarVideo() {
    if (pc) return;
    statusEl.textContent = 'Pedindo acesso à câmera e ao microfone…';
    try {
      localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
    } catch (erro) {
      statusEl.textContent = 'Autorize câmera e microfone no navegador para a aula em vídeo.';
      return;
    }
    videoLocal.srcObject = localStream;
    pc = new RTCPeerConnection({ iceServers: [{ urls: 'stun:stun.l.google.com:19302' }] });
    localStream.getTracks().forEach((faixa) => pc.addTrack(faixa, localStream));
    pc.onicecandidate = (evento) => {
      if (evento.candidate) enviarSinal('ice', evento.candidate);
    };
    pc.ontrack = (evento) => {
      videoRemoto.srcObject = evento.streams[0];
      statusEl.textContent = 'Vídeo privado conectado. Esta aula pode ser monitorada.';
    };
    pc.onnegotiationneeded = async () => {
      try {
        makingOffer = true;
        await pc.setLocalDescription();
        await enviarSinal('description', pc.localDescription);
      } catch (erro) {
        statusEl.textContent = 'Falha ao iniciar a ligação. Tente novamente.';
      } finally {
        makingOffer = false;
      }
    };
    btnVideo.hidden = true;
    btnMic.hidden = false;
    btnCam.hidden = false;
    btnSair.hidden = false;
    statusEl.textContent = 'Você está no vídeo. Aguarde o colega entrar. Aula passível de monitoramento.';
    await registrar('video_inicio', 'Entrou no vídeo privado');
  }

  function encerrarVideo() {
    if (localStream) {
      localStream.getTracks().forEach((faixa) => faixa.stop());
      localStream = null;
    }
    if (pc) {
      pc.close();
      pc = null;
    }
    videoLocal.srcObject = null;
    videoRemoto.srcObject = null;
    btnVideo.hidden = false;
    btnMic.hidden = true;
    btnCam.hidden = true;
    btnSair.hidden = true;
    statusEl.textContent = 'Câmera desligada. Toque em entrar para começar a aula ao vivo.';
    registrar('video_fim', 'Saiu do vídeo privado');
  }

  btnVideo.addEventListener('click', iniciarVideo);
  btnSair.addEventListener('click', encerrarVideo);
  btnMic.addEventListener('click', () => {
    if (!localStream) return;
    const faixa = localStream.getAudioTracks()[0];
    if (!faixa) return;
    faixa.enabled = !faixa.enabled;
    btnMic.textContent = faixa.enabled ? 'Microfone' : 'Microfone off';
  });
  btnCam.addEventListener('click', () => {
    if (!localStream) return;
    const faixa = localStream.getVideoTracks()[0];
    if (!faixa) return;
    faixa.enabled = !faixa.enabled;
    btnCam.textContent = faixa.enabled ? 'Câmera' : 'Câmera off';
  });

  form.addEventListener('submit', async (evento) => {
    evento.preventDefault();
    if (enviando) return;
    const mensagem = String(campo.value || '').trim();
    if (!mensagem) return;
    enviando = true;
    const retorno = await api({
      acao: 'enviar',
      id: dados.id,
      csrf: dados.csrf,
      mensagem,
      depois: ultimoId,
    });
    enviando = false;
    if (!retorno.ok) {
      alert(retorno.erro || 'Não foi possível enviar.');
      return;
    }
    campo.value = '';
    desenhar(retorno.mensagens || [], false);
    if (pc) await aplicarSinais(retorno.sinais || []);
  });

  campo.addEventListener('keydown', (evento) => {
    if (evento.key === 'Enter' && !evento.shiftKey) {
      evento.preventDefault();
      form.requestSubmit();
    }
  });

  buscar(0);
  setInterval(() => buscar(ultimoId), 2500);
  if (dados.modo === 'video') {
    iniciarVideo();
  }
  window.addEventListener('beforeunload', () => {
    if (pc) encerrarVideo();
  });
})();
