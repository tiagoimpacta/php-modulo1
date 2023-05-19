<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco de Dados e PHP</title>
</head>
<body>
    <h1><a href="index.php">CRUD PHP e MySQL</a></h1>
    <hr>
    <h2>Inserir um novo cliente</h2>

    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
        </p>
        <button name="inserir">Inserir</button>
    </form>
    <hr>
<?php
/* Script para detecção do acionamento
do formulário */
if(isset($_POST["inserir"])){
    // Capturando os dados digitados
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Conectar ao banco
    require_once "includes/conecta.php";

    // Montar a consulta/query de inserir
    $sql = "INSERT INTO clientes(nome, email)
    VALUES('$nome', '$email')";
    

    // Executar a query
    mysqli_query($conexao, $sql) 
    or die(mysqli_error($conexao));

    // Desconectando do banco
    require_once "includes/desconecta.php";

    // Redirecionamento
    header("location:visualizar.php");
}
?>


    <p><a href="visualizar.php">Voltar</a></p>
</body>
</html>