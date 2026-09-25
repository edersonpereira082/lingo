function lingoIconeOuvir() {
  return '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M4 9.2h3.4L12 5.5v13l-4.6-3.7H4z"/><path d="M16 8.4a4 4 0 0 1 0 7.2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M18.5 6.2a7 7 0 0 1 0 11.6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>';
}

function lingoMaiusculo(campo) {
  const inicio = campo.selectionStart;
  const fim = campo.selectionEnd;
  const valor = campo.value.toLocaleUpperCase('pt-BR');
  if (campo.value !== valor) {
    campo.value = valor;
    if (typeof inicio === 'number' && typeof fim === 'number') {
      campo.setSelectionRange(inicio, fim);
    }
  }
}

document.querySelectorAll('.campo-maiusculo').forEach((campo) => {
  lingoMaiusculo(campo);
  campo.addEventListener('input', () => lingoMaiusculo(campo));
});

document.addEventListener('submit', (evento) => {
  const alvo = evento.target.closest('[data-confirmar]');
  if (alvo && !confirm(alvo.getAttribute('data-confirmar'))) {
    evento.preventDefault();
    return;
  }
  const form = evento.target;
  if (!(form instanceof HTMLFormElement) || form.dataset.semEspera === '1') return;
  const btn = form.querySelector('button[type="submit"]');
  if (btn && !btn.disabled) {
    setTimeout(() => {
      if (btn.disabled) return;
      btn.disabled = true;
      btn.classList.add('ocupado');
      if (!btn.dataset.rotulo) btn.dataset.rotulo = btn.textContent;
      btn.textContent = btn.getAttribute('data-espera') || 'Aguarde…';
    }, 0);
  }
});

let lingoAudioCtx = null;

function lingoCtx() {
  const AC = window.AudioContext || window.webkitAudioContext;
  if (!AC) return null;
  if (!lingoAudioCtx) lingoAudioCtx = new AC();
  if (lingoAudioCtx.state === 'suspended') lingoAudioCtx.resume();
  return lingoAudioCtx;
}

function lingoPrepararAudio() {
  lingoCtx();
}

document.addEventListener('pointerdown', lingoPrepararAudio, { passive: true });

function lingoTom(ctx, freq, inicio, duracao, tipo, volume, destino) {
  const osc = ctx.createOscillator();
  const ganho = ctx.createGain();
  osc.type = tipo;
  osc.frequency.setValueAtTime(Math.max(freq, 40), inicio);
  if (destino && destino > 0) {
    osc.frequency.exponentialRampToValueAtTime(Math.max(destino, 40), inicio + duracao);
  }
  ganho.gain.setValueAtTime(0.0001, inicio);
  ganho.gain.exponentialRampToValueAtTime(volume, inicio + 0.018);
  ganho.gain.exponentialRampToValueAtTime(0.0001, inicio + duracao);
  osc.connect(ganho);
  ganho.connect(ctx.destination);
  osc.start(inicio);
  osc.stop(inicio + duracao + 0.03);
}

function lingoSom(tipo) {
  const ctx = lingoCtx();
  if (!ctx) return;
  const t = ctx.currentTime + 0.01;
  if (tipo === 'ok') {
    [[523.25, 0], [659.25, 0.09], [783.99, 0.17], [1046.5, 0.27]].forEach(([freq, atraso]) => {
      lingoTom(ctx, freq, t + atraso, 0.24, 'triangle', 0.085);
      lingoTom(ctx, freq * 2, t + atraso, 0.1, 'sine', 0.028);
    });
    return;
  }
  if (tipo === 'erro') {
    lingoTom(ctx, 392, t, 0.16, 'sine', 0.07, 294);
    lingoTom(ctx, 247, t + 0.11, 0.32, 'triangle', 0.055, 185);
    return;
  }
  if (tipo === 'passo') {
    lingoTom(ctx, 587, t, 0.09, 'sine', 0.045, 880);
    lingoTom(ctx, 988, t + 0.07, 0.14, 'triangle', 0.04);
    return;
  }
  if (tipo === 'vitoria') {
    [523.25, 659.25, 783.99, 1046.5, 783.99, 1046.5, 1318.5].forEach((freq, i) => {
      lingoTom(ctx, freq, t + i * 0.11, 0.22, 'triangle', 0.08);
    });
    lingoTom(ctx, 1568, t + 0.86, 0.5, 'sine', 0.05);
    return;
  }
  if (tipo === 'quase') {
    lingoTom(ctx, 440, t, 0.16, 'sine', 0.06);
    lingoTom(ctx, 523.25, t + 0.14, 0.26, 'triangle', 0.05);
  }
}

