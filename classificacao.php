<?php
require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';
$grupos = [
 'A'=>[['equipe'=>'2º DS A','j'=>2,'v'=>2,'d'=>0,'sg'=>4,'sp'=>1,'pf'=>118,'ps'=>91,'p'=>5],['equipe'=>'1º DS A','j'=>2,'v'=>1,'d'=>1,'sg'=>3,'sp'=>2,'pf'=>108,'ps'=>101,'p'=>4],['equipe'=>'3º DS B','j'=>2,'v'=>0,'d'=>2,'sg'=>0,'sp'=>4,'pf'=>80,'ps'=>114,'p'=>0]],
 'B'=>[['equipe'=>'1º DS C','j'=>2,'v'=>2,'d'=>0,'sg'=>4,'sp'=>0,'pf'=>110,'ps'=>78,'p'=>6],['equipe'=>'2º DS D','j'=>2,'v'=>1,'d'=>1,'sg'=>2,'sp'=>2,'pf'=>96,'ps'=>99,'p'=>3],['equipe'=>'3º DS C','j'=>2,'v'=>0,'d'=>2,'sg'=>0,'sp'=>4,'pf'=>82,'ps'=>111,'p'=>0]]
];
?>
<main class="container page-main">
 <div class="page-intro"><span class="eyebrow">EDIÇÃO 2026</span><h1>Classificação</h1><p>Acompanhe o desempenho das equipes na fase de grupos.</p></div>
 <div class="notice"><span>✦</span><div><strong>Como funciona a pontuação?</strong><p>Vitória por 2×0 vale 3 pontos. Vitória por 2×1 vale 2 pontos para o vencedor e 1 para o perdedor.</p></div></div>
 <div class="groups-grid">
 <?php foreach($grupos as $grupo=>$equipes): ?>
 <section class="table-card"><div class="table-title"><div><span class="group-badge">GRUPO <?= e($grupo) ?></span><h2>Grupo <?= e($grupo) ?></h2></div><span class="muted">3 equipes</span></div>
 <div class="table-scroll"><table><thead><tr><th>POS.</th><th>EQUIPE</th><th>J</th><th>V</th><th>D</th><th>SG</th><th>SP</th><th>PF</th><th>PS</th><th>P</th></tr></thead><tbody>
 <?php foreach($equipes as $i=>$eq): ?><tr><td><span class="position <?= $i===0?'top':'' ?>"><?= $i+1 ?></span></td><td><strong><?= e($eq['equipe']) ?></strong></td><?php foreach(['j','v','d','sg','sp','pf','ps','p'] as $col): ?><td class="<?= $col==='p'?'points':'' ?>"><?= e($eq[$col]) ?></td><?php endforeach; ?></tr><?php endforeach; ?>
 </tbody></table></div><div class="table-foot"> <span class="live-dot"></span> Os 2 primeiros avançam às semifinais</div></section>
 <?php endforeach; ?>
 </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
