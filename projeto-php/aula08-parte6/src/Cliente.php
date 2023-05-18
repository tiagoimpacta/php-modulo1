<?php
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
}