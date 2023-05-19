<?php
require "vendor/autoload.php";

require "dumps/produtos_array.php";
?>
<!--
Projeto idealizado por Leonardo Tumadjian
Criado especialmente para Impacta curso PHP Modulo 1
-->
<!-- ============= HEADER ================ -->
<?php require "template/header.php"; ?>
<!-- ========= FIM HEADER ============= -->

    <!-- ======= MENU DO PROJETO ======== -->
    <?php require "template/menu.php"; ?>
    <!-- =============== FIM DO MENU =============== -->
    
    <!-- =============== Conteúdo ================== -->
    <main class="container" style="padding-top: 4.5rem;">
        <header>
            <h1>Impacta Sales Tec
                <small>Market Place de produtos tecnológicos</small>
            </h1>
        </header>
        <!-- =============== Produtos ================== -->
        <div class="row">

<?php foreach($produtos as $produto) { ?>    
            <div class="col-md-16 col-sm-16 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="<?=$produto["img"]?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><?=$produto["nome"]?></h4>
                        <p class="card-text"><?=$produto["descricao"]?></p>
                        <h2><?=float_to_reais($produto["preco"])?></h2>
                        <a href="#" class="btn btn-primary">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div> 
<?php } ?>
        </div>
        <!-- =============== Fim dos Produtos ================== -->

       
    </main>
    <!-- =============== Fim do Conteúdo ================== -->

<!-- =============== FOOTER ================== -->
<?php require "template/footer.php"; ?>
<!-- =============== Fim FOOTER ================== -->