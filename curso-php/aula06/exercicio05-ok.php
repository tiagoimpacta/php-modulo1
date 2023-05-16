<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 05 (corrigido)</title>
</head>
<body>
<h1>Exercício 05 (corrigido)</h1>
<hr>
<?php
$texto = "<p>        Back-End           </p>";

function formataTexto(string $txt):string {
    return "<i>".mb_strtoupper(trim($txt))."</i>";
}

var_dump($texto);
echo "<br>";
var_dump(formataTexto($texto));
?>

<hr>

<?php
    $texto = "    Back-End    ";

    function maiuscula(string $txt):string{
        return "<i>".mb_strtoupper(trim($txt))."</i>";
    }

   var_dump($texto);
   echo "<br>";
   var_dump(maiuscula($texto));
?>

<p><?=maiuscula($texto)?></p>
</body>
</html>