let lingoVozes = [];
let lingoAudioAtual = null;

function lingoPrefixoIdioma(codigo) {
  return String(codigo || 'en').toLowerCase().replace('_', '-').split('-')[0];
}

function lingoParecePortugues(texto) {
  const t = String(texto || '').toLowerCase().normalize('NFC').trim();
  if (!t) return false;
  if (/[ãõ]/.test(t)) return true;
  if (/ção|ções|ões|ães/.test(t)) return true;
  const frases = [
    'bom dia', 'boa tarde', 'boa noite', 'de nada', 'tudo bem', 'com licença', 'com licencia',
    'por favor', 'até logo', 'ate logo', 'eu sou', 'eu estou', 'eu tenho', 'eu gosto',
    'estou bem', 'meu nome', 'muito bem', 'como se diz', 'o que significa', 'em português',
    'em portugues', 'monte a frase', 'quer dizer',
  ];
  if (frases.some((f) => t.includes(f))) return true;
  const pt = new Set([
    'você', 'voce', 'não', 'nao', 'obrigado', 'obrigada', 'desculpa', 'desculpe', 'olá', 'ola',
    'oi', 'tchau', 'água', 'agua', 'amanhã', 'amanha', 'hoje', 'ontem', 'também', 'tambem',
    'porque', 'traduza', 'tradução', 'traducao', 'complete', 'preencha', 'verdadeiro', 'falso',
    'escolha', 'opção', 'opcao', 'correta', 'significa', 'leite', 'pão', 'pao', 'maçã', 'maca',
    'sim', 'escute', 'ouça', 'ouca', 'emparelhe',
  ]);
  return t.split(/[^a-zà-ÿáéíóúâêôãõçü]+/i).filter(Boolean).some((w) => pt.has(w));
}

function lingoExtrairCitacao(texto) {
  const t = String(texto || '');
  const m = t.match(/["«“„]([^"»”]+)["»”]/) || t.match(/'([^']+)'/);
  return m ? String(m[1] || '').trim() : '';
}

function lingoEhFraseEstudo(texto, idioma) {
  const t = String(texto || '').trim();
  if (!t) return false;
  const baixo = t.toLowerCase();
  if (['verdadeiro', 'falso', 'true', 'false', 'v', 'f'].includes(baixo)) return false;
  const prefixo = lingoPrefixoIdioma(idioma || 'en');
  if (prefixo === 'pt') return true;
  if (lingoParecePortugues(t)) {
    if (prefixo === 'es' && !/[ãõ]/.test(baixo) && !/\b(você|voce|não|nao|obrigad)/i.test(baixo)) {
      return true;
    }
    return false;
  }
  return true;
}

function lingoLimparGlosaItem(texto) {
  return String(texto || '')
    .replace(/\s*\(([^)]*)\)\s*$/g, (tudo, inner) => {
      if (/informal|formal|literal|coloquial|plural|singular/i.test(inner)) return '';
      if (typeof lingoParecePortugues === 'function' && lingoParecePortugues(inner)) return '';
      return tudo;
    })
    .replace(/\s+/g, ' ')
    .trim();
}

