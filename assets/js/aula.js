(() => {
  const raiz = document.getElementById('aula-app');
  if (!raiz) return;

  const dados = JSON.parse(raiz.dataset.payload);
  const area = document.getElementById('area-pergunta');
  const barra = document.getElementById('barra-aula');
  const vidasEl = document.getElementById('vidas');
  const rodape = document.getElementById('aula-rodape');
  const btnPular = document.getElementById('btn-pular');
  const btnCheck = document.getElementById('btn-check');
  const feedback = document.getElementById('aula-feedback');
  const fbTitulo = document.getElementById('fb-titulo');
  const fbTexto = document.getElementById('fb-texto');
  const btnContinuar = document.getElementById('btn-continuar');
  const passoEl = document.getElementById('aula-passo');
  const barraCaixa = document.getElementById('barra-aula-caixa');
  const btnSair = document.getElementById('aula-sair');
  const ICO_OUVIR = '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M4 9.2h3.4L12 5.5v13l-4.6-3.7H4z"/><path d="M16 8.4a4 4 0 0 1 0 7.2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M18.5 6.2a7 7 0 0 1 0 11.6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>';
  const ICO_MIC = '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3z"/><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M6.5 11a5.5 5.5 0 0 0 11 0M12 16.5V20M8.5 20h7"/></svg>';
  let falaFixaAtual = '';

  let indice = 0;
  let vidas = dados.vidas;
  const plus = !!dados.plus;
  let acertos = 0;
  let erros = 0;
  let bloqueado = false;
  let ordemEscolhida = [];
  let emparelharEsq = null;
  let pares = {};
  let paresRev = {};
  let viuTeoria = !String(dados.teoria || '').trim();

  function rotuloTarefa(tipo) {
    return {
      multipla: 'Escolha',
      verdadeiro_falso: 'Verdadeiro ou falso',
      completar: 'Ouça e complete',
      traducao: 'Traduza',
      ordem: 'Monte a frase',
      emparelhar: 'Emparelhe',
    }[tipo] || 'Pratique';
  }

  function fraseLacunaDe(enunciado) {
    const t = String(enunciado || '');
    if (!/_{2,}/.test(t)) return '';
    return t
      .replace(/^(Prática|Revisão|Mais atividades|Fixação|Pratique)\s*:\s*/i, '')
      .replace(/^(Complete|Completa|Complète|Complétez|Completi)\s*:\s*/i, '')
      .trim();
  }

  function htmlFalante(fala, extra) {
    return `<button type="button" class="btn-falante${extra ? ' ' + extra : ''}" aria-label="Ouvir no idioma de estudo" data-fala="${escapar(fala)}">${ICO_OUVIR}</button>`;
  }

  function atualizarStatus() {
    const total = Math.max(dados.exercicios.length, 1);
    const pct = !viuTeoria ? 4 : Math.round((Math.min(indice, total) / total) * 100);
    barra.style.width = pct + '%';
    if (barraCaixa) {
      barraCaixa.setAttribute('aria-valuenow', String(pct));
    }
    if (passoEl) {
      if (!viuTeoria) {
        passoEl.textContent = 'Leitura';
      } else if (indice >= total) {
        passoEl.textContent = total + ' de ' + total;
      } else {
        passoEl.textContent = (indice + 1) + ' de ' + total;
      }
    }
    vidasEl.textContent = plus ? '∞' : String(vidas);
    vidasEl.classList.toggle('plus', plus);
  }

  function iniciar() {
    area.hidden = false;
    if (!viuTeoria) {
      mostrarTeoria();
      return;
    }
    rodape.hidden = false;
    mostrar();
  }

  function linhaEstudo(texto) {
    return typeof lingoEhFraseEstudo === 'function' ? lingoEhFraseEstudo(texto, dados.idioma) : true;
  }

  function mostrarTeoria() {
    if (typeof lingoPararOuvir === 'function') lingoPararOuvir();
    rodape.hidden = true;
    feedback.hidden = true;
    atualizarStatus();
    const linhas = String(dados.teoria || '').split(/\n/).map((l) => l.trim()).filter(Boolean);
    const falas = linhas.map((linha) => {
      const partes = typeof lingoPartesOuvir === 'function'
        ? lingoPartesOuvir(linha, dados.idioma)
        : [];
      if (!partes.length) {
        return `<li><span>${escapar(linha)}</span></li>`;
      }
      const ehGlossario = /\s+=\s+| · /.test(linha) || partes.length > 1;
      if (ehGlossario) {
        const termos = partes.map((p) => `<span class="teoria-termo">${htmlFalante(p, 'btn-teoria')}<strong>${escapar(p)}</strong></span>`).join('');
        const glosa = /\s+=\s+/.test(linha) ? ' = ' + linha.split(/\s+=\s+/).slice(1).join(' = ') : '';
        return `<li class="teoria-linha">${termos}${glosa ? `<span class="teoria-glosa">${escapar(glosa)}</span>` : ''}</li>`;
      }
      return `<li>${htmlFalante(partes[0], 'btn-teoria')}<span>${escapar(linha)}</span></li>`;
    }).join('');
    area.innerHTML = `<div class="pergunta teoria-aula">
      <p class="olho">${escapar(dados.nivel || '')} · ${escapar(dados.unidade || '')}</p>
      <h2>${escapar(dados.titulo || '')}</h2>
      <ul class="habilidades-aula">
        <li>Ler</li><li>Ouvir</li><li>Escrever</li><li>Falar</li>
      </ul>
      <p class="situacao-aula">${escapar(dados.situacao || 'Situação da vida real — leia, ouça e só então pratique.')}</p>
      <p class="intro">${escapar(dados.resumo || 'Leia o diálogo e depois pratique.')}</p>
      <ul class="dialogo-teoria">${falas}</ul>
      <p class="campo-resposta-ajuda">Ouça e depois fale a palavra no idioma de estudo. O Lingo corrige.</p>
      <div id="falar-teoria"></div>
      <button type="button" class="botao botao-principal" id="btn-comecar-aula">Praticar agora</button>
    </div>`;
    const painelTeoria = montarPainelFala('');
    const slotTeoria = area.querySelector('#falar-teoria');
    if (slotTeoria) slotTeoria.appendChild(painelTeoria);
    const primeiraTeoria = area.querySelector('.btn-teoria');
    if (primeiraTeoria) painelTeoria.definirAlvo(primeiraTeoria.dataset.fala);
    area.querySelectorAll('.btn-teoria').forEach((botao) => {
      botao.addEventListener('click', () => {
        if (typeof lingoFalar === 'function') lingoFalar(botao.dataset.fala, dados.idioma);
      });
      const mic = document.createElement('button');
      mic.type = 'button';
      mic.className = 'btn-falante btn-mic-teoria';
      mic.setAttribute('aria-label', 'Falar esta palavra');
      mic.innerHTML = ICO_MIC;
      mic.addEventListener('click', () => {
        painelTeoria.definirAlvo(botao.dataset.fala);
        painelTeoria.falar();
      });
      botao.after(mic);
    });
    document.getElementById('btn-comecar-aula').addEventListener('click', () => {
      viuTeoria = true;
      rodape.hidden = false;
      mostrar();
    });
  }

  function valorEl(el) {
    if (!el) return '';
    return String(el.dataset.valor || el.textContent || '').trim();
  }

  function ehFraseEstudo(texto) {
    return typeof lingoEhFraseEstudo === 'function'
      ? lingoEhFraseEstudo(texto, dados.idioma)
      : String(texto || '').trim() !== '';
  }

  function falarSelecionada(texto) {
    const extraida = typeof lingoFalaDaLinha === 'function' ? lingoFalaDaLinha(texto, dados.idioma) : '';
    const citado = typeof lingoExtrairCitacao === 'function' ? lingoExtrairCitacao(texto) : '';
    const frase = String(citado || extraida || texto || '').trim();
    if (!frase || !ehFraseEstudo(frase)) return;
    lingoFalar(frase, dados.idioma);
  }

  function textoPrompt(ex) {
    if (ex.audio && ehFraseEstudo(ex.audio)) {
      return String(ex.audio).trim();
    }
    const citado = typeof lingoExtrairCitacao === 'function' ? lingoExtrairCitacao(ex.enunciado) : '';
    if (citado && ehFraseEstudo(citado)) return citado;
    const extraida = typeof lingoFalaDaLinha === 'function' ? lingoFalaDaLinha(ex.enunciado, dados.idioma) : '';
    if (extraida && ehFraseEstudo(extraida)) return extraida;
    return '';
  }

  function fraseParaRepetir(ex) {
    const bruto = String((ex && ex.audio) || textoPrompt(ex) || '').replace(/…/g, '').trim();
    if (!bruto || /_{2,}/.test(bruto) || !ehFraseEstudo(bruto)) return '';
    return bruto;
  }

  function montarPainelFala(fraseInicial) {
    const box = document.createElement('section');
    box.className = 'falar-box';
    let alvo = String(fraseInicial || '').trim();
    box.innerHTML = `<p class="olho">Fale no idioma de estudo</p>
      <p class="falar-alvo"></p>
      <div class="falar-acoes">
        <button type="button" class="botao botao-claro botao-pequeno" data-ouvir>Ouvir</button>
        <button type="button" class="botao botao-principal botao-pequeno btn-mic" data-mic>${ICO_MIC}<span>Falar</span></button>
      </div>
      <div class="captura-som" hidden>
        <div class="captura-ondas" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
        <p class="captura-legenda">Capturando som</p>
      </div>
      <p class="falar-status" aria-live="polite"></p>`;
    const alvoEl = box.querySelector('.falar-alvo');
    const statusEl = box.querySelector('.falar-status');
    const capturaEl = box.querySelector('.captura-som');
    const legendaEl = box.querySelector('.captura-legenda');
    const barras = box.querySelectorAll('.captura-ondas span');
    const btnMic = box.querySelector('[data-mic]');
    const btnOuvir = box.querySelector('[data-ouvir]');
    const rotuloMic = btnMic.querySelector('span');

    function pintarAlvo() {
      if (alvo && ehFraseEstudo(alvo)) {
        alvoEl.innerHTML = 'Repita: <strong></strong>';
        alvoEl.querySelector('strong').textContent = alvo;
        btnOuvir.hidden = false;
      } else {
        alvoEl.textContent = 'Toque numa palavra do idioma de estudo e depois em Falar.';
        btnOuvir.hidden = true;
      }
    }

    function restaurarMic() {
      escutando = false;
      btnMic.classList.remove('ouvindo');
      rotuloMic.textContent = 'Falar';
      box.classList.remove('preparando', 'capturando');
      capturaEl.hidden = true;
    }

    function mostrarJanela(fase) {
      if (fase === 'corrigindo') {
        box.classList.remove('preparando', 'capturando');
        capturaEl.hidden = true;
        statusEl.className = 'falar-status';
        statusEl.textContent = 'Corrigindo…';
        rotuloMic.textContent = 'Aguarde';
        return;
      }
      capturaEl.hidden = false;
      box.classList.toggle('preparando', fase === 'preparar');
      box.classList.toggle('capturando', fase === 'captura');
      legendaEl.textContent = fase === 'preparar' ? 'Prepare-se' : 'Capturando som';
      statusEl.className = 'falar-status';
      statusEl.textContent = fase === 'preparar' ? 'Prepare-se para falar.' : 'Capturando som…';
      rotuloMic.textContent = 'Ouvindo…';
    }

    function mostrarRitmo(niveis) {
      const lista = Array.isArray(niveis) ? niveis : [];
      barras.forEach((barra, i) => {
        const nivel = Math.max(0, Math.min(1, Number(lista[i]) || 0));
        barra.style.height = (6 + nivel * 34) + 'px';
      });
    }

    function definirAlvo(frase) {
      const texto = String(frase || '').trim();
      if (!texto || !ehFraseEstudo(texto)) return;
      alvo = texto;
      statusEl.textContent = '';
      statusEl.className = 'falar-status';
      pintarAlvo();
    }

    let escutando = false;

    function falar() {
      if (escutando) {
        if (typeof lingoConcluirOuvir === 'function') lingoConcluirOuvir();
        return;
      }
      if (!alvo) {
        const sel = area.querySelector('.opcao.selecionada');
        if (sel && ehFraseEstudo(valorEl(sel))) definirAlvo(valorEl(sel));
      }
      if (!alvo || !ehFraseEstudo(alvo) || typeof lingoOuvir !== 'function') {
        statusEl.className = 'falar-status erro';
        statusEl.textContent = 'Toque na palavra do idioma de estudo e depois em Falar.';
        return;
      }
      escutando = true;
      btnMic.classList.add('ouvindo');
      rotuloMic.textContent = 'Aguarde';
      statusEl.className = 'falar-status';
      statusEl.textContent = 'Preparando o microfone…';
      lingoOuvir(dados.idioma, {
        esperado: alvo,
        janela: mostrarJanela,
        ritmo: mostrarRitmo,
        parcial: (texto) => {
          if (box.classList.contains('capturando') || box.classList.contains('preparando')) return;
          statusEl.className = 'falar-status';
          statusEl.textContent = texto;
          if (/Baixando|Preparando|Corrigindo/.test(texto)) rotuloMic.textContent = 'Aguarde';
        },
        fim: (ouviu, correcao) => {
          const c = correcao || {};
          statusEl.className = 'falar-status ' + (c.status || '');
          statusEl.textContent = (c.titulo ? c.titulo + '. ' : '') + (c.texto || ouviu || '');
        },
        erro: (msg) => {
          statusEl.className = 'falar-status erro';
          statusEl.textContent = msg;
        },
        fimEscuta: restaurarMic,
      });
    }

    pintarAlvo();
    btnOuvir.addEventListener('click', () => {
      if (typeof lingoPararOuvir === 'function') lingoPararOuvir();
      restaurarMic();
      if (alvo && typeof lingoFalar === 'function') lingoFalar(alvo, dados.idioma);
    });
    btnMic.addEventListener('click', falar);
    box.definirAlvo = definirAlvo;
    box.falar = falar;
    return box;
  }

  function primeiraFraseEstudo(ex) {
    const itens = [].concat((ex && ex.alternativas) || [], (ex && ex.esquerda) || []);
    const achou = itens.find((item) => ehFraseEstudo(item));
    return achou ? String(achou).trim() : '';
  }

  function atualizarAlvoFala(texto) {
    if (falaFixaAtual) return;
    const box = area.querySelector('.falar-box');
    if (box && typeof box.definirAlvo === 'function') box.definirAlvo(texto);
  }

  function habilitarCheck(ok) {
    btnCheck.disabled = !ok;
  }

  function mostrar() {
    atualizarStatus();
    feedback.hidden = true;
    rodape.hidden = false;
    if (vidas <= 0 || indice >= dados.exercicios.length) {
      finalizar();
      return;
    }
    bloqueado = false;
    if (typeof lingoPararOuvir === 'function') lingoPararOuvir();
    ordemEscolhida = [];
    emparelharEsq = null;
    pares = {};
    paresRev = {};
    habilitarCheck(false);
    const ex = dados.exercicios[indice];
    area.innerHTML = '';
    const caixa = document.createElement('div');
    caixa.className = 'pergunta';
    const falaInicial = textoPrompt(ex);
    const lacuna = fraseLacunaDe(ex.enunciado);
    const ehCompletar = ex.tipo === 'completar';
    const falaCompletar = ehCompletar ? String(ex.audio || falaInicial || '').trim() : '';
    const titulo = ehCompletar
      ? 'Ouça a frase e escreva a palavra que falta.'
      : (lacuna ? 'Preencha a palavra que falta nesta frase.' : String(ex.enunciado || ''));
    const mostrarFalante = !ehCompletar && !!(falaInicial && String(falaInicial).trim());
    const tarefa = ex.tarefa || rotuloTarefa(ex.tipo);
    const instrucao = ehCompletar
      ? (ex.instrucao || 'Toque em Ouvir a frase, escute e escreva a palavra que falta.')
      : (ex.instrucao || '');
    caixa.innerHTML = `<p class="olho">${escapar(tarefa)}</p>
      <h2>
      ${mostrarFalante ? htmlFalante(falaInicial) : ''}
      ${escapar(titulo)}
    </h2>
      ${instrucao ? `<p class="intro">${escapar(instrucao)}</p>` : ''}
      ${falaCompletar ? `<button type="button" class="btn-ouvir-completa" aria-label="Ouvir a frase" data-fala="${escapar(falaCompletar)}">${ICO_OUVIR}<span>Ouvir a frase</span></button>` : ''}
      ${ex.dica ? `<p><button type="button" class="btn-dica-aula" id="btn-ver-dica">Ver dica</button></p>
      <p class="intro dica-aula-texto" id="texto-dica" hidden>${escapar(ex.dica)}</p>` : ''}`;
    caixa.appendChild(montarControles(ex));
    falaFixaAtual = fraseParaRepetir(ex);
    caixa.appendChild(montarPainelFala(falaFixaAtual || primeiraFraseEstudo(ex)));
    area.appendChild(caixa);
    const tocarAudio = (fala) => {
      const frase = String(fala || '').trim();
      if (!frase || typeof lingoFalar !== 'function') return;
      lingoFalar(frase, dados.idioma);
    };
    caixa.querySelectorAll('.btn-ouvir-completa').forEach((botao) => {
      botao.addEventListener('click', () => tocarAudio(botao.dataset.fala));
    });
    const falante = caixa.querySelector('.btn-falante');
    if (falante) {
      falante.addEventListener('click', () => {
        const fala = String(falante.dataset.fala || ex.audio || '').trim();
        if (fala && ehFraseEstudo(fala)) lingoFalar(fala, dados.idioma);
      });
    }
    if (falaCompletar) {
      requestAnimationFrame(() => tocarAudio(falaCompletar));
    }
    const btnDica = caixa.querySelector('#btn-ver-dica');
    if (btnDica) {
      btnDica.addEventListener('click', () => {
        const texto = caixa.querySelector('#texto-dica');
        if (!texto) return;
        texto.hidden = !texto.hidden;
        btnDica.textContent = texto.hidden ? 'Ver dica' : 'Ocultar dica';
      });
    }
  }

  function aoDigitar(el) {
    habilitarCheck(String(el.value || '').trim() !== '');
    if (el.tagName === 'TEXTAREA') {
      el.style.height = 'auto';
      el.style.height = Math.min(el.scrollHeight, 200) + 'px';
    }
  }

  function focarLivre() {
    const el = document.getElementById('resposta-livre');
    if (el) {
      requestAnimationFrame(() => el.focus());
    }
  }

  function montarCampoLivre(ex) {
    const caixa = document.createElement('div');
    const enunciado = String(ex.enunciado || '');
    if (ex.tipo === 'completar') {
      const frase = fraseLacunaDe(enunciado) || enunciado.replace(/^(Complete|Completa|Complète|Complétez|Completi)[:\s]+/i, '');
      const partes = frase.split(/_{2,}/);
      if (partes.length >= 2) {
        caixa.className = 'campo-livre frase-lacuna';
        const linha = document.createElement('p');
        linha.className = 'frase-completa';
        const antes = partes[0].replace(/\s+$/, ' ');
        if (antes.trim()) linha.appendChild(document.createTextNode(antes));
        const input = document.createElement('input');
        input.type = 'text';
        input.id = 'resposta-livre';
        input.className = 'lacuna-input';
        input.autocomplete = 'off';
        input.autocapitalize = 'off';
        input.spellcheck = false;
        input.placeholder = '…';
        const gabarito = String(ex.resposta || '').split('|')[0].trim();
        input.style.minWidth = Math.max(7, gabarito.length + 3) + 'ch';
        input.addEventListener('input', () => aoDigitar(input));
        linha.appendChild(input);
        const depois = partes.slice(1).join(' ').replace(/_{2,}/g, ' ').replace(/^\s+/, ' ');
        if (depois.trim()) linha.appendChild(document.createTextNode(depois));
        const ajuda = document.createElement('p');
        ajuda.className = 'campo-resposta-ajuda';
        ajuda.textContent = 'Ouça a frase e escreva no espaço só a palavra que falta. Enter confirma.';
        caixa.append(linha, ajuda);
        focarLivre();
        return caixa;
      }
    }

    caixa.className = 'campo-livre';
    const rotulo = document.createElement('label');
    rotulo.className = 'campo-resposta-label';
    rotulo.setAttribute('for', 'resposta-livre');
    rotulo.textContent = ex.tipo === 'traducao' ? 'Sua tradução' : 'Sua resposta';
    const areaTexto = document.createElement('textarea');
    areaTexto.id = 'resposta-livre';
    areaTexto.className = 'campo-resposta';
    areaTexto.rows = ex.tipo === 'traducao' ? 3 : 2;
    areaTexto.autocomplete = 'off';
    areaTexto.spellcheck = ex.tipo === 'traducao';
    areaTexto.lang = ex.tipo === 'traducao' ? 'pt-BR' : '';
    areaTexto.placeholder = ex.tipo === 'traducao'
      ? 'Escreva aqui em português…'
      : 'Escreva a palavra ou frase que falta…';
    areaTexto.addEventListener('input', () => aoDigitar(areaTexto));
    const ajuda = document.createElement('p');
    ajuda.className = 'campo-resposta-ajuda';
    ajuda.textContent = ex.tipo === 'completar'
      ? 'Ouça a frase e escreva a palavra que falta. Enter confirma.'
      : 'Campo grande para digitar com conforto. Enter envia a resposta.';
    caixa.append(rotulo, areaTexto, ajuda);
    focarLivre();
    return caixa;
  }

  function montarControles(ex) {
    const wrap = document.createElement('div');
    if (ex.tipo === 'multipla' || ex.tipo === 'verdadeiro_falso') {
      wrap.className = 'opcoes';
      (ex.alternativas || []).forEach((opcao, i) => {
        const botao = document.createElement('button');
        botao.type = 'button';
        botao.className = 'opcao';
        botao.dataset.valor = opcao;
        botao.innerHTML = `<span>${escapar(opcao)}</span><span class="num">${i + 1}</span>`;
        botao.addEventListener('click', () => {
          if (bloqueado) return;
          wrap.querySelectorAll('.opcao').forEach((el) => el.classList.remove('selecionada'));
          botao.classList.add('selecionada');
          habilitarCheck(true);
          if (ex.tipo !== 'verdadeiro_falso') {
            falarSelecionada(opcao);
            atualizarAlvoFala(opcao);
          }
        });
        wrap.appendChild(botao);
      });
      return wrap;
    }
    if (ex.tipo === 'completar' || ex.tipo === 'traducao') {
      wrap.appendChild(montarCampoLivre(ex));
      return wrap;
    }
    if (ex.tipo === 'ordem') {
      wrap.innerHTML = '<p class="intro">Toque nas palavras na ordem certa. Toque de novo para desfazer.</p><div class="chips chips-frase" id="montada"></div><div class="chips" id="banco"></div>';
      const banco = wrap.querySelector('#banco');
      const palavras = ex.alternativas || [];
      palavras.forEach((palavra) => {
        const chip = document.createElement('button');
        chip.type = 'button';
        chip.className = 'chip';
        chip.dataset.valor = palavra;
        chip.textContent = palavra;
        chip.addEventListener('click', () => {
          if (bloqueado || chip.disabled) return;
          chip.disabled = true;
          ordemEscolhida.push(palavra);
          renderOrdem(wrap);
          habilitarCheck(ordemEscolhida.length === palavras.length);
          falarSelecionada(palavra);
          atualizarAlvoFala(ordemEscolhida.join(' '));
        });
        banco.appendChild(chip);
      });
      return wrap;
    }
    if (ex.tipo === 'emparelhar') {
      wrap.className = 'emparelhar';
      const ajuda = document.createElement('p');
      ajuda.className = 'intro emparelhar-ajuda';
      ajuda.textContent = 'Toque à esquerda e depois à direita. Toque num par para desfazer.';
      const cabE = document.createElement('p');
      cabE.className = 'olho';
      cabE.textContent = dados.curso || 'Idioma';
      const cabD = document.createElement('p');
      cabD.className = 'olho';
      cabD.textContent = 'Português';
      const colE = document.createElement('div');
      const colD = document.createElement('div');
      colE.appendChild(cabE);
      colD.appendChild(cabD);
      (ex.esquerda || []).forEach((item) => colE.appendChild(chipEmparelhar(item, 'esq', wrap, ex)));
      (ex.direita || []).forEach((item) => colD.appendChild(chipEmparelhar(item, 'dir', wrap, ex)));
      wrap.append(ajuda, colE, colD);
      return wrap;
    }
    return wrap;
  }

  function renderOrdem(wrap) {
    const montada = wrap.querySelector('#montada');
    montada.innerHTML = '';
    ordemEscolhida.forEach((palavra, idx) => {
      const chip = document.createElement('button');
      chip.type = 'button';
      chip.className = 'chip selecionado';
      chip.dataset.valor = palavra;
      chip.textContent = palavra;
      chip.addEventListener('click', () => {
        if (bloqueado) return;
        ordemEscolhida.splice(idx, 1);
        wrap.querySelectorAll('#banco .chip').forEach((el) => {
          if (el.dataset.valor === palavra && el.disabled) el.disabled = false;
        });
        renderOrdem(wrap);
        const total = (area.querySelectorAll('#banco .chip') || []).length;
        habilitarCheck(ordemEscolhida.length === total && total > 0);
      });
      montada.appendChild(chip);
    });
  }

  function numerarPares(wrap) {
    wrap.querySelectorAll('.par-num').forEach((el) => el.remove());
    const esqs = [...wrap.querySelectorAll('[data-lado="esq"].pareada')];
    esqs.forEach((el, i) => {
      const n = String(i + 1);
      const badge = document.createElement('span');
      badge.className = 'par-num';
      badge.textContent = n;
      el.appendChild(badge);
      const dirTxt = pares[valorEl(el)];
      const dirEl = [...wrap.querySelectorAll('[data-lado="dir"]')].find((d) => valorEl(d) === dirTxt);
      if (dirEl) {
        const badgeD = document.createElement('span');
        badgeD.className = 'par-num';
        badgeD.textContent = n;
        dirEl.appendChild(badgeD);
      }
    });
  }

  function chipEmparelhar(texto, lado, wrap, ex) {
    const botao = document.createElement('button');
    botao.type = 'button';
    botao.className = 'opcao';
    botao.dataset.valor = texto;
    botao.innerHTML = `<span>${escapar(texto)}</span>`;
    botao.dataset.lado = lado;
    botao.addEventListener('click', () => {
      if (bloqueado) return;
      if (botao.classList.contains('pareada')) {
        const outro = lado === 'esq' ? pares[texto] : paresRev[texto];
        const esqTxt = lado === 'esq' ? texto : outro;
        const dirTxt = lado === 'esq' ? outro : texto;
        delete pares[esqTxt];
        delete paresRev[dirTxt];
        wrap.querySelectorAll('.opcao').forEach((el) => {
          if (valorEl(el) === esqTxt || valorEl(el) === dirTxt) {
            el.classList.remove('pareada', 'selecionada');
          }
        });
        numerarPares(wrap);
        habilitarCheck(Object.keys(pares).length === (ex.esquerda || []).length && (ex.esquerda || []).length > 0);
        return;
      }
      if (lado === 'esq') {
        wrap.querySelectorAll('[data-lado="esq"]:not(.pareada)').forEach((el) => el.classList.remove('selecionada'));
        botao.classList.add('selecionada');
        emparelharEsq = texto;
        falarSelecionada(texto);
        atualizarAlvoFala(texto);
        return;
      }
      if (!emparelharEsq) {
        return;
      }
      pares[emparelharEsq] = texto;
      paresRev[texto] = emparelharEsq;
      wrap.querySelectorAll('.opcao.selecionada:not(.pareada)').forEach((el) => el.classList.remove('selecionada'));
      const esqEl = [...wrap.querySelectorAll('[data-lado="esq"]')].find((el) => valorEl(el) === emparelharEsq);
      if (esqEl) esqEl.classList.add('pareada');
      botao.classList.add('pareada');
      emparelharEsq = null;
      numerarPares(wrap);
      habilitarCheck(Object.keys(pares).length === (ex.esquerda || []).length && (ex.esquerda || []).length > 0);
    });
    return botao;
  }

  async function verificar(ex, pulou) {
    if (bloqueado) return;
    if (typeof lingoPrepararAudio === 'function') lingoPrepararAudio();
    const resposta = pulou ? '__pular__' : coletar(ex);
    if (!pulou && ex.tipo === 'emparelhar' && Object.keys(pares).length !== (ex.esquerda || []).length) {
      return;
    }
    if (!pulou && ex.tipo === 'ordem' && (!Array.isArray(resposta) || resposta.length !== (ex.alternativas || []).length)) {
      return;
    }
    if (!pulou && (resposta === null || resposta === '' || (Array.isArray(resposta) && resposta.length === 0) || (typeof resposta === 'object' && !Array.isArray(resposta) && !Object.keys(resposta).length))) {
      return;
    }
    bloqueado = true;
    btnCheck.disabled = true;
    btnCheck.textContent = 'Verificando…';
    const retorno = await fetch('api/responder.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ csrf: dados.csrf, exercicio_id: ex.id, resposta }),
    }).then((r) => r.json()).catch(() => ({ ok: false, erro: 'Falha de rede.' }));

    btnCheck.textContent = 'Verificar';
    rodape.hidden = true;
    feedback.hidden = false;
    if (!retorno.ok) {
      feedback.className = 'aula-feedback erro';
      fbTitulo.textContent = 'Erro';
      fbTexto.textContent = retorno.erro || 'Não foi possível verificar.';
      bloqueado = false;
      rodape.hidden = false;
      feedback.hidden = true;
      if (typeof lingoSom === 'function') lingoSom('erro');
      return;
    }
    if (retorno.correta) {
      acertos += 1;
      feedback.className = 'aula-feedback ok';
      fbTitulo.textContent = 'Certo';
      fbTexto.textContent = 'Pode seguir.';
      if (typeof lingoSom === 'function') lingoSom('ok');
    } else {
      erros += 1;
      if (!plus) {
        vidas -= 1;
      }
      atualizarStatus();
      feedback.className = 'aula-feedback erro';
      fbTitulo.textContent = pulou ? 'Pulado. Resposta:' : 'Resposta:';
      fbTexto.textContent = retorno.gabarito || '';
      if (typeof lingoSom === 'function') lingoSom('erro');
    }
    requestAnimationFrame(() => btnContinuar.focus());
  }

  function coletar(ex) {
    if (ex.tipo === 'multipla' || ex.tipo === 'verdadeiro_falso') {
      const sel = area.querySelector('.opcao.selecionada');
      return sel ? valorEl(sel) : '';
    }
    if (ex.tipo === 'completar' || ex.tipo === 'traducao') {
      return (document.getElementById('resposta-livre') || {}).value || '';
    }
    if (ex.tipo === 'ordem') return ordemEscolhida;
    if (ex.tipo === 'emparelhar') return pares;
    return '';
  }

  async function finalizar() {
    atualizarStatus();
    rodape.hidden = true;
    feedback.hidden = true;
    const retorno = await fetch('api/concluir.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ csrf: dados.csrf, aula_id: dados.id, acertos, erros }),
    }).then((r) => r.json()).catch(() => ({ ok: false }));

    const ok = retorno.concluiu;
    if (typeof lingoSom === 'function') lingoSom(ok ? 'vitoria' : 'quase');
    area.hidden = false;
    area.innerHTML = `<div class="resultado">
      <img class="mascote" src="assets/img/mascote.svg?v=5" alt="" style="width:140px">
      <h1>${ok ? 'Lição concluída' : 'Quase lá'}</h1>
      <p>${acertos} acertos · ${erros} erros · ${retorno.percentual || 0}%</p>
      <div class="xp-ganho">+${retorno.xp || 0} XP</div>
      <p>${ok ? 'A próxima lição da trilha já está liberada.' : 'É preciso pelo menos 70% de acertos para avançar.'}</p>
      <div class="acoes" style="justify-content:center">
        <a class="botao botao-principal" href="painel.php">Continuar</a>
        <a class="botao botao-claro" href="aula.php?id=${dados.id}">Repetir</a>
        <a class="botao botao-claro" href="tutor.php?aula=${encodeURIComponent(dados.titulo || '')}">Falar com o Lino</a>
        <a class="botao botao-claro" href="conversa.php">Sala de conversação</a>
      </div>
    </div>`;
  }

  function escapar(texto) {
    return String(texto || '').replace(/[&<>"']/g, (c) => ({
      '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;',
    }[c]));
  }

  btnCheck.addEventListener('click', () => {
    const ex = dados.exercicios[indice];
    if (ex) verificar(ex, false);
  });
  btnPular.addEventListener('click', () => {
    const ex = dados.exercicios[indice];
    if (ex) verificar(ex, true);
  });
  btnContinuar.addEventListener('click', () => {
    if (typeof lingoPrepararAudio === 'function') lingoPrepararAudio();
    indice += 1;
    const acabou = indice >= dados.exercicios.length || vidas <= 0;
    if (!acabou && typeof lingoSom === 'function') lingoSom('passo');
    mostrar();
  });

  document.addEventListener('keydown', (evento) => {
    const comecar = document.getElementById('btn-comecar-aula');
    if (comecar && evento.key === 'Enter' && !(evento.target && /input|textarea/i.test(evento.target.tagName))) {
      evento.preventDefault();
      comecar.click();
      return;
    }
    if (evento.target && /input|textarea/i.test(evento.target.tagName)) {
      if (evento.key === 'Enter' && !btnCheck.disabled && feedback.hidden) {
        evento.preventDefault();
        btnCheck.click();
      }
      return;
    }
    if (evento.key === 'Enter') {
      evento.preventDefault();
      if (!feedback.hidden) {
        btnContinuar.click();
      } else if (!btnCheck.disabled) {
        btnCheck.click();
      }
      return;
    }
    if (bloqueado || !feedback.hidden) return;
    const n = parseInt(evento.key, 10);
    if (n >= 1 && n <= 4) {
      const ops = area.querySelectorAll('.opcoes .opcao');
      if (ops[n - 1]) ops[n - 1].click();
    }
  });

  if (btnSair) {
    btnSair.addEventListener('click', (evento) => {
      if (viuTeoria && indice > 0 && indice < dados.exercicios.length && vidas > 0) {
        if (!confirm('Sair da lição agora? Esta sessão não será salva.')) {
          evento.preventDefault();
        }
      }
    });
  }

  atualizarStatus();
  iniciar();
})();
