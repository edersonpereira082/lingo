<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/funcoes.php';
require_once __DIR__ . '/includes/db.php';

$aluno = exigir_login();
$conexao = db();
$aluno = recarregar_aluno($conexao) ?? $aluno;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['acao'] ?? '') === 'cancelar') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        flash('erro', 'Sessão expirada.');
        redirecionar('planos.php');
    }
    if (cancelar_assinatura($conexao, (int) $aluno['id'])) {
        registrar_log($conexao, $aluno['email'], 'assinatura_cancelar', 'aluno');
    flash('ok', 'Assinatura cancelada. O acesso do plano encerra agora em todos os idiomas.');
    } else {
        flash('erro', 'Não há assinatura ativa para cancelar.');
    }
    redirecionar('planos.php');
}

$codigo = limpar_texto($_GET['plano'] ?? ($_POST['plano'] ?? ''), 40);
$plano = plano_por_codigo($conexao, $codigo);
if (!$plano) {
    flash('erro', 'Escolha um plano para continuar.');
    redirecionar('planos.php');
}

$atual = assinatura_atual($conexao, (int) $aluno['id']);
$erro = null;
$pixCodigo = codigo_pix_demo($plano, (int) $aluno['id']);
$metodo = ($_POST['metodo'] ?? 'pix') === 'cartao' ? 'cartao' : 'pix';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['acao'] ?? '') === 'pagar') {
    if (!csrf_valido($_POST['csrf'] ?? null)) {
        $erro = 'Sessão expirada. Tente novamente.';
    } elseif ($atual && $atual['plano_codigo'] === $plano['codigo']) {
        $erro = 'Você já está neste plano.';
    } else {
        $referencia = $pixCodigo;
        if ($metodo === 'cartao') {
            $erroCartao = validar_cartao(
                (string) ($_POST['cartao'] ?? ''),
                (string) ($_POST['titular'] ?? ''),
                (string) ($_POST['validade'] ?? ''),
                (string) ($_POST['cvv'] ?? '')
            );
            if ($erroCartao) {
                $erro = $erroCartao;
            } else {
                $digitos = preg_replace('/\D+/', '', (string) $_POST['cartao']) ?? '';
                $referencia = 'cartao-' . substr($digitos, -4);
            }
        }
        if (!$erro) {
            ativar_assinatura($conexao, (int) $aluno['id'], $plano, $metodo, $referencia);
            registrar_log($conexao, $aluno['email'], 'assinatura_ativar', $plano['codigo'] . '/' . $metodo);
            flash('ok', 'Pagamento confirmado. Seu ' . $plano['nome'] . ' vale em todos os idiomas.');
            redirecionar('painel.php');
        }
    }
}

$layout = 'aluno';
$tituloPagina = 'Assinar ' . $plano['nome'] . ' — Lingo';
$flash = $erro ? ['tipo' => 'erro', 'mensagem' => $erro] : pegar_flash();
require __DIR__ . '/includes/cabecalho.php';
?>
<p class="olho">Checkout seguro</p>
<h1><?= e($plano['nome']) ?></h1>
<p class="intro">Ambiente de demonstração para XAMPP e HostGator: o PIX e o cartão confirmam a assinatura localmente, sem gateway externo. Nenhum dado completo de cartão é gravado.</p>

