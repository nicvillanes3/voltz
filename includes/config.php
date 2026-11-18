<?php
// Configuração inicial. A conexão PDO será adicionada na etapa do banco de dados.
declare(strict_types=1);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
date_default_timezone_set('America/Sao_Paulo');

function e($valor): string {
    return htmlspecialchars((string)($valor ?? ''), ENT_QUOTES, 'UTF-8');
}
