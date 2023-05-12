<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Exemplo</title>
</head>
<body>
<h1>Formulário de Exemplo</h1>    
<hr>

<form action="processa.php" method="get">
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </p>
    <p>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
    </p>
    <button type="submit">Enviar</button>
</form>

</body>
</html>