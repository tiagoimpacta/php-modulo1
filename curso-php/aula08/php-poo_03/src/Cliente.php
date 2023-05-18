<?php
class Cliente {
    /* Visibilidade e Encapsulamento */

    /* public:
    Acesso dentro e fora da classe */
    public $nome;

    /* protected: 
    Acesso dentro da classe e 
    nas subclasses (usando herança) */
    protected $email;

    /* private:
    Acesso somente dentro da própria
    classe */
    private $telefone;

    // Métodos com visibilidade diferente
    public function exibeCliente(){}
    protected function validaEmail(){}
    private function codificaSenha(){ }

    /* Encapsulamento */
    private $dataNascimento;

    // Método getter: leitura da prop.
    public function getData(){
        return $this->dataNascimento;
    }

    // Método setter: escrita da prop
    public function setData($data){
        $this->dataNascimento = $data;
    }    
}