<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP e POO</title>
</head>
<body>
<h1>POO - Exemplo 04</h1>    
<hr>

<?php
require "src/Cliente.php";
$cliente = new Cliente("Tiago", "tiago@gmail.com", "123");

require "src/PessoaFisica.php";
$clientePF = new PessoaFisica("Mônica", "monica@hotmail.com", "456");
?>
<div><?=$cliente->saudacao()?></div>
<div><?=$clientePF->saudacao()?></div>


<pre><?=var_dump($cliente)?></pre>
<pre><?=var_dump($clientePF)?></pre>

<hr>

<?php
// Propriedade estática: acesso direto, sem objeto
Cliente::$idade = 40;
?>
<p><?=Cliente::$idade?></p>
<p>Atendimento: 
<?=Cliente::verificaIdade( Cliente::$idade )?></p>




</body>
</html>