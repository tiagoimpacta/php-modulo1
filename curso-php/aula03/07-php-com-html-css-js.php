<?php
$corTexto = "purple";
$corFundo = "lightblue";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP com HTML/CSS/JS</title>

<style>
.destaque {
    color: <?=$corTexto?>;
    background-color: <?=$corFundo?>;
    padding: 0.5rem;
}
</style>

</head>
<body>
<h1>Usando PHP intercalado com HTML, CSS e JS</h1>
<hr>

<?php
$curso = "PHP - Módulo 1";
$aluno = "David Gilmour";
const ESCOLA = "Impacta";
$bandas = ["Slayer", "Metallica", "Ghost"];
?>

<!-- Saída padrão usando echo -->
<h2> <?php echo ESCOLA; ?> - 2023</h2>

<!-- Saída curta/abreviada (shorthand php) -->
<h2> <?=ESCOLA?> - 2023 </h2>

<p>Olá <?=$aluno?>, você está matriculado
no curso de <?=$curso?> </p>

<?php // Como era feito antes com echo:
echo "<p>Olá $aluno, você está matriculado no
curso de $curso</p>";
?>

<h2>Bandas</h2>
<ol>
    <li> <?=$bandas[0]?> </li>
    <li> <?=$bandas[1]?> </li>
    <li> <?=$bandas[2]?> </li>
</ol>

<?php
// HEREDOC
$conteudo = <<<CONTEUDO
    <article class="destaque">
        <h3>Treinando PHP</h3>
        <p>Aprendendo as bases da linguagem</p>
    </article>
CONTEUDO;
?>
<hr>

<section>
    <h2>Outro Exemplo</h2>
    <?=$conteudo?>
</section>

<input type="number" name="" id="">

<script>
console.log("Hello World!");
console.log("<?=$aluno?>");
</script>

<?php 
echo "<script>alert('JS via PHP!')</script>";
?>

</body>
</html>