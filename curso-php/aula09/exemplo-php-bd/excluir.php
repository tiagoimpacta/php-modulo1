<?php
require_once "includes/conecta.php";

// Pegando o id do cliente via URL
$id = $_GET["id"];

// Montando a query de DELETE
$sql = "DELETE FROM clientes WHERE id = $id";

// Executando o comando
mysqli_query($conexao, $sql) 
or die(mysqli_error($conexao));

// Redirecionando
header("location:visualizar.php");

// Desconectando
require_once "includes/desconecta.php";

