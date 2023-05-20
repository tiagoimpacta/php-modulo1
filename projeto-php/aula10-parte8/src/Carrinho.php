<?php
namespace Impacta;
class Carrinho {
    public static function getProdutos(){
        // Iniciando a sessão para poder usar recursos
        session_start();

        $banco = new Database;

        /* Buscando os dados do carrinho na sessão
        (caso tenha, se não tiver, fica uma lista vazia) */
        $carrinho = $_SESSION["carrinho"] ?? [];

        /* "Grande array" para os itens do carrinho */
        $itens = array();

        /* $item representar o ID de cada produto */
        foreach($carrinho as $item) {
            array_push(
                $itens, 
                $banco->getById("produtos", $item, "nome, preco")
            );
        }

        /* Retornando um array com os dados (nome e preço)
        dos produtos do carrinho */
        return $itens;
    }
}