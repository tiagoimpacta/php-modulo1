<?php 
require_once "includes/conecta.php";

// Lendo o parâmetro/valor enviado via URL
$id = $_GET['id'];

// Montando a query
$sql = "SELECT * FROM clientes WHERE id = $id";

// Executando a query e armazenando o result
$resultado = mysqli_query($conexao, $sql) 
            or die(mysqli_error($conexao));

// Extraindo do resultado um array associativo
// contendo os dados do cliente
$cliente = mysqli_fetch_assoc($resultado);
?>
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
    <h2>Atualizar dados do cliente</h2>

    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input value="<?=$cliente['nome']?>" type="text" name="nome" id="nome" required>
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input value="<?=$cliente['email']?>" type="email" name="email" id="email" required>
        </p>
        <button name="atualizar">Atualizar</button>
    </form>
    <hr>
<?php
if(isset($_POST["atualizar"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Montando a query de UPDATE
    $sql = "UPDATE clientes SET
             nome = '$nome', email = '$email'
             WHERE id = $id"; // NÃO ESQUEÇA!!
    
    // Executando o comando
    mysqli_query($conexao, $sql) 
    or die(mysqli_error($conexao));

    // Redirecionamento
    header("location:visualizar.php");

    // Desconectando
    require_once "includes/desconecta.php";
}
?>

    <p><a href="visualizar.php">Voltar</a></p>
</body>
</html>