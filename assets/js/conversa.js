(() => {
  const raiz = document.getElementById('conversa-app');
  if (!raiz) return;

  const dados = JSON.parse(raiz.dataset.payload);
  const caixa = document.getElementById('chat-mensagens');
  const form = document.getElementById('chat-form');
  const campo = document.getElementById('chat-texto');
  const onlineEl = raiz.querySelector('.chat-online');
  let ultimoId = 0;
  let enviando = false;

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
    if (lista.length) {
      caixa.scrollTop = caixa.scrollHeight;
    }
  }

  function atualizarOnline(lista) {
    if (!onlineEl) return;
    if (!lista || !lista.length) {
      onlineEl.textContent = 'Você está sozinho nesta sala — deixe uma mensagem para os próximos.';
      return;
    }
    const nomes = lista.map((p) => p.nome).join(', ');
    onlineEl.textContent = lista.length + (lista.length === 1 ? ' aluno agora: ' : ' alunos agora: ') + nomes;
  }

  async function buscar(depois) {
    const url = 'api/conversa.php?acao=mensagens&sala=' + encodeURIComponent(dados.salaId)
      + (depois ? '&depois=' + encodeURIComponent(depois) : '');
    const retorno = await fetch(url).then((r) => r.json()).catch(() => ({ ok: false }));
    if (!retorno.ok) return;
    desenhar(retorno.mensagens || [], !depois);
    atualizarOnline(retorno.online || []);
  }

  raiz.querySelectorAll('.btn-ouvir-frase').forEach((botao) => {
    botao.addEventListener('click', () => {
      const frase = String(botao.dataset.fala || '').trim();
      if (frase && typeof lingoFalar === 'function') {
        lingoFalar(frase, dados.idioma);
      }
    });
  });

  raiz.querySelectorAll('.btn-usar-frase').forEach((botao) => {
    botao.addEventListener('click', () => {
      campo.value = botao.dataset.frase || '';
      campo.focus();
    });
  });

  form.addEventListener('submit', async (evento) => {
    evento.preventDefault();
    if (enviando) return;
    const mensagem = String(campo.value || '').trim();
    if (!mensagem) return;
    enviando = true;
    const retorno = await fetch('api/conversa.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        acao: 'enviar',
        sala: dados.salaId,
        csrf: dados.csrf,
        mensagem,
        depois: ultimoId,
      }),
    }).then((r) => r.json()).catch(() => ({ ok: false, erro: 'Falha de rede.' }));
    enviando = false;
    if (!retorno.ok) {
      alert(retorno.erro || 'Não foi possível enviar.');
      return;
    }
    campo.value = '';
    desenhar(retorno.mensagens || [], false);
    atualizarOnline(retorno.online || []);
  });

  campo.addEventListener('keydown', (evento) => {
    if (evento.key === 'Enter' && !evento.shiftKey) {
      evento.preventDefault();
      form.requestSubmit();
    }
  });

  buscar(0);
  setInterval(() => buscar(ultimoId), 4000);
})();
