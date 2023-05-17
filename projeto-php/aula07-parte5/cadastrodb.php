<?php
require "lib/funcoes.php";
?>
<h2>Versão SEM limpeza</h2>
<pre>
<?=var_dump($_POST)?>
</pre>

<hr>
<h2>Versão COM limpeza</h2>
<pre>
<?=var_dump( limpa_post($_POST) )?>
</pre>