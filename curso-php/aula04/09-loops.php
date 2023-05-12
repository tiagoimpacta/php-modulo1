<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loops</title>
</head>
<body>
<h1>Loops (ou laços/estruturas
 de repetição)</h1>
<hr>

<h2>while (enquanto)</h2>

<?php
/* Sintaxe geral
while(condição){
    ações a serem repetidas
    controle da repetição
} */

// Variável de controle de repetição
$contador = 1;
while($contador <= 5){
?>
    <p>Contador vale: <?=$contador?></p>
<?php    
    $contador++; // incremento
}
?>

<hr>

<h2>do/while (faça/enquanto)</h2>
<?php
/* Sintaxe geral
do {
    ações a serem repetidas
    controle da repetição
} while(condição) */
$i = 1;
do {
?>
<div>
 <h3>Título qualquer</h3>
 <img src="https://picsum.photos/id/237/100/100" alt="">
</div>
<?php
    $i++;
} while($i <= 3)
?>

<hr>

<h2>for (para)</h2>
<?php
/* Sintaxe geral
for(variável de controle; condição; atualização){
    ações a serem repetidas
}*/
for($i = 1; $i <= 4; $i++){
?>
    <p><?=$i?></p>
<?php    
}

$bandas = ["Slayer", "Rush", "Pink Floyd", "Yes"];
?>
<ul>
<?php 
$quantidade = count($bandas); // cache
for($i = 0; $i < $quantidade; $i++ ){ 
?>
    <li> <?=$bandas[$i]?> </li>
<?php } ?>
</ul>

<hr>

<h2>foreach (para cada)</h2>
<?php
// Versão 1: acesso somente aos dados
// foreach($bandas as $banda){ 

// Versão 2: acesso aos dados e aos índices
foreach($bandas as $indice => $banda){ 
?>
    <p><?=$indice?>: <?=$banda?></p>
<?php
}
?>

<hr>

<h2>Loop com Matriz (array dentro de array)</h2>
<?php
$planoDeEstudos = [
    ['React', 'Vue', 'Angular'],
    ['React Native', 'Flutter']
];

// foreach aninhado
foreach($planoDeEstudos as $linha){
    foreach($linha as $tecnologia){
        echo "<p>$tecnologia</p>";
    }
}

echo "<hr>";

// for aninhado
for($linha = 0; $linha < count($planoDeEstudos); $linha++){
    for( $coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++){
        echo "<p><b>".$planoDeEstudos[$linha][$coluna]."</b></p>";
    }
}
?>

<hr>

<h2>continue a repetição mediante
uma condição </h2>
<?php
$filiais = ["SP", "RJ", "MG", "RS", "SC"];

foreach($filiais as $filial){
    // Exibir as filiais, exceto as de SP e RS
    if($filial === "SP" || $filial === "RS"){
        continue;
    }
    echo "<p>$filial</p>";
}

$tarefas = [
    [
        "servico" => "Instalação de impressora",
        "status" => "ok"
    ],
    [
        "servico" => "Configuração de rede",
        "status" => "pendente"
    ],
    [
        "servico" => "Formatação de Windows",
        "status" => "pendente"
    ],
    [
        "servico" => "Instalação de drivers",
        "status" => "ok"
    ]
];

foreach($tarefas as $tarefa){
    /* Se o status do serviço for "ok",
    o loop seguirá sua execução ignorando os serviços nesta condição. Por isso o uso do "continue" dentro do if, para que loop siga o restante das interações. */
    if($tarefa["status"] === "ok"){
        continue;
    }

    echo $tarefa["servico"]."<br>";
}
?>

<hr>

<h2>break (pare) a repetição
mediante uma condição</h2>

<?php
$usuariosExistentes = [
    "neil.peart",
    "geddy.lee",
    "ozzy.osbourne",
    "jon.oliva",
    "david.gilmour"
];

$novoUsuario = "jon.oliva";

$contador = 0;
foreach($usuariosExistentes as $usuario){
    $contador++;
    if($usuario === $novoUsuario){
        echo $usuario. " já existe, tente outro";
        break;
    }
}
echo "<br>".$contador;
?>


</body>
</html>