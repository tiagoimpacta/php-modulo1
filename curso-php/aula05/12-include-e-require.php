<?php 
// "Importando" o arquivos de recursos
require "recursos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Include e Require</title>
</head>
<body>
<h1>Trabalhando com inclusões de recursos</h1>
<hr>

<p>Estamos estudando na <?=ESCOLA?>, fazendo o curso de <?=$curso?>.</p>

<h2>Tecnologias que pretendo estudar:</h2>
<ol>
<?php foreach($tecnologias as $tecnologia){ ?>
    <li><?=$tecnologia?></li>
<?php } ?>
</ol>

<hr>

<section>
    <h2>Conteúdo carregado usando include</h2>
    <?php require "textos.html"; ?>
</section>

</body>
</html>