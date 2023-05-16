<?php
// lib/funcoes.php
function float_to_reais(float $valor):string {
    return "R$ ".number_format($valor, 2, ",", ".");
}