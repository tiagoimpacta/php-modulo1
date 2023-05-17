<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funções nativas</title>
</head>
<body>
<h1>Usando funções nativas</h1>
<hr>

<!-- Funções já usadas:
var_dump(), basename(), empty()
isset(), die() ou exit() -->

<h2>Manipuladoras de Array</h2>
<h3>array_unique</h3>
<?php
$letras = ['a', 'a', 'b', 'c', 'b', 'd', 'd'];
$letrasUnicas = array_unique($letras);
?>
<pre><?=var_dump($letrasUnicas)?></pre>

<h3>array_combine (combina em um único)</h3>
<?php
$estados = ["SP", "RJ", "MG", "ES"];
$capitais = ["São Paulo", "Rio de Janeiro", "Belo Horizonte", "Vitória"];
$sudeste = array_combine($estados, $capitais);
?>
<pre><?=var_dump($sudeste)?></pre>

<h3>array_merge (agrupar arrays)</h3>
<?php
$homens = ['Miguel', 'Bernardo'];
$mulheres = ['Catarina', 'Anabela', 'Sofia'];
$pessoas = array_merge($mulheres, $homens);
?>
<pre><?=var_dump($pessoas)?></pre>

<h3>sort/rsort</h3>
<h4>crescente (sort)</h4>
<?php sort($pessoas) ?>
<pre><?=var_dump($pessoas)?></pre>

<h4>decrescente (rsort)</h4>
<?php rsort($pessoas) ?>
<pre><?=var_dump($pessoas)?></pre>





<h2>Strings</h2>
<h3>trim()</h3>
<p>Remove espaço antes e depois da string</p>
<?php 
$nome = "  Tiago B. dos Santos     ";
$nomeTratado = trim($nome);
?>
<pre><?=var_dump($nome)?></pre>
<pre><?=var_dump($nomeTratado)?></pre>

<h3>str_replace</h3>
<p>Substiuição de strings</p>
<?php
$fraseFeia = "<p>Fulano é um bobão e xarope</p>";
$fraseBonita = str_replace(
    ["bobão", "xarope"],
    "******",
    $fraseFeia
);
?>
<p><?=$fraseFeia?></p>
<p><?=$fraseBonita?></p>

<h3>mb_strtoupper e mb_strtolower</h3>
<?php
/* mb_ -> prefixo para ampliar compatibilidade
com caracteres mesmo com acentos e cedilhas e
outros caracteres especiais. */
$texto = "Idéias vem do nada";
$textoPequeno = mb_strtolower($texto);
$textoGrande = mb_strtoupper($texto);
?>
<p><?=$textoPequeno?></p>
<p><?=$textoGrande?></p>

<h2>Numéricas</h2>

<h3>min, max, number_format</h3>
<?php
$valores = [10, 5, 50, 1000, 275];
$preco = 1999.90;
?>
<p>min: <?=min($valores)?></p>
<p>max: <?=max($valores)?></p>
<p><?=$preco?></p>
<p>R$ 
<?=number_format($preco, 2, ",", ".")?>
</p>

<h2>Data</h2>
<?php
/* Definindo manualmente timezone */
date_default_timezone_set("America/Sao_Paulo");

// date com string no formato desejado
$data = date("d/m/Y");
?>
<p><?=$data?></p>

<?php
$dataBD = "2023-05-19"; // formato ok p/banco
$dataParaExibicao = date(
    "d/m/Y", // formato desejado
    strtotime($dataBD) // conversão de str p/data
);
?>
<p>Compra realizada em: <?=$dataBD?></p>
<p>Compra realizada em: <?=$dataParaExibicao?></p>

<h2>Filtro</h2>
<p>Recursos que utilizam as funções
filter_var e filter_input</p>

<h3>Validação de e-mail</h3>
<?php $email = "tiago.com.br"; ?>
<pre>
<?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL))?>
</pre>

<h3>Validação de números inteiros</h3>
<?php $id = "abc 12 ; DELETE FROM usuarios"; ?>
<pre>
<?=var_dump($id)?>
<?=var_dump( 
    filter_var($id, FILTER_SANITIZE_NUMBER_INT) 
)?>
</pre>

<h2>Criptografia</h2>
<?php
$senha = "123abc"; // texto puro/plain text

// Algoritmos mais comuns
$senhaMD5 = md5($senha);
$senhaSHA1 = sha1($senha);
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
?>
<p>Senha (texto puro): <?=$senha?></p>
<p>Senha (MD5): <?=$senhaMD5?></p>
<p>Senha (SHA1): <?=$senhaSHA1?></p>
<p>Senha (password_hash): <?=$senhaSegura?></p>




</body>
</html>