<div class="checkout-grid">
    <section class="card card-estatico">
        <form method="post" class="formulario" id="form-assinar">
            <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
            <input type="hidden" name="acao" value="pagar">
            <input type="hidden" name="plano" value="<?= e($plano['codigo']) ?>">

            <fieldset class="metodos">
                <legend>Forma de pagamento</legend>
                <label class="metodo <?= $metodo === 'pix' ? 'ativo' : '' ?>">
                    <input type="radio" name="metodo" value="pix" <?= $metodo === 'pix' ? 'checked' : '' ?>>
                    <span>PIX</span>
                    <small>Copia e cola instantâneo</small>
                </label>
                <label class="metodo <?= $metodo === 'cartao' ? 'ativo' : '' ?>">
                    <input type="radio" name="metodo" value="cartao" <?= $metodo === 'cartao' ? 'checked' : '' ?>>
                    <span>Cartão</span>
                    <small>Crédito ou débito</small>
                </label>
            </fieldset>

            <div id="box-pix" <?= $metodo === 'cartao' ? 'hidden' : '' ?>>
                <p>Escaneie o QR ou copie o código. Depois confirme o pagamento.</p>
                <div class="pix-box">
                    <svg class="pix-qr" viewBox="0 0 120 120" aria-hidden="true">
                        <rect width="120" height="120" fill="#fff"/>
                        <rect x="8" y="8" width="28" height="28" fill="#2c2158"/>
                        <rect x="84" y="8" width="28" height="28" fill="#2c2158"/>
                        <rect x="8" y="84" width="28" height="28" fill="#2c2158"/>
                        <rect x="16" y="16" width="12" height="12" fill="#fff"/>
                        <rect x="92" y="16" width="12" height="12" fill="#fff"/>
                        <rect x="16" y="92" width="12" height="12" fill="#fff"/>
                        <rect x="48" y="20" width="8" height="8" fill="#e25c38"/>
                        <rect x="64" y="36" width="12" height="12" fill="#2c2158"/>
                        <rect x="48" y="52" width="24" height="8" fill="#128c80"/>
                        <rect x="80" y="60" width="16" height="16" fill="#2c2158"/>
                        <rect x="40" y="80" width="8" height="20" fill="#e25c38"/>
                    </svg>
                    <code class="pix-codigo" id="pix-codigo"><?= e($pixCodigo) ?></code>
                    <button class="botao botao-claro botao-pequeno" type="button" id="btn-copiar-pix">Copiar código</button>
                </div>
            </div>

            <div id="box-cartao" <?= $metodo === 'pix' ? 'hidden' : '' ?>>
                <label>Número do cartão
                    <input type="text" name="cartao" inputmode="numeric" autocomplete="cc-number" maxlength="19" placeholder="ACCT-000003" value="<?= e($_POST['cartao'] ?? '') ?>">
                </label>
                <label>Nome no cartão
                    <input type="text" name="titular" autocomplete="cc-name" value="<?= e($_POST['titular'] ?? $aluno['nome']) ?>">
                </label>
                <div class="grade-2">
                    <label>Validade
                        <input type="text" name="validade" autocomplete="cc-exp" maxlength="5" placeholder="MM/AA" value="<?= e($_POST['validade'] ?? '') ?>">
                    </label>
                    <label>CVV
                        <input type="password" name="cvv" autocomplete="cc-csc" maxlength="4" inputmode="numeric" value="">
                    </label>
                </div>
            </div>

            <button class="botao botao-principal" type="submit">
                <?= $metodo === 'pix' ? 'Já paguei o PIX' : 'Pagar ' . formatar_brl((int) $plano['preco_centavos']) ?>
            </button>
        </form>
    </section>

    <aside class="card card-estatico resumo-pedido">
        <h2>Resumo</h2>
        <p><strong><?= e($plano['nome']) ?></strong></p>
        <p><?= e($plano['descricao']) ?></p>
        <p class="plano-preco"><?= e(formatar_brl((int) $plano['preco_centavos'])) ?></p>
        <ul class="plano-lista">
            <?php foreach (beneficios_do_plano($plano) as $item): ?>
                <li><?= e($item) ?></li>
            <?php endforeach; ?>
        </ul>
        <p class="intro">Válido em <?= e(lista_idiomas_planos($conexao)) ?>. Renovação em <?= (int) $plano['dias'] ?> dias.</p>
        <a href="planos.php">Voltar aos planos</a>
    </aside>
</div>
<script>
(() => {
  const pix = document.getElementById('box-pix');
  const cartao = document.getElementById('box-cartao');
  const btn = document.querySelector('#form-assinar button[type="submit"]');
  document.querySelectorAll('input[name="metodo"]').forEach((el) => {
    el.addEventListener('change', () => {
      const ehPix = el.value === 'pix';
      pix.hidden = !ehPix;
      cartao.hidden = ehPix;
      document.querySelectorAll('.metodo').forEach((m) => m.classList.toggle('ativo', m.querySelector('input').checked));
      if (btn) btn.textContent = ehPix ? 'Já paguei o PIX' : 'Pagar <?= e(formatar_brl((int) $plano['preco_centavos'])) ?>';
    });
  });
  const copiar = document.getElementById('btn-copiar-pix');
  const codigo = document.getElementById('pix-codigo');
  if (copiar && codigo && navigator.clipboard) {
    copiar.addEventListener('click', async () => {
      await navigator.clipboard.writeText(codigo.textContent.trim());
      copiar.textContent = 'Copiado';
      setTimeout(() => { copiar.textContent = 'Copiar código'; }, 1600);
    });
  }
})();
</script>
<?php require __DIR__ . '/includes/rodape.php'; ?>
