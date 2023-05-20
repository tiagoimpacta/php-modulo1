<?php
use Impacta\Carrinho;
require "vendor/autoload.php";
$carrinho = Carrinho::getProdutos();
?>
  
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
          <small>Market Place de produtos tecnologicos</small>
        </h1>
      </header>
      <br>
      <!-- =============== Pagina ================== -->
      <div class="row">
        <div class="col-12">
          <h1>Carrinho de compras</h1>

          <?php if(!isset($_SESSION['carrinho'])){ ?>
          <p class="alert alert-warning text-center">
            Seu carrinho está vazio!
          </p>
          <?php } ?>

        </div>
      </div>

      <div class="row">
        <div class="col-lg-10">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Produtos</th>
                <th>Preço</th>
              </tr>
            </thead>
            <tbody>

<?php 
$total = 0; // variável acumuladora
foreach($carrinho as $produto){ 
  $total += $produto["preco"];
?>   
            <tr>
              <td> <?=$produto["nome"]?></td> 
              <td> 
                <?=float_to_reais($produto["preco"])?> 
              </td> 
            </tr>
<?php } ?>            
              <tr>
                <td>Total</td>
                <td><?=float_to_reais($total)?></td>
              </tr>
                
            </tbody>
          </table>
        </div>
      </div>
      <!-- =============== Fim Pagina ================== -->

    </main>
    <!-- =============== Fim do Conteúdo ================== -->

    <!-- =============== FOOTER ================== -->
<?php require "template/footer.php"; ?>
<!-- =============== Fim FOOTER ================== -->