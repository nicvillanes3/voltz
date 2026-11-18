<?php
require_once __DIR__ . '/config.php';
$paginaAtual = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$anoSelecionado = $_GET['ano'] ?? date('Y');
?>
<header class="site-header">
  <div class="header-inner">
    <a class="brand" href="index.php" aria-label="Voltz - início">
      <img src="assets/logo-voltz-clara.jpg" alt="Voltz">
    </a>
    <button class="menu-toggle" aria-label="Abrir menu" aria-expanded="false">☰</button>
    <nav class="main-nav">
      <a class="<?= $paginaAtual === 'index.php' ? 'active' : '' ?>" href="index.php">Início</a>
      <a class="<?= $paginaAtual === 'classificacao.php' ? 'active' : '' ?>" href="classificacao.php">Classificação</a>
      <a class="<?= $paginaAtual === 'jogos.php' ? 'active' : '' ?>" href="jogos.php">Jogos</a>
      <a class="<?= $paginaAtual === 'chave.php' ? 'active' : '' ?>" href="chave.php">Chaveamento</a>
      <a class="<?= $paginaAtual === 'destaques.php' ? 'active' : '' ?>" href="destaques.php">Destaques</a>
      <a href="historico.php">Histórico</a>
    </nav>
    <div class="header-actions">
      <select class="year-select" aria-label="Selecionar edição" onchange="location.href='?ano='+this.value">
        <option value="2026" <?= (string)$anoSelecionado === '2026' ? 'selected' : '' ?>>Edição 2026</option>
        <option value="2025" <?= (string)$anoSelecionado === '2025' ? 'selected' : '' ?>>Edição 2025</option>
      </select>
      <a class="btn btn-primary btn-small" href="login.php">Área restrita <span>↗</span></a>
    </div>
  </div>
</header>
