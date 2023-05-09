<?php
// 02-variaveis.php

/* Tipos de dados 
São dinâmicos, ou seja, não se declara
o tipo de dado ao criar variável. */

// Declarando variáveis
$valor = 10; // inteiro
$meuNome = "Tiago"; // string
$outroValor = 1578.95; // float/real
$status = true; // boolean

// Saída de dados
echo $valor;
echo "<br>";
echo $meuNome;
echo "<br>";

echo "Impacta PHP - Módulo 1";
echo "<br>";

/* Usando o caractere \n para gerar
uma quebra de linha no terminal */
echo "Impacta PHP - \nMódulo 1";

echo "<hr>";

$cliente = "Ozzy Osbourne";

/* Interpolação de variáveis
(sempre com aspas duplas) */
$frase = "$cliente é um cliente muito famoso!";
echo $frase;

echo "<hr>";

echo '<h2>Exemplos PHP</h2>';

/*
<div style="border:solid 1px red">
  <p><b>Ozzy Osbourne</b></p>
</div> 
*/

$css = "solid 1px red";

// echo '<div style="border: solid 1px red">';
// echo "<div style=\"border: solid 1px red\">";
echo "<div style=border:".$css.">";
echo "<p><b>$cliente</b></p>";
echo '</div>';
