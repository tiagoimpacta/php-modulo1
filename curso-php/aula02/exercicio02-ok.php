<?php
$dados = [
    "login" => "tiago.bsantos",
    "senha" => "Rush@@1976",
    "idade" => 39,
    "cidade" => "São Paulo"
];

echo "<pre>";
var_dump($dados);
echo "</pre>";

echo "<ol>";
echo "<li>{$dados['login']}</li>";
echo "<li>{$dados['idade']}</li>";
echo "<li>{$dados['cidade']}</li>";
echo "</ol>";