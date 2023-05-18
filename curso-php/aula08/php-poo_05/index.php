<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP e POO</title>
</head>
<body>
<h1>POO - Exemplo 05</h1>   
<h2>Namespaces</h2> 
<p>Recursos que permite agrupar e organizar classes, funções, constantes, criando um contexto baseado em nomes. O uso de namespace evita conflitos entre classes de mesmo nome.</p>
<hr>

<?php
use Exemplo\Cliente;
use Exemplo\PessoaFisica;

require "src/Cliente.php";
require "src/PessoaFisica.php";

// $cliente = new Cliente; // erro

// 1ª forma: Namespace\NomeDaClasse
//$cliente = new Exemplo\Cliente;

// 2ª forma: use Namespace\NomeDaClasse
$cliente = new Cliente;
$clientePF = new PessoaFisica;
?>
<pre><?=var_dump($cliente)?></pre>
<pre><?=var_dump($clientePF)?></pre>

</body>
</html>