function lingoPartesOuvir(linha, idioma) {
  let t = String(linha || '').trim();
  if (!t) return [];
  const citado = lingoExtrairCitacao(t);
  if (citado && lingoEhFraseEstudo(citado, idioma)) {
    return [citado];
  }
  t = t.replace(/^[A-Za-zÀ-ÿ.]{1,24}:\s+/, '');
  if (!t) return [];

  const soPt = (frase) => {
    const p = lingoLimparGlosaItem(frase);
    if (!p) return true;
    return !lingoEhFraseEstudo(p, idioma);
  };

  if (/\s+=\s+/.test(t)) {
    return t.split(/\s+=\s+/)[0]
      .split(/\s*·\s*/)
      .map(lingoLimparGlosaItem)
      .filter((p) => p && !soPt(p));
  }

  if (/\s+[–—]\s+/.test(t)) {
    const esq = lingoLimparGlosaItem(t.split(/\s+[–—]\s+/)[0]);
    return esq && !soPt(esq) ? [esq] : [];
  }

  if (t.includes(' · ')) {
    return t.split(/\s*·\s*/).map(lingoLimparGlosaItem).filter((p) => p && !soPt(p));
  }

  if (t.includes(' / ')) {
    return t.split(/\s*\/\s*/).map(lingoLimparGlosaItem).filter((p) => p && !soPt(p));
  }

  if (/, /.test(t)) {
    const bits = t.split(/\s*,\s*/).map(lingoLimparGlosaItem).filter(Boolean);
    if (bits.length >= 2 && bits.every((b) => b.split(/\s+/).length <= 3 && !soPt(b))) {
      return bits;
    }
  }

  const um = lingoLimparGlosaItem(t);
  if (!um || soPt(um)) return [];
  return [um];
}

function lingoFalaDaLinha(linha, idioma) {
  return lingoPartesOuvir(linha, idioma).join('. ');
}

function lingoCarregarVozes() {
  if (!window.speechSynthesis) return;
  lingoVozes = window.speechSynthesis.getVoices() || [];
}

function lingoVozDoIdioma(idioma) {
  lingoCarregarVozes();
  const prefixo = lingoPrefixoIdioma(idioma);
  const alvo = String(idioma || '').toLowerCase().replace('_', '-');
  const preferidas = {
    en: /english|david|zira|mark/i,
    es: /spanish|espa[nñ]ol|helena|sabina|jorge/i,
    fr: /french|fran[cç]ais|hortense|julie|paul/i,
    it: /italian|italiano|\belsa\b|elisa/i,
    de: /german|deutsch|hedda|katja|stefan/i,
    pt: /portuguese|portugu[eê]s|maria|daniel|francisca/i,
  };
  let melhor = null;
  let pontosMelhor = 0;
  lingoVozes.forEach((voz) => {
    const lang = String(voz.lang || '').toLowerCase().replace('_', '-');
    const prefVoz = lang.split('-')[0];
    if (prefVoz !== prefixo) return;
    let pontos = 10;
    if (lang === alvo) pontos += 20;
    if (preferidas[prefixo] && preferidas[prefixo].test(voz.name || '')) pontos += 15;
    if (voz.localService) pontos += 2;
    if (pontos > pontosMelhor) {
      pontosMelhor = pontos;
      melhor = voz;
    }
  });
  return melhor;
}

function lingoFalar(texto, idioma) {
  let frase = String(texto || '').replace(/\s+/g, ' ').trim();
  if (!frase) return;
  const prefixo = lingoPrefixoIdioma(idioma);
  if (prefixo !== 'pt') {
    const citado = lingoExtrairCitacao(frase);
    if (citado && lingoEhFraseEstudo(citado, idioma)) {
      frase = citado;
    } else if (lingoParecePortugues(frase) || !lingoEhFraseEstudo(frase, idioma)) {
      return;
    }
  }
  if (lingoAudioAtual) {
    lingoAudioAtual.pause();
    lingoAudioAtual = null;
  }
  if (window.speechSynthesis) {
    window.speechSynthesis.cancel();
  }

  const falarNativo = () => {
    const voz = lingoVozDoIdioma(idioma);
    if (!voz || !window.speechSynthesis) {
      lingoFalarServidor(frase, idioma);
      return;
    }
    const fala = new SpeechSynthesisUtterance(frase);
    fala.voice = voz;
    fala.lang = voz.lang || idioma || 'en-US';
    fala.rate = 0.92;
    window.speechSynthesis.speak(fala);
  };

  if (window.speechSynthesis && !lingoVozes.length) {
    lingoCarregarVozes();
    if (!lingoVozes.length) {
      let feito = false;
      const seguir = () => {
        if (feito) return;
        feito = true;
        lingoCarregarVozes();
        falarNativo();
      };
      window.speechSynthesis.addEventListener('voiceschanged', seguir, { once: true });
      window.speechSynthesis.getVoices();
      setTimeout(seguir, 400);
      return;
    }
  }
  falarNativo();
}

