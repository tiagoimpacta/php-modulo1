<?php
namespace Exemplo;
class PessoaFisica extends Cliente {
    public $cpf;
    public $celular;

    public function saudacao(){
        echo "<h3>Você é um(a) cliente Pessoa Física</h3>";
    }
}