<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Processamento dos dados</title>
</head>
<body>
<h1>Processamento dos dados do formulário</h1>

<!-- Array SUPERGLOBAL (associativo)
$_POST -> dados transmitidos/recebidos pelo corpo do formulário
$_GET -> dados transmitidos/recebidos pela URL, ou seja, ficam expostos.
-->
<hr>

<?php
// Capturando os dados através do POST
$nome = $_POST['nome'] ?? "Nome não foi informado";
$email = $_POST['email'] ?? "E-mail não foi informado";

/* Operador ??
Chamado de "operador de coalescência",
verifica se a variável está definida e não é nula,
e atendendo a esta condição, atribui alguma ação.
Caso contrário, atribui um valor alternativo. */

// Verificando se os campos não foram preenchidos
// if(empty($nome)){
//     echo "<p>Nome é obrigatório!</p>";
// }

// if(empty($email)){
//     echo "<p>E-mail é obrigatório!</p>";
// }

if(empty($nome) || empty($email)){
    echo "<p>Campos obrigatórios!</p>";
}
?>

<!-- Exibindo a lista somente se tudo
foi preenchido (não estão vazios) -->
<?php if( !empty($nome) && !empty($email) ){ ?>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?></li>
</ul>
<?php } ?>

</body>
</html>