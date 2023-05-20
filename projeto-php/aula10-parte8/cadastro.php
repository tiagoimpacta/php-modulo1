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
      <form autocomplete="off" class="col-lg-6" method="POST" action="cadastrodb.php">
        
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

  <!-- =============== FOOTER ================== -->
<?php require "template/footer.php"; ?>
<!-- =============== Fim FOOTER ================== -->