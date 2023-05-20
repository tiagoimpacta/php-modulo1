<?php
// Criando um cookie
setcookie("aluno", "Ozzy Osbourne", strtotime("+2 days"));
setcookie("curso", "PHP1", strtotime("+1 year"));

/* Dica: use strtotime pra indicar o período
de expiração. strtotime: +1 year, +1 hour, +1 month */
?>
<h1>Exemplo de criação de cookies</h1>