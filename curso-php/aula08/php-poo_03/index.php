<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP e POO</title>
</head>
<body>
<h1>POO - Exemplo 03</h1>    
<hr>

<?php
// Importando as classes
require "src/Cliente.php";

$cliente = new Cliente;

// Atribuindo à prop. pública
$cliente->nome = "Tiago";

// Erro, por ser protected
// $cliente->email = "tiago@gmail.com";

// Erro, por ser private
// $cliente->telefone = "jfkdjfd";
?>
<pre><?=var_dump($cliente)?></pre>

<hr>

<?php
// Exemplos do Encapsulamento

// Passando dados via setter
$cliente->setData("24/09/1983");

// Lendo dados via getter
echo $cliente->getData();
?>
</body>
</html>