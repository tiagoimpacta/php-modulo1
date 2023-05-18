<?php
class PessoaFisica extends Cliente {
    public $cpf;

    /* Polimorfismo
    É a capacidade que métodos/comportamentos com
    uma mesma assinatura (mesmo nome, qtd de parâmetros, retorno) tem de executar ações diferentes. */
    public function saudacao(){
        echo "<h3>Você é um(a) cliente Pessoa Física</h3>";
    }
}