function lingoSemAcento(texto) {
  return String(texto || '').normalize('NFD').replace(/[\u0300-\u036f]/g, '');
}

function lingoLimparFala(texto, semAcento) {
  let t = String(texto || '').toLowerCase().replace(/[^\p{L}\p{N}\s']/gu, ' ').replace(/\s+/g, ' ').trim();
  if (semAcento) t = lingoSemAcento(t);
  return t;
}

function lingoDistanciaFala(a, b) {
  const m = a.length;
  const n = b.length;
  if (!m) return n;
  if (!n) return m;
  const linha = Array.from({ length: n + 1 }, (_, j) => j);
  for (let i = 1; i <= m; i += 1) {
    let anterior = linha[0];
    linha[0] = i;
    for (let j = 1; j <= n; j += 1) {
      const tmp = linha[j];
      const custo = a[i - 1] === b[j - 1] ? 0 : 1;
      linha[j] = Math.min(linha[j] + 1, linha[j - 1] + 1, anterior + custo);
      anterior = tmp;
    }
  }
  return linha[n];
}

function lingoCorrigirFala(esperado, ouviu) {
  const esp = String(esperado || '').replace(/\s+/g, ' ').trim();
  const ouv = String(ouviu || '').replace(/\s+/g, ' ').trim();
  const baseE = lingoLimparFala(esp, true);
  const baseO = lingoLimparFala(ouv, true);
  if (!baseE || !baseO) {
    return { status: 'erro', titulo: 'Não entendi', texto: 'Fale a frase de novo, no idioma de estudo.' };
  }
  if (baseE === baseO) {
    if (lingoLimparFala(esp, false) !== lingoLimparFala(ouv, false)) {
      return { status: 'quase', titulo: 'Quase', texto: 'O som está certo. Confira o acento: “' + esp + '”.' };
    }
    return { status: 'certo', titulo: 'Certo', texto: 'Você falou “' + ouv + '”.' };
  }
  const dist = lingoDistanciaFala(baseE, baseO);
  const nota = 1 - dist / Math.max(baseE.length, baseO.length, 1);
  if (nota >= 0.72) {
    return { status: 'quase', titulo: 'Quase', texto: 'Você disse “' + ouv + '”. O esperado é “' + esp + '”.' };
  }
  return { status: 'erro', titulo: 'Tente de novo', texto: 'Você disse “' + ouv + '”. O esperado é “' + esp + '”.' };
}

let lingoRecAtual = null;
let lingoGravadorAtual = null;
let lingoGravarTimer = 0;
let lingoEscutaToken = 0;
let lingoModeloFala = null;
let lingoFalaNuvem = true;
let lingoJanelaAtual = null;
let lingoMedidorAtual = null;
let lingoMedidorGeracao = 0;
try {
  if (sessionStorage.getItem('lingo-fala-local') === '1') lingoFalaNuvem = false;
} catch (e) { /* sessão indisponível */ }

function lingoEncerrarJanela() {
  if (!lingoJanelaAtual) return;
  const janela = lingoJanelaAtual;
  lingoJanelaAtual = null;
  janela.cancelar();
}

function lingoPararMedidor() {
  lingoMedidorGeracao += 1;
  if (!lingoMedidorAtual) return;
  const parar = lingoMedidorAtual;
  lingoMedidorAtual = null;
  parar();
}

function lingoPararOuvir() {
  lingoEscutaToken += 1;
  lingoEncerrarJanela();
  lingoPararMedidor();
  if (lingoRecAtual) {
    const rec = lingoRecAtual;
    lingoRecAtual = null;
    rec.onend = null;
    rec.onerror = null;
    rec.onresult = null;
    try { rec.abort(); } catch (e) { /* já encerrou */ }
  }
  if (lingoGravarTimer) {
    clearTimeout(lingoGravarTimer);
    lingoGravarTimer = 0;
  }
  if (lingoGravadorAtual && lingoGravadorAtual.state === 'recording') {
    try { lingoGravadorAtual.stop(); } catch (e) { /* já encerrou */ }
  }
}

function lingoConcluirOuvir() {
  lingoEncerrarJanela();
  if (lingoRecAtual) {
    try { lingoRecAtual.stop(); } catch (e) { /* já encerrou */ }
  }
  if (lingoGravarTimer) {
    clearTimeout(lingoGravarTimer);
    lingoGravarTimer = 0;
  }
  if (lingoGravadorAtual && lingoGravadorAtual.state === 'recording') {
    try { lingoGravadorAtual.stop(); } catch (e) { /* já encerrou */ }
  }
}

function lingoJanela(op, ms) {
  lingoEncerrarJanela();
  let cancelado = false;
  let timerTick = 0;
  let timerFim = 0;
  let resolver = () => {};
  const promessa = new Promise((resolve) => { resolver = resolve; });
  const inicio = Date.now();
  const tick = () => {
    if (cancelado || !op.janela) return;
    const passou = Date.now() - inicio;
    const fase = passou < 1000 ? 'preparar' : 'captura';
    const restante = Math.max(0, ms - passou);
    const segundos = fase === 'preparar' ? 1 : Math.max(1, Math.ceil(restante / 1000));
    op.janela(fase, segundos);
  };
  const finalizar = () => {
    if (cancelado) return;
    cancelado = true;
    clearInterval(timerTick);
    clearTimeout(timerFim);
    if (lingoJanelaAtual && lingoJanelaAtual.promessa === promessa) lingoJanelaAtual = null;
    resolver();
  };
  tick();
  timerTick = setInterval(tick, 200);
  timerFim = setTimeout(finalizar, ms);
  lingoJanelaAtual = { promessa, cancelar: finalizar };
  return promessa;
}

function lingoIdiomaWhisper(idioma) {
  const nomes = {
    it: 'italian', en: 'english', es: 'spanish', fr: 'french', de: 'german', pt: 'portuguese',
  };
  return nomes[lingoPrefixoIdioma(idioma)] || 'english';
}

function lingoReamostrar(entrada, origem, destino) {
  if (!origem || origem === destino) return entrada;
  const passo = origem / destino;
  const tamanho = Math.max(1, Math.round(entrada.length / passo));
  const saida = new Float32Array(tamanho);
  for (let i = 0; i < tamanho; i += 1) {
    const pos = i * passo;
    const a = Math.floor(pos);
    const b = Math.min(a + 1, entrada.length - 1);
    const t = pos - a;
    saida[i] = entrada[a] * (1 - t) + entrada[b] * t;
  }
  return saida;
}

function lingoEnergia(buffer) {
  if (!buffer.length) return 0;
  let soma = 0;
  for (let i = 0; i < buffer.length; i += 1) soma += buffer[i] * buffer[i];
  return Math.sqrt(soma / buffer.length);
}

async function lingoCarregarModeloFala(avisar) {
  if (lingoModeloFala) return lingoModeloFala;
  if (avisar) avisar('Preparando o reconhecimento de voz…');
  const modulo = await import('https://cdn.jsdelivr.net/npm/@xenova/transformers@2.17.2');
  const env = modulo.env;
  env.allowLocalModels = false;
  env.useBrowserCache = true;
  lingoModeloFala = await modulo.pipeline('automatic-speech-recognition', 'Xenova/whisper-tiny', {
    progress_callback: (p) => {
      if (!avisar || !p) return;
      if (p.status === 'progress' && p.total) {
        avisar('Baixando reconhecimento ' + Math.round((100 * p.loaded) / p.total) + '%');
      }
    },
  });
  return lingoModeloFala;
}

function lingoMedirSom(stream, op, encerrarStream) {
  lingoPararMedidor();
  if (!stream || !window.AudioContext || !op || !op.ritmo) return;
  const ctx = new AudioContext();
  if (ctx.resume) ctx.resume();
  const origem = ctx.createMediaStreamSource(stream);
  const analise = ctx.createAnalyser();
  analise.fftSize = 1024;
  analise.smoothingTimeConstant = 0.45;
  origem.connect(analise);
  const dados = new Uint8Array(analise.frequencyBinCount);
  const faixas = [[80, 180], [180, 320], [320, 520], [520, 860], [860, 1400], [1400, 2300], [2300, 4000]];
  const id = setInterval(() => {
    analise.getByteFrequencyData(dados);
    const taxa = ctx.sampleRate || 48000;
    const niveis = faixas.map(([de, ate]) => {
      const ini = Math.max(0, Math.floor((de * analise.fftSize) / taxa));
      const fim = Math.min(dados.length - 1, Math.ceil((ate * analise.fftSize) / taxa));
      let soma = 0;
      let n = 0;
      for (let i = ini; i <= fim; i += 1) {
        soma += dados[i];
        n += 1;
      }
      return Math.min(1, (n ? soma / n : 0) / 150);
    });
    op.ritmo(niveis);
  }, 60);
  lingoMedidorAtual = () => {
    clearInterval(id);
    if (ctx.close) ctx.close();
    if (encerrarStream) stream.getTracks().forEach((trilha) => trilha.stop());
  };
}

function lingoAbrirMedidor(op) {
  if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) return;
  const geracao = lingoMedidorGeracao;
  navigator.mediaDevices.getUserMedia({ audio: true }).then((stream) => {
    if (geracao !== lingoMedidorGeracao) {
      stream.getTracks().forEach((trilha) => trilha.stop());
      return;
    }
    lingoMedirSom(stream, op, true);
  }).catch(() => {});
}

function lingoGravar(ms, streamPronto, op) {
  const abrir = streamPronto || navigator.mediaDevices.getUserMedia({ audio: true });
  return abrir.then((stream) => new Promise((resolve, reject) => {
    if (!stream || !stream.getTracks) {
      reject(new Error('mic'));
      return;
    }
    lingoMedirSom(stream, op || {});
    const tipos = ['audio/webm;codecs=opus', 'audio/webm', 'audio/mp4'];
    const mime = tipos.find((tipo) => window.MediaRecorder && MediaRecorder.isTypeSupported(tipo)) || '';
    const rec = new MediaRecorder(stream, mime ? { mimeType: mime } : undefined);
    const partes = [];
    lingoGravadorAtual = rec;
    rec.ondataavailable = (ev) => { if (ev.data && ev.data.size) partes.push(ev.data); };
    rec.onerror = () => {
      lingoPararMedidor();
      stream.getTracks().forEach((trilha) => trilha.stop());
      reject(new Error('gravacao'));
    };
    rec.onstop = () => {
      lingoPararMedidor();
      stream.getTracks().forEach((trilha) => trilha.stop());
      if (lingoGravadorAtual === rec) lingoGravadorAtual = null;
      resolve(new Blob(partes, { type: rec.mimeType || mime || 'audio/webm' }));
    };
    rec.start();
    lingoJanela(op || {}, ms);
    lingoGravarTimer = setTimeout(() => {
      if (rec.state === 'recording') rec.stop();
    }, ms);
  }));
}

async function lingoTranscrever(blob, idioma) {
  const ctx = new AudioContext();
  const bruto = await ctx.decodeAudioData(await blob.arrayBuffer());
  const canal = bruto.getChannelData(0);
  const audio = lingoReamostrar(canal, bruto.sampleRate, 16000);
  if (ctx.close) ctx.close();
  if (lingoEnergia(audio) < 0.008) return '';
  const modelo = await lingoCarregarModeloFala();
  const saida = await modelo(audio, {
    language: lingoIdiomaWhisper(idioma),
    task: 'transcribe',
  });
  return String((saida && saida.text) || '').replace(/\s+/g, ' ').trim();
}

function lingoOuvirLocal(idioma, op, streamPronto) {
  const token = lingoEscutaToken;
  const vivo = () => token === lingoEscutaToken;
  const avisar = (msg) => { if (vivo() && op.parcial) op.parcial(msg); };
  (async () => {
    try {
      avisar('Preparando o reconhecimento de voz…');
      await lingoCarregarModeloFala(avisar);
      if (!vivo()) return;
      const blob = await lingoGravar(5000, streamPronto, op);
      if (!vivo()) return;
      if (op.janela) op.janela('corrigindo');
      const texto = await lingoTranscrever(blob, idioma);
      if (!vivo()) return;
      if (!texto) {
        if (op.erro) op.erro('Não ouvi nada. Fale a frase e tente de novo.');
      } else if (op.fim) {
        op.fim(texto, lingoCorrigirFala(op.esperado || '', texto));
      }
    } catch (e) {
      if (vivo() && op.erro) op.erro('Libere o microfone do navegador e toque em Falar de novo.');
    } finally {
      if (vivo()) {
        lingoEncerrarJanela();
        if (op.fimEscuta) op.fimEscuta();
      }
    }
  })();
}

function lingoOuvir(idioma, opcoes) {
  const op = opcoes || {};
  lingoPararOuvir();
  if (!lingoFalaNuvem) {
    const pedido = navigator.mediaDevices && navigator.mediaDevices.getUserMedia
      ? navigator.mediaDevices.getUserMedia({ audio: true }).catch(() => null)
      : Promise.resolve(null);
    lingoOuvirLocal(idioma, op, pedido);
    return;
  }
  const Rec = window.SpeechRecognition || window.webkitSpeechRecognition;
  if (!Rec) {
    lingoFalaNuvem = false;
    const pedido = navigator.mediaDevices && navigator.mediaDevices.getUserMedia
      ? navigator.mediaDevices.getUserMedia({ audio: true }).catch(() => null)
      : Promise.resolve(null);
    lingoOuvirLocal(idioma, op, pedido);
    return;
  }
  if (lingoAudioAtual) {
    lingoAudioAtual.pause();
    lingoAudioAtual = null;
  }
  if (window.speechSynthesis) window.speechSynthesis.cancel();
  const rec = new Rec();
  lingoRecAtual = rec;
  rec.lang = idioma || 'en-US';
  rec.interimResults = true;
  rec.continuous = true;
  rec.maxAlternatives = 5;
  let entregue = false;
  let falhou = false;
  let caiuLocal = false;
  let ultimo = '';
  const janela = lingoJanela(op, 5000);
  lingoAbrirMedidor(op);
  janela.then(() => {
    if (lingoRecAtual === rec) {
      try { rec.stop(); } catch (e) { /* já encerrou */ }
    }
  });
  rec.onresult = (ev) => {
    for (let i = 0; i < ev.results.length; i += 1) {
      const bloco = ev.results[i];
      if (bloco[0] && bloco[0].transcript) ultimo = bloco[0].transcript;
    }
  };
  rec.onerror = (ev) => {
    if (!ev || ev.error === 'aborted') return;
    if (ev.error === 'network' || ev.error === 'service-not-allowed') {
      caiuLocal = true;
      lingoFalaNuvem = false;
      try { sessionStorage.setItem('lingo-fala-local', '1'); } catch (e) { /* ignora */ }
      if (lingoRecAtual === rec) lingoRecAtual = null;
      lingoEncerrarJanela();
      lingoPararMedidor();
      lingoOuvirLocal(idioma, op);
      return;
    }
    falhou = true;
    const msg = ev.error === 'not-allowed' || ev.error === 'audio-capture'
      ? 'Libere o microfone do navegador para falar.'
      : (ev.error === 'no-speech'
        ? 'Não ouvi nada. Fale a frase e tente de novo.'
        : 'Não foi possível ouvir. Tente de novo.');
    if (op.erro) op.erro(msg);
  };
  rec.onend = () => {
    if (lingoRecAtual === rec) lingoRecAtual = null;
    if (caiuLocal) return;
    lingoEncerrarJanela();
    if (!falhou && ultimo.trim()) {
      entregue = true;
      if (op.fim) op.fim(ultimo.trim(), lingoCorrigirFala(op.esperado || '', ultimo.trim()));
    } else if (!entregue && !falhou && op.erro) {
      op.erro('Não ouvi nada. Fale a frase e tente de novo.');
    }
    if (op.fimEscuta) op.fimEscuta();
  };
  try {
    rec.start();
  } catch (e) {
    lingoFalaNuvem = false;
    lingoOuvirLocal(idioma, op);
  }
}

function lingoFalarServidor(texto, idioma) {
  const url = 'api/audio.php?lang=' + encodeURIComponent(idioma || 'en') + '&texto=' + encodeURIComponent(texto);
  lingoAudioAtual = new Audio(url);
  lingoAudioAtual.play().catch(() => {});
}

if (window.speechSynthesis) {
  lingoCarregarVozes();
  window.speechSynthesis.addEventListener('voiceschanged', lingoCarregarVozes);
}
