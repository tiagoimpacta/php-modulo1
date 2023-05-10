<?php
// 04-heredoc-nowdoc.php

/* Sintaxe alternativa para
declaração de strings (blocos de textos maiores). */

// Sintaxe heredoc
$escola = "Impacta";
$exemplo1 = <<<CONTEUDO
    <h2>Exemplo de heredoc</h2>
    <hr>
    <p>Estamos estudando PHP 1 na $escola</p>
    <p>
        <a href="http://impacta.com.br" target="_blank">
        Site
        </a>
    </p>
CONTEUDO;

echo $exemplo1;

// Sintaxe nowdoc (exclusivo pra string)
// nome do identificador DEVE ESTAR entre aspas simples
// nowdoc NÃO INTERPRETA/EXECUTA conteúdo dinâmico
$exemplo2 = <<<'TESTE'
    <h2>Exemplo de nowdoc</h2>
    <p style="color:red">Texto qualquer</p>
    <p>Estamos estudando na $escola -- não funciona!</p>
    <p><a href="">Site</a></p>
TESTE;

echo $exemplo2;






