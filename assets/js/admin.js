document.addEventListener('change', (evento) => {
  const tipo = evento.target;
  if (tipo.id !== 'tipo-exercicio') return;
  document.querySelectorAll('[data-tipo]').forEach((bloco) => {
    bloco.hidden = bloco.getAttribute('data-tipo') !== tipo.value && bloco.getAttribute('data-tipo') !== 'todos';
  });
});
const seletor = document.getElementById('tipo-exercicio');
if (seletor) {
  seletor.dispatchEvent(new Event('change'));
}
