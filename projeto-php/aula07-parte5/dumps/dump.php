<?php
exit; // trava

$con = mysqli_connect('localhost', 'root', '', 'impacta');

mysqli_query($con, 'DROP TABLE IF EXISTS produtos');
mysqli_query($con, '
CREATE TABLE IF NOT EXISTS produtos
(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    descricao VARCHAR(255),
    preco DECIMAL(11,2) NOT NULL,
    img VARCHAR(80) NULL
)');

mysqli_query($con, 'DROP TABLE IF EXISTS cadastro');
mysqli_query($con, '
CREATE TABLE IF NOT EXISTS cadastro
(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(120) NOT NULL,
    senha VARCHAR(150) NOT NULL,
    endereco VARCHAR(200) NOT NULL,
    cidade VARCHAR(90) NOT NULL,
    estado CHAR(2)
)');

require 'produtos_array.php';

$insert = 'INSERT INTO Produtos VALUES ';

$values = '';
foreach ($produtos as $produto) {
    $prod = (object)$produto;
    $values .= "(NULL, '$prod->nome', '$prod->descricao', $prod->preco, '$prod->img'),";
}

$values = substr($values, 0, -1);

mysqli_query($con, $insert . $values);

echo 'Tabelas criadas com sucesso';