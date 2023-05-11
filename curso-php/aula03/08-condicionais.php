<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Condicionais</title>

<style>
.repor { color: red; }
.normal { color: blue; }
.urgente { background-color: yellow; color: red; }
</style>

</head>
<body>
<h1>Condicionais</h1>    
<hr>

<h2>Exemplo 1: condicional simples</h2>
<?php
$numero = 10;
if ($numero > 5): //{
?>
    <p>Condição atendida, <?=$numero?> é maior que 5</p>
<?php    
endif; // }
?>

<hr>

<h2>Exemplo 2: condicional composta</h2>
<?php
$produto = "Notebook";
$qtdEmEstoque = 200; // é o que temos no momento
$qtdCritica = 5; // mínimo necessário
$resultado = $qtdEmEstoque - $qtdCritica;
?>
<h3>Produto: <?=$produto?></h3>
<h4>Estoque: <?=$qtdEmEstoque?></h4>
<?php if($qtdEmEstoque < $qtdCritica){ ?>
    <p>Déficit: <?=$resultado?></p>
    <p class="repor">É necessário repor/comprar!</p>
<?php // Condicional ANINHADA
    if($qtdEmEstoque === 0){
?>
    <p><span class="urgente">URGENTE!!</span></p>
<?php
    }
} else { 
?>
    <p>Excedente: <?=$resultado?></p>
    <p class="normal">Estoque normal.</p>
<?php } ?>

<hr>

<h2>Exemplo 3: operadores lógicos</h2>
<?php
/* 
E   ->  && 
OU  ->  ||
NÃO ->  ! */
?>

<h3>&& (E)</h3>
<?php
$usuario = "tiago.bsantos";
$senha = "impacta123";
if($usuario === "tiago.bsantos" && $senha == "impacta123"){
?>
    <p>Bem-vindo!</p>
<?php
} else {
?>
    <p>Dados incorretos! Verifique e tente novamente!</p>
<?php    
}
?>

<h3>|| (OU)</h3>
<?php 
$preco = 1000;
$desconto = 200;
/* Dar desconto no preço do produto
se qtdEstoque for maior 100 OU se o preço for maior que
3000 */
if($qtdEmEstoque > 100 || $preco > 3000){
    // $preco = $preco - $desconto; 
    $preco -= $desconto;
?>
    <p><?=$produto?> em promoção!</p>
    <p>Preço: <?=$preco?></p>
<?php
}
?>

<h3>! (NÃO/NEGAÇÃO)</h3>
<?php
$blackFriday = true;
if( !$blackFriday ){ 
?>
    <p>Fora da Black Friday, preço normal.</p>
<?php
} else {
?>
    <p>Opa! Black Friday chegou!</p>
    <p>Tudo pela metade do dobro!</p>
<?php
}
?>

<hr>

<h2>Exemplo 4: Condicional encadeada</h2>
<?php // sucessão de condições
if($produto === "Geladeira"){
    $garantia = 5;
} elseif($produto === "Notebook"){
    $garantia = 3;
} elseif($produto === "TV"){
    $garantia = 2;
} else {
    $garantia = 1;
}
?>
<p><?=$garantia?> anos de garantia(s)</p>

<hr>

<h2>Exemplo 5: switch/case</h2>
<?php
switch($produto){
    case "Geladeira": $garantia = 5; break;
    case "Notebook": $garantia = 3; break;
    case "TV": $garantia = 2; break;
    default: $garantia = 1; break;
}
?>
<p>Garantia usando switch: <?=$garantia?></p>

<hr>

<h2>Exemplo 6: shorthand if/else - ?: ternário</h2>
<p> 
<?=$preco >= 5000 ? "muito caro" : "bom preço!" ?>
</p>


</body>
</html>


<?php
/* $a = '10';
$b = 10;

// == IGUALDADE (VALOR)
var_dump($a == $b);

// === IDENTIDADE (VALOR E TIPO DE DADOS)
var_dump($a === $b); */