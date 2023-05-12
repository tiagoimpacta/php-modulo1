<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (corrigido)</title>
</head>
<body>
<h1>Exercício 04 (corrigido)</h1>    
<hr>
<?php
const MESES = ["Janeiro", "Fevereiro", "Março","Abril", "Maio","Junho","Julho", "Agosto","Setembro","Outubro","Novembro", "Dezembro"];

?>

<ol>
    <?php foreach(MESES as $mes) {?>
    <li> <?=$mes?> </li>
    <?php } ?>
</ol>

</body>
</html>