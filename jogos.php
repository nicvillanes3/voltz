<?php
require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';
$lista = [
 ['fase'=>'Grupo A','data'=>'18 NOV','hora'=>'14:00','quadra'=>'Quadra 1','a'=>'2º DS A','b'=>'3º DS B','status'=>'Agendado','placar'=>'—'],
 ['fase'=>'Grupo B','data'=>'18 NOV','hora'=>'15:00','quadra'=>'Quadra 1','a'=>'1º DS C','b'=>'2º DS D','status'=>'Agendado','placar'=>'—'],
 ['fase'=>'Grupo A','data'=>'17 NOV','hora'=>'13:00','quadra'=>'Quadra 2','a'=>'1º DS A','b'=>'2º DS A','status'=>'Encerrado','placar'=>'0 × 2'],
 ['fase'=>'Grupo B','data'=>'17 NOV','hora'=>'14:00','quadra'=>'Quadra 1','a'=>'1º DS C','b'=>'3º DS C','status'=>'Encerrado','placar'=>'2 × 0']
];
?>
<main class="container page-main">
 <div class="page-intro"><span class="eyebrow">CALENDÁRIO OFICIAL</span><h1>Jogos e resultados</h1><p>Encontre as partidas da edição, acompanhe os horários e confira os placares.</p></div>
 <div class="filter-bar"><button class="filter-chip active" data-filter="todos">Todos</button><button class="filter-chip" data-filter="Agendado">Agendados</button><button class="filter-chip" data-filter="Encerrado">Encerrados</button><select class="filter-select"><option>Todas as fases</option><option>Grupo A</option><option>Grupo B</option><option>Semifinal</option><option>Final</option></select></div>
 <div class="games-list"><?php foreach($lista as $j): ?><article class="game-card" data-status="<?= e($j['status']) ?>"><div class="game-date"><strong><?= e($j['data']) ?></strong><span><?= e($j['hora']) ?></span></div><div class="game-main"><span class="eyebrow"><?= e($j['fase']) ?> · <?= e($j['quadra']) ?></span><div class="game-versus"><strong><?= e($j['a']) ?></strong><b><?= e($j['placar']) ?></b><strong><?= e($j['b']) ?></strong></div></div><span class="pill <?= $j['status']==='Encerrado'?'pill-done':'pill-purple' ?>"><?= e($j['status']) ?></span><a class="icon-link" href="partida.php?id=1" aria-label="Ver partida">↗</a></article><?php endforeach; ?></div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
