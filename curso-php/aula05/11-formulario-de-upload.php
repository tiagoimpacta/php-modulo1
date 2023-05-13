<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Exemplo de Upload</title>
</head>
<body>
<h1>Formulário de Exemplo de Upload</h1>    
<hr>

<!-- Atenção: formulário de upload
necessita do atributo enctype -->
<form enctype="multipart/form-data" action="processa-upload.php" method="post">
    <p>
        <label for="arquivo">Selecione um arquivo em seu dispositivo:</label>

        <input required type="file" name="arquivo" id="arquivo" 
        accept=".png, .jpg, .jpeg, .gif, .svg">
    </p>
    <button type="submit">Enviar</button>
</form>

</body>
</html>