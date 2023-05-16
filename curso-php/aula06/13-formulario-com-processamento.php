<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário com processamento</title>
</head>
<body>
<h1>Formulário com processamento</h1>
<hr>
<form action="" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <button type="submit" name="enviar">Enviar</button>
</form>

<?php
/* Detectando quando o formulário for
acionado A PARTIR do botão enviar */
if( isset($_POST['enviar']) ){
    // echo "ok! formulário acionado!";
    $nome = $_POST['nome'];
?>
    <p>Nome informado: <?=$nome?></p>
<?php
}
?>
   
</body>
</html>