<?php
require "vendor/autoload.php";

use Impacta\Cliente;

// 1) Executamos a limpeza dos dados
$post = limpa_post($_POST);

// 2) Criando o objeto com os dados já limpos
$cliente = new Cliente($post);
?>
<pre>
<?=var_dump($cliente)?>
</pre>