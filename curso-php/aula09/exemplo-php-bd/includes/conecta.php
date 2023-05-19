<?php
// Parâmetros de acesso ao server BD
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "exemplo_bd";

/* Criando a conexão */
$conexao = mysqli_connect(
    $servidor, $usuario, $senha, $banco
);

/* Garantindo que tudo que for transmitido
através desta conexão, seja tratado com
o padrão utf-8 */
mysqli_set_charset($conexao, "utf8");

/* Teste */
/* if(!$conexao){
    die(mysqli_connect_error($conexao));
} else {
    echo "Ok, conectado!";
} */





