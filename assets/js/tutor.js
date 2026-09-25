(() => {
  const raiz = document.getElementById('tutor-app');
  if (!raiz) return;

  const dados = JSON.parse(raiz.dataset.payload);
  const caixa = document.getElementById('chat-mensagens');
  const form = document.getElementById('chat-form');
  const campo = document.getElementById('chat-texto');
  let enviando = false;

  function escapar(texto) {
    return String(texto || '').replace(/[&<>"']/g, (c) => ({
      '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;',
    }[c]));
  }

  function formatar(texto) {
    return escapar(texto).replace(/\*\*([^*]+)\*\*/g, '<strong>$1</strong>').replace(/\*([^*]+)\*/g, '<em>$1</em>').replace(/\n/g, '<br>');
  }

  function desenhar(lista) {
    caixa.innerHTML = '';
    if (!lista.length) {
      const vazio = document.createElement('div');
      vazio.className = 'chat-msg lino';
      vazio.innerHTML = `<span class="avatar"><img src="${escapar(dados.avatar_lino)}" alt="Lino"></span>
        <div>
          <strong>Lino</strong>
          <p>Pergunte com base na sua trilha. Eu só uso o conteúdo das aulas.</p>
        </div>`;
      caixa.appendChild(vazio);
      return;
    }
    lista.forEach((msg) => {
      const linha = document.createElement('div');
      linha.className = 'chat-msg' + (msg.papel === 'aluno' ? ' eu' : ' lino');
      const ouvir = msg.papel === 'lino' && msg.audio
        ? `<button type="button" class="btn-falante btn-ouvir-tutor" aria-label="Ouvir" data-fala="${escapar(msg.audio)}">${typeof lingoIconeOuvir === 'function' ? lingoIconeOuvir() : 'Ouvir'}</button>`
        : '';
      linha.innerHTML = `<span class="avatar"><img src="${escapar(msg.papel === 'aluno' ? dados.avatar_aluno : dados.avatar_lino)}" alt=""></span>
        <div>
          <strong>${msg.papel === 'aluno' ? 'Você' : 'Lino'}</strong>
          <small>${escapar(msg.quando)}</small>
          ${ouvir}
          <p>${formatar(msg.mensagem)}</p>
        </div>`;
      caixa.appendChild(linha);
    });
    caixa.querySelectorAll('.btn-ouvir-tutor').forEach((botao) => {
      botao.addEventListener('click', () => {
        if (typeof lingoFalar === 'function') lingoFalar(botao.dataset.fala, dados.idioma);
      });
    });
    caixa.scrollTop = caixa.scrollHeight;
  }

  async function buscar() {
    const retorno = await fetch('api/tutor.php?acao=historico').then((r) => r.json()).catch(() => ({ ok: false }));
    if (retorno.ok) desenhar(retorno.mensagens || []);
  }

  async function enviar(mensagem) {
    if (enviando) return;
    const texto = String(mensagem || '').trim();
    if (!texto) return;
    enviando = true;
    campo.value = '';
    const retorno = await fetch('api/tutor.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ acao: 'enviar', csrf: dados.csrf, mensagem: texto }),
    }).then((r) => r.json()).catch(() => ({ ok: false, erro: 'Falha de rede.' }));
    enviando = false;
    if (!retorno.ok) {
      alert(retorno.erro || 'Não foi possível responder.');
      campo.value = texto;
      return;
    }
    desenhar(retorno.mensagens || []);
    const ultima = (retorno.mensagens || []).filter((m) => m.papel === 'lino').pop();
    if (ultima && ultima.audio && typeof lingoFalar === 'function') {
      lingoFalar(ultima.audio, dados.idioma);
    }
  }

  form.addEventListener('submit', (evento) => {
    evento.preventDefault();
    enviar(campo.value);
  });
  campo.addEventListener('keydown', (evento) => {
    if (evento.key === 'Enter' && !evento.shiftKey) {
      evento.preventDefault();
      form.requestSubmit();
    }
  });
  raiz.querySelectorAll('.tutor-chip').forEach((botao) => {
    botao.addEventListener('click', () => enviar(botao.dataset.texto));
  });

  buscar();
})();
