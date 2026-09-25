(() => {
  const raiz = document.getElementById('vocab-app');
  if (!raiz) return;
  const dados = JSON.parse(raiz.dataset.payload);
  const palavras = dados.palavras || [];
  let i = 0;
  let verso = false;
  const termo = document.getElementById('termo');
  const exemplo = document.getElementById('exemplo');
  const contador = document.getElementById('contador');
  const face = document.getElementById('face');
  const faixaVocab = document.getElementById('faixa-vocab');

  function mostrar() {
    const item = palavras[i];
    verso = false;
    termo.textContent = item.termo;
    exemplo.textContent = item.exemplo || 'Toque para ver a tradução';
    if (faixaVocab) {
      faixaVocab.textContent = (item.faixa || 'Básico') + ' · toque para virar';
    }
    contador.textContent = (i + 1) + ' / ' + palavras.length;
  }

  face.addEventListener('click', () => {
    const item = palavras[i];
    verso = !verso;
    if (verso) {
      termo.textContent = item.traducao;
      exemplo.textContent = item.exemplo || '';
    } else {
      mostrar();
    }
  });
  document.getElementById('proximo').addEventListener('click', () => {
    i = (i + 1) % palavras.length;
    mostrar();
  });
  document.getElementById('anterior').addEventListener('click', () => {
    i = (i - 1 + palavras.length) % palavras.length;
    mostrar();
  });
  document.getElementById('ouvir').addEventListener('click', () => {
    const item = palavras[i];
    lingoFalar(item.termo, dados.idioma);
  });
  mostrar();
})();
