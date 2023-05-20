<?php
namespace Impacta;
class Produto {
    public static function getAll(){
        $sql = "SELECT * FROM produtos ORDER BY preco";

        $banco = new Database;

        $resultado = $banco->query($sql);

        /* Array que armazenará
        outros arrays contendo os dados
        de cada produto. */
        $produtos = array();

        /* Enquanto houver resultados da consulta SQL,
        crie um array associativo chamado $produto 
        contendo os dados de cada produto */
        while($produto = mysqli_fetch_assoc($resultado)){
            /* E adicione cada $produto (array associativo)
            ao array principal $produtos (matriz) */
            array_push($produtos, $produto);
        }

        // Retornando a matriz com os arrays de cada produto
        return $produtos;
    }
}