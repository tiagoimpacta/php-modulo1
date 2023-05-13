<?php
$carrinho = [
    ['TV Led LG', 2000],
    ['Notebook Gamer ACER', 5095.20],
    ['Scanner Epson', 2012.40],
    ['Nobreak SMS Manager', 598.00],
    ['Geladeira Brastemp', 1000]
];
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
  $total += $produto[1];
?>   
            <tr>
              <td> <?=$produto[0]?></td> 
              <td> <?=$produto[1]?> </td> 
            </tr>
<?php } ?>            
              <tr>
                <td>Total</td>
                <td> <?=$total?> </td>
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