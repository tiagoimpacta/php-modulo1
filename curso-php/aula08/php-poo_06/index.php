<?php // index.php
use Fornecedor\Empresa;
use Prestador\Empresa as PrestadorEmpresa;

/* Usando namespace e "alias" (apelido) através do "as", evitando conflito de nomes de classe */

require "fornecedores/Empresa.php";
require "prestadores/Empresa.php";

$fornecedora = new Empresa;
$prestadora = new PrestadorEmpresa;
?>
<pre><?=var_dump($fornecedora)?></pre>
<pre><?=var_dump($prestadora)?></pre>