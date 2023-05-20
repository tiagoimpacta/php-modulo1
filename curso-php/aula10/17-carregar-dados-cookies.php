<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carregamento de cookies</title>
</head>
<body>
<h1>Carregando os dados dos cookies</h1>    
<hr>
<p>Aluno: <?=$_COOKIE['aluno'] ?? "aluno não informado" ?> </p>
<p>Curso: <?=$_COOKIE['curso'] ?? "curso não informado" ?> </p>
</body>
</html>