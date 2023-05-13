<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Processamento de Upload</title>
</head>
<body>
<h1>Processamento de upload</h1>
<hr>

<?php
/* Array superglobal $_FILES
Responsável pela transmissão/recebimento
de arquivos. */
$arquivo = $_FILES['arquivo'];

/* Validação de formato de arquivo */
$formatosValidos = [
    "image/jpg",
    "image/jpeg",
    "image/png",
    "image/gif",
    "image/svg+xml"
];

/* Verificando se o formato da imagem
enviada NÃO ESTÁ listado no array de formatos*/
if( !in_array($arquivo["type"], $formatosValidos) ){
    die("
        <p>Formato não permitido! - 
        <a href='11-formulario-de-upload.php'>
        Voltar</a></p>
    "); // ou exit
}

// Acessando o nome do arquivo
$nome = $arquivo['name'];
$temporario = $arquivo["tmp_name"];

// Determinando o local final para o upload
$destino = "imagens/".$nome;

// Processamento de envio

// Checando se o arquivo foi enviado antes
if( file_exists($destino) ){
    die("<p>Imagem já enviada! - 
    <a href='11-formulario-de-upload.php'>
    Voltar</a></p>");
} else{
    // Se não foi, iniciamos o upload
    if(move_uploaded_file($temporario, $destino)){
        echo "<p>O arquivo $nome foi enviado com sucesso!</p>";
    } else {
        echo "<p>Houve um problema, tente mais tarde</p>";
    }
}
?>


</body>
</html>