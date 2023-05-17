<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP e POO</title>
</head>
<body>
<h1>Trabalhando com orientação a objetos no PHP</h1>    
<hr>

<?php
// Importando as classes
require "src/Cliente.php";
require "src/PessoaFisica.php";
require "src/PessoaJuridica.php";

$clientePF = new PessoaFisica;
$clientePF->cpf = "123.456.789-00";
$clientePF->nome = "Tom Araya";
$clientePF->email = "tom@araya.com";
$clientePF->telefone = "(11) 2133-0666";

$clientePJ = new PessoaJuridica;
$clientePJ->cnpj = "00001555/0001-52";
$clientePJ->nome = "Slayer";
$clientePJ->email = "ahhhh@slayer.com";
$clientePJ->telefone = "(66) 6666-3333";
?>
<pre><?=var_dump($clientePF)?></pre>
<pre><?=var_dump($clientePJ)?></pre>

<div><?=$clientePF->exibeCliente()?></div>
<div><?=$clientePJ->exibeCliente()?></div>

<?php
/* Vai gerar um erro, pois agora a classe
Cliente é uma classe abstrata, ou seja,
é uma classe que serve apenas de modelo/referência para subclasses que herdam seus
recursos. */
//$cliente = new Cliente;
//var_dump($cliente)

require "src/Pessoa.php";
require "src/Usuario.php";
$usuario = new Usuario;
var_dump($usuario);
?>

</body>
</html>