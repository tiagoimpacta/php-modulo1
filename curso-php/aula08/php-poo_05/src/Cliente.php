<?php
namespace Exemplo;
class Cliente {
    public $nome;
    protected $email;
    public function saudacao(){
        echo "<h2>Bem-vindo(a) $this->nome</h2>";
    }    
}