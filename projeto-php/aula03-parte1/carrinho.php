<?php
$carrinho = [
    ['Notebook Gamer ACER', 5095.20],
    ['Scanner Epson', 2012.40],
    ['Nobreak SMS Manager', 598.00]
];
?>
  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Leonardo Tumadjian">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Impacta Sales Tec</title>
  </head>

  <body>
    <!-- ======= MENU DO PROJETO ======== -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="imgs/logo-impacta.svg" width="120" height="30" class="d-inline-block align-top">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastre-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carrinho.php">Carrinho de compras</a>
          </li>
        </ul>
        <div class="navbar-text">
          Impacta Sales Tec
        </div>
      </div>
    </nav>
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
             
                
              <tr>
                <td>Total</td>
                <td> - </td>
              </tr>
                
            </tbody>
          </table>
        </div>
      </div>
      <!-- =============== Fim Pagina ================== -->

    </main>
    <!-- =============== Fim do Conteúdo ================== -->

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

  </html>