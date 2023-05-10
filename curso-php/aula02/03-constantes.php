<?php
// 03-constantes.php

/* Constantes: valores fixos, não mudam
durante a execução da aplicação PHP. */

// Forma tradicional/antiga
define("AUTOR", "J.R.R. Tolkien");
define("LIVRO", "Senhor dos Anéis");
define("ANO_LANCAMENTO", 1954);

// Acesso e saída de dados
echo AUTOR;
echo "<br>";
echo ANO_LANCAMENTO;
echo "<br>";

// Senhor dos Anéis foi lançado em 1954.
// Neste caso, usamos o . para concatenar
echo "<p>".LIVRO." foi lançado em ".ANO_LANCAMENTO. "</p>";

// Forma moderna/mais nova
const NOME = "Tiago B. dos Santos";
const ANO_NASCIMENTO = 1983;

echo "<p>Instrutor: ".NOME."</p>";

