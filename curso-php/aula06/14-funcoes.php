<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funções</title>
</head>
<body>
<h1>Criando e usando funções</h1>
<hr>

<h2>Exemplo 1: funções como sub-rotinas</h2>
<?php
function dadosAutor(){
    echo "<p><i>Jon Oliva</i></p>";
    echo "<p><a href='jon@gmail.com'>jon@gmail.com</a></p>";
}
?>
<!-- Chamando/invocando a sub-rotina (função sem retorno) -->
<section> <?=dadosAutor()?> </section>
<ul>
    <li><?=dadosAutor()?></li>
</ul>

<hr>

<h2>Exemplo 2: funções com retorno</h2>
<?php
function dadosCurso(){
    // Versão 1: usando variável local
    // $curso = "PHP Módulo 1";
    // return $curso;

    // Versão 2: retorno direto na expressão
    return "PHP Módulo 1"; // string
}

// Chamando/invocando e mostrando diretamente o que foi processado
echo dadosCurso();
?>
<p><?=dadosCurso()?></p>

<?php
// Chamando a função e guardando seu retorno de dados
$resultadoExemplo2 = dadosCurso();
?>
<p>Resultado do retorno:
<?=$resultadoExemplo2?></p>

<hr>

<h2>Exemplo 3: função com argumentos ou parâmetros</h2>
<?php
/* Ao trabalhar com parâmetros opcionais (sempre no
final da lista de parâmetros), indicamos um valor
padrão para o parâmetro (neste exemplo zero) */
function soma($valor1, $valor2, $valor3 = 0){
    // Processamento dos parâmetros
    $total = $valor1 + $valor2 + $valor3;

    // Retornando o resultado
    return $total;
}
?>
<!-- Chamando a função passando parâmetros
que a função terá que calcular -->
<p> <?=soma(10, 50, 1000)?> </p>
<p> <?=soma(1500, 200.75)?> </p>
<?php
$numero1 = 300;
$numero2 = 56;
$resultadoExemplo3 = soma($numero1, $numero2);
?>
<p>Resultado da soma: 
<?=$resultadoExemplo3?></p>

<?php
if( soma(5,10,20) >= 15 ){
    echo "<p>Ok, retorno da função com resultado acima/igual a 15</p>";
}

$resultadoSoma = soma(10,6);
if($resultadoSoma > 10){
    echo "<p>Beleza...</p>";
}
?>

<hr>

<h2>Exemplo 4: indução de tipos</h2>
<?php
/* Especificar o tipo de dados dos parâmetros
que a função receberá. Alguns dos tipos aceitos:
string, int, bool, float, array */
function calculaMedia(float $valor1, float $valor2){
    // Versão 1:
    // $media = ($valor1 + $valor2) / 2;
    // return $media;

    // Versão 2:
    return ($valor1 + $valor2) / 2;
}
?>
<p> <?=calculaMedia("10", 7)?> </p>

<h3>Tipos de retorno</h3>
<?php 
function verificaNegativo(int $valor):string {
    /* Simulação de erro */
    // $teste1 = array("a", "b");
    // $teste2 = "ok";
    //return $valor < 0 ? $teste1 : $teste2 ;

    return $valor < 0 ? "Negativo" : "Positivo";
}
?>
<p><?=verificaNegativo(-10)?></p>

<hr>

<h2>Exemplo 5: 
função anônima (closure, lambda)</h2>
<?php
$negrito = function(string $texto):string {
    return "<b>$texto</b>";
}; // tem que usar o ;
?>
<!-- Obrigatório o uso $ -->
<p><?=$negrito("Impacta")?></p>







</body>
</html>