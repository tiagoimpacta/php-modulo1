<?php
require "vendor/autoload.php";
use Impacta\Cliente;

// 1) Executamos a limpeza dos dados
$post = limpa_post($_POST);

// 2) Criando o objeto com os dados já limpos
$cliente = new Cliente($post);

// 3) Se o retorno do método cadastrar não der erro
if($cliente->cadastrar()){
    // Então mostre a mensagem
    echo "<h1>Cadastro feito com sucesso!</h1>";

    // E depois, aguarde 2s e vá para index
    header("refresh:2; url=cadastro.php");
}

?>
