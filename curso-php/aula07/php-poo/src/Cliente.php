<?php
abstract class Cliente {
    /* Ao declarar propriedades 
    ou atributos também devemos indicar
    sua visibilidade usando as palavras-chave: public, private ou protected. */
    public $nome;
    public $email;
    public $telefone;

    // Método/comportamento
    public function exibeCliente(){
        /* $this
        Representa o acesso aos recursos
        DESTA classe. */
        echo "<p>Nome: $this->nome</p>";
        echo "<p>E-mail: $this->email</p>";

        /* Sem o $this, o acesso fica impossibilitado
        pois o PHP vai tentar acessar uma variável
        ou parâmetro */
    }
}