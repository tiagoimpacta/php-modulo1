<?php
class Cliente {
    // Propriedades
    public $nome;
    protected $email;
    private $senha;

    /* Método construtor 
    Sempre é executado no momento
    de criação de um objeto. */
    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }    

    public function saudacao(){
        echo "<h2>Bem-vindo(a) $this->nome</h2>";
    }

    /* Propriedades e métodos estáticos:
    Recursos que NÃO PRECISAM DE OBJETOS */
    public static $idade;
    public static function verificaIdade($idade){
        return $idade >= 60 ? "prioridade" : "normal";
    }
}