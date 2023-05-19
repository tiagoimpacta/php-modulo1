<?php
// lib/funcoes.php
function float_to_reais(float $valor):string {
    return "R$ ".number_format($valor, 2, ",", ".");
}

function limpa_post(array $post){
    /* & Parâmetro por referência (ponteiro) 
    Neste exemplo, $valor é uma REFERÊNCIA DIRETA (ponteiro)
    de cada valor do array $post. Por isso, na prática, estamos
    limpando os valores originais deste array.
    Isso pode ser bom para perfomance no caso de grandes
    quantidades de dados, e é muito usado em 
    frameworks (Laravel) */
    foreach($post as &$valor){
        $valor = filter_var($valor, FILTER_SANITIZE_ADD_SLASHES);
        $valor = htmlspecialchars($valor);
    }
    // Retornamos o próprio array $post ($_POST) já sanitizado
    // e sem tags
    return $post;
}