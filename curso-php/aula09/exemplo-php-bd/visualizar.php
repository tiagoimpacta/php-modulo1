<?php 
// Importando o script de conexão ao BD
require_once "includes/conecta.php"; 
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
    <h2>Relação de clientes cadastrados no banco</h2>
  
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th colspan="2">Operações</th>
        </tr>
<?php 
// Montando o comando SQL pra query
$sql = "SELECT * FROM clientes";

// Executando o comando
$resultado = mysqli_query($conexao, $sql) 
            or die(mysqli_error($conexao));

/* Extraindo do resultado um array associativo
correspondendo aos dados de cada cliente.
Cada coluna da tabela de clientes, se torna
uma chave associativa do array. */
while( $cliente = mysqli_fetch_assoc($resultado) ){
?>
        <tr>
            <td> <?=$cliente["id"]?> </td>
            <td> <?=$cliente["nome"]?> </td>
            <td> <?=$cliente["email"]?> </td>
            <td> 
                <a href="atualizar.php?id=<?=$cliente["id"]?>">
                    Atualizar
                </a> 
            </td>
            <td> 
                <a href="excluir.php?id=<?=$cliente["id"]?>" 
                onclick="return confirm('Tem certeza que deseja excluir?')">
                &#10060; Excluir </a> 
            </td>
        </tr>
<?php 
}

// Garantindo o fechamento da conexão com o BD
require_once "includes/desconecta.php";
?>
    </table>

    <hr> 

    <p><a href="index.php">Voltar</a></p>

</body>
</html>