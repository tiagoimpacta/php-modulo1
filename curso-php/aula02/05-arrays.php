<?php
// 05-arrays.php
/* Array -> vetor ou matriz */

/* Array Numérico (índices numéricos) */
// Sintaxe: função array()
$bandas = array(
    "Rush", 
    "Pink Floyd", 
    "Slayer", 
    "Nightwish", 
    "Savatage"
);

// Não é possível dar saída direta no array
// echo $bandas;
echo $bandas[1];
echo "<br>";
echo $bandas[3];

echo "<hr>";

/* Análise técnica da estrutura do array 
print_r()
var_dump() */

echo "<pre>";
print_r($bandas);
echo "</pre>";

echo "<hr>";

echo "<pre>";
var_dump($bandas);
echo "</pre>";

/* Dica: use a tag <pre> do HTML
para pré-formatar a saída dos comandos. */

echo "<hr>";

// Sintaxe usando []
$comidas = ["Lasanha", "Pastel", "Pizza"];
echo $comidas[0];

echo "<pre>";
var_dump($comidas);
echo "</pre>";

echo "<p>Banda preferida: <b>$bandas[0]</b>";

echo "<hr>";

// Array associativo
$pedido = array(
    // chave => valor
    "codigo" => "123abc",
    "produto" => "Notebook Dell",
    "valor" => 1999.99
);

echo $pedido["produto"];
echo "<br>";
echo $pedido["valor"];

echo "<pre>";
var_dump($pedido);
echo "</pre>";

// Saída no HTML usando array associativo
// Atenção para a necessidade das {}
echo "<p> {$pedido["produto"]} </p>";

// Ou, usando concatenação
echo "<p>". $pedido["produto"]. "</p>";

echo "<hr>";

/* Matriz (array com pelo menos 2 dimensões) */
$tecnologias = [
    ["HTML5", "CSS3", "BOOTSTRAP"],
    ["PHP", "Node.js", "Java", "ASP.Net"],
    ["IA", "Machine Learning"]
];

echo $tecnologias[1][1]; // Node.js
echo "<br>";
echo $tecnologias[2][1]; // Machine Learning


