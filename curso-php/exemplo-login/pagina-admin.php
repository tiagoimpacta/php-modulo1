<?php
// pagina-admin.php
session_start();

/* Verifica se o usuário NÃO ESTÁ logado */
if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem-vindo!</h1>
    <p>Página da área admin...</p>

   
</body>
</html>