<?php
// 06-objetos.php

/* Instanciando um objeto a partir
de uma classe padrão/genérica do PHP,
sem precisar de Classes/Métodos/Visibilidade/Herança */
$artista = new stdClass; // StandardClass

// Adicionando propriedades/atributos
$artista->nome = "Jon Oliva";
$artista->banda = "Savatage";
$artista->estilo = "Heavy Metal";

echo "<pre>";
var_dump($artista);
echo "</pre>";

echo "<p>Banda: $artista->banda</p>";