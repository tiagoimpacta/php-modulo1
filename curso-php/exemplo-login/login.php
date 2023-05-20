<?php
session_start();

if(isset($_POST["entrar"])){
    // Dados digitados
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    /* Dados usuário/senha do banco (simulação) */
    $usuarioBanco = "tiago.bsantos";
    $senhaBanco = "123abc";

    /* Validação dos dados */
    if($usuario === $usuarioBanco && $senha === $senhaBanco){
        $_SESSION["logado"] = true;
        $_SESSION["usuario"] = $usuario;
        header("location:pagina-admin.php");
    } else {
        $erro = "Usuário/Senha inválidos!";
    }
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
    <h1>Login</h1>
    <?php if(isset($erro)){ ?>
        <p style="color:red"> <?=$erro?> </p>
    <?php } ?>

    <form action="" method="post">
        <p>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" required>
        </p>
        <p>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
        </p>
        <button type="submit" name="entrar">Entrar</button>
    </form>

</body>
</html>