<!--
Projeto idealizado por Leonardo Tumadjian
Criado especialmente para Impacta curso PHP Modulo 1
-->
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
        <h1>Cadastre-se</h1>
        <p>Preencha seus dados abaixo:</p>
      </div>
    </div>

    <div class="row">
      <form autocomplete="off" class="col-lg-6" method="POST" action="">
        
        <!-- Campo e label para criar o cadastro -->
        <div class="form-group row">
          <label for="nome" class="col-sm-2 col-form-label">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu e-mail">
          </div>
        </div>

        <div class="form-group row">
          <label for="senha" class="col-sm-2 col-form-label">Senha</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Crie uma senha">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Informe seu endereco">
          </div>
        </div>

        <div class="form-group row">
          <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Informe sua cidade">
          </div>
        </div>

        <div class="form-group row">
          <label for="estado" class="col-sm-2">Estado</label>
          <div class="col-sm-10 col-lg-10">
            <select class="form-control" name="estado" id="estado">
              <option></option>
              <option>SP</option>
              <option>RJ</option>
              <option>MG</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
    <!-- =============== Fim Pagina ================== -->

  </main>
  <!-- =============== Fim do Conteúdo ================== -->

  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>