<?php
/* Inicializa e permite acesso aos recursos de sessão */
session_start();

// Criar variáveis de sessão
$_SESSION["usuario"] = "tiago.bsantos";
$_SESSION["cidade"] = "São Paulo";
?>
<h1>Criando variáveis de sessão</h1>