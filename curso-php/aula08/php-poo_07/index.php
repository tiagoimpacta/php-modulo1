<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP e POO</title>
</head>
<body>
<h1>POO - Exemplo 07</h1>   
<hr>

<?php
/* Importando o autoload de 
Classes */
require "vendor/autoload.php";

use Exemplo\Cliente;
use Exemplo\PessoaFisica;
use Exemplo\PessoaJuridica;

$cliente = new Cliente;
$clientePF = new PessoaFisica;
$clientePJ = new PessoaJuridica;
?>
<pre><?=var_dump($cliente)?></pre>
<pre><?=var_dump($clientePF)?></pre>
<pre><?=var_dump($clientePJ)?></pre>

</body>
</html>