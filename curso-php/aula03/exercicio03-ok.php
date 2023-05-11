<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 03 (corrigido)</title>
</head>
<body>
<h1>Exercício 03 (corrigido)</h1>    
<hr>
<?php
$salario = 5000;
if($salario < 1500){
    $novoSalario = $salario * 1.15;
} elseif($salario <= 3000){
    $novoSalario = $salario * 1.10;
} else {
    $novoSalario = $salario * 1.05;
}
?>
<p>Salário era de <?=$salario?></p>
<p>Com o aumento, o salário foi para <?=$novoSalario?></p>

</body>
</html>