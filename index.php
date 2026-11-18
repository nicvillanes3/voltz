<?php
require_once __DIR__ . '/includes/config.php';
$tituloPagina = 'A energia do interclasse começa aqui';
$proximosJogos = [
 ['hora'=>'14:00','quadra'=>'Quadra 1','fase'=>'Grupo A','casa'=>'2º DS A','fora'=>'3º DS B','status'=>'Agendado'],
 ['hora'=>'15:00','quadra'=>'Quadra 1','fase'=>'Grupo B','casa'=>'1º DS C','fora'=>'2º DS D','status'=>'Agendado'],
 ['hora'=>'16:00','quadra'=>'Quadra 2','fase'=>'Grupo A','casa'=>'1º DS A','fora'=>'3º DS C','status'=>'Agendado']
];
$resultados = [
 ['casa'=>'2º DS A','fora'=>'3º DS B','placar'=>'2 × 1','sets'=>'25×21 · 23×25 · 15×12'],
 ['casa'=>'1º DS C','fora'=>'2º DS D','placar'=>'2 × 0','sets'=>'25×18 · 25×20'],
 ['casa'=>'1º DS A','fora'=>'3º DS C','placar'=>'0 × 2','sets'=>'22×25 · 19×25']
];
include __DIR__ . '/includes/header.php';
?>
<main>
<section class="hero container">
  <div class="hero-copy">
    <span class="eyebrow"><i></i> COPA INTERCLASSE · EDIÇÃO 2026</span>
    <h1>A energia da<br><em>competição</em><br>está aqui.</h1>
    <p>Acompanhe os jogos, confira a classificação e descubra quem está fazendo história nas quadras.</p>
    <div class="hero-buttons">
      <a class="btn btn-primary" href="jogos.php">Acompanhar jogos <span>↗</span></a>
      <a class="btn btn-outline" href="classificacao.php">Ver classificação</a>
    </div>
    <div class="hero-note"><span class="live-dot"></span> Campeonato em andamento <b>·</b> 6 equipes participantes</div>
  </div>
  <div class="hero-art">
    <div class="art-orbit orbit-one"></div><div class="art-orbit orbit-two"></div>
    <div class="ball-graphic"><span></span><span></span><span></span></div>
    <div class="floating-tag tag-top"><small>PRÓXIMA PARTIDA</small><strong>14:00</strong><span>Quadra 1</span></div>
    <div class="floating-tag tag-bottom"><small>ESPÍRITO DE EQUIPE</small><strong>100%</strong><span>Dentro de quadra</span></div>
    <div class="art-spark spark-one">✳</div><div class="art-spark spark-two">✦</div>
  </div>
</section>

<section class="stats-strip container">
  <article class="stat-card"><span class="stat-icon purple">⌁</span><div><strong>06</strong><small>Equipes na disputa</small></div></article>
  <article class="stat-card"><span class="stat-icon yellow">▣</span><div><strong>15</strong><small>Jogos na fase de grupos</small></div></article>
  <article class="stat-card"><span class="stat-icon navy">↗</span><div><strong>02</strong><small>Grupos em andamento</small></div></article>
  <article class="stat-card"><span class="stat-icon lavender">★</span><div><strong>01</strong><small>Grande campeão</small></div></article>
</section>

<section class="section container">
  <div class="section-heading"><div><span class="eyebrow">AGENDA DA COMPETIÇÃO</span><h2>Próximos jogos</h2><p>Prepare a torcida. A próxima disputa já tem hora marcada.</p></div><a class="text-link" href="jogos.php">Ver todos os jogos ↗</a></div>
  <div class="match-list">
    <?php foreach ($proximosJogos as $jogo): ?>
    <article class="match-row">
      <div class="match-time"><strong><?= e($jogo['hora']) ?></strong><span><?= e($jogo['quadra']) ?></span></div>
      <div class="match-teams"><div class="team-mark">V</div><strong><?= e($jogo['casa']) ?></strong><span class="versus">VS</span><strong><?= e($jogo['fora']) ?></strong><div class="team-mark alt">V</div></div>
      <div class="match-info"><span class="pill pill-purple"><?= e($jogo['fase']) ?></span><span class="status"><i></i><?= e($jogo['status']) ?></span></div>
    </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="section section-tint">
 <div class="container">
  <div class="section-heading"><div><span class="eyebrow">PLACARES RECENTES</span><h2>O que rolou nas quadras</h2><p>Resultados oficiais das partidas encerradas.</p></div><a class="text-link" href="jogos.php">Todos os resultados ↗</a></div>
  <div class="results-grid">
   <?php foreach ($resultados as $r): ?>
   <article class="result-card"><div class="result-label"><span>FASE DE GRUPOS</span><span class="finished">ENCERRADO</span></div><div class="result-score"><strong><?= e($r['casa']) ?></strong><b><?= e($r['placar']) ?></b><strong><?= e($r['fora']) ?></strong></div><p><?= e($r['sets']) ?></p></article>
   <?php endforeach; ?>
  </div>
 </div>
</section>

<section class="cta container"><div><span class="eyebrow">CADA PONTO CONTA</span><h2>Vibre com cada jogada.</h2><p>Confira a classificação e veja quem está mais perto da próxima fase.</p></div><a class="btn btn-yellow" href="classificacao.php">Acessar classificação ↗</a></section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
