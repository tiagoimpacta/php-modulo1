<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercícios POO</title>
</head>
<body>
<h1>Exercícios POO (resolvido)</h1>  
<hr>
<?php
require "src/Produto.php";
$produtoA = new Produto;
$produtoB = new Produto;

$produtoA->fabricante = "LG";
$produtoA->nome = "TV Led";
$produtoA->ano = 2022;

$produtoB->fabricante = "Samsung";
$produtoB->nome = "Notebook";
$produtoB->ano = 2023;

$produtoC = new Produto;
$produtoC->nome = "Geladeira";
$produtoC->ano = 2020;
?>  
<pre><?=var_dump($produtoA)?></pre>
<pre><?=var_dump($produtoB)?></pre>
<pre><?=var_dump($produtoC)?></pre>

<p>Produto A (nome): 
<?=$produtoA->nome?></p>

<p>Produto B (fabricante): 
<?=$produtoA->fabricante?></p>

</body>
</html>