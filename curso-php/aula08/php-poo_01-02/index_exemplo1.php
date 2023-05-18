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

<h2>Conceitos gerais</h2>
<p>São 4 pilares que definem este paradigma de programação:</p>

<ul>
    <li>Abstração</li>
    <li>Encapsulamento</li>
    <li>Herança</li>
    <li>Polimorfismo</li>
</ul>

<h3>Classes</h3>
<p>Modelos estruturados em que são declaradas propriedades (ou atributos) e métodos (ou comportamentos).</p>

<h3>Objetos</h3>
<p>Também conhecidos como "instâncias" de classe, ou seja, são variáveis criadas a partir do modelo definido pela classe.</p>

<?php
// Importando a classe
require "src/Cliente.php";

// Criando um objeto/instância
$cliente1 = new Cliente;

// Atribuindo valor às propriedades
$cliente1->nome = "Ozzy";
$cliente1->email = "ozzy@gmail.com";
$cliente1->telefone = "51-4444-5555";

$cliente2 = new Cliente;
$cliente2->nome = "Dio";
$cliente2->email = "dio@hotmail.com";
$cliente2->telefone = "11-2121-3333";

$cliente3 = new Cliente;
$cliente3->nome = "Jon Oliva";
$cliente3->email = "jon@savatage.com";
$cliente3->telefone = "21-8888-9999";
?>
<pre>
<?=var_dump($cliente1)?>
<?=var_dump($cliente2)?>
<?=var_dump($cliente3)?>
</pre>

<h2>Lendo as propriedades</h2>
<p><?=$cliente1->nome?>: 
<?=$cliente1->email?></p>

<p><?=$cliente2->nome?>:
<?=$cliente2->email?></p>

<h2>Lendo as propriedades a partir
de um método da classe</h2>
<section>
    <h3>Exemplos</h3>
    <?=$cliente1->exibeCliente()?>
    <?=$cliente2->exibeCliente()?>
    <?=$cliente3->exibeCliente()?>
</section>

</body>
</html>