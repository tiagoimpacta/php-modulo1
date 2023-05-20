<?php
namespace Impacta;
class Cliente {
    protected $nome;
    protected $email;
    protected $senha;
    protected $endereco;
    protected $cidade;
    protected $estado;

    public function __construct(array $post) {
        foreach($post as $campo => $valor){
            /* Se for campo senha na iteração,
            codifique ela e siga executando o loop */
            if($campo === 'senha'){
                $this->senha = password_hash($valor, PASSWORD_BCRYPT);
                continue;
            }

            $this->$campo = $valor;
        }        
    }

    public function cadastrar(){
        $sql = "INSERT INTO cadastro(nome, email, senha, endereco, cidade, estado) 
        VALUES(
            '$this->nome',
            '$this->email',
            '$this->senha',
            '$this->endereco',
            '$this->cidade',
            '$this->estado'
        )";

        // Criando um objeto para acessar o BD
        $banco = new Database;

        /* Retornando o resultado da 
        execução do método query (ver classe
        Database em caso de dúvida) */
        return $banco->query($sql);
    }
}