<!-- HEAD -->
<?php require_once './inc/head.php'; ?>

<!-- HEADER -->
<?php require_once './inc/header.php'; ?>

<body>
  

  <main class="container my-5">

    <form action="principal.php" method="$_POST" class="col-6 mx-auto border rounded bg-light p-4">
      <h3>Formulário de cadastro</h3>
      <p>Coloque seus dados pessoais</p>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="nomeCliente">Nome</label>
          <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" aria-describedby="nomeCliente" placeholder="Nome completo">
        </div>

        <div class="form-group col-md-5">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="inputEmail" placeholder="Seu email">
        </div>

        <div class="form-group col-md-5">
          <label for="exampleInputEmail1">Telefone</label>
          <input type="text" class="form-control" id="telefoneCliente" name="telefoneCliente" aria-describedby="telefoneCliente" placeholder="DDD + 12345-6789">
        </div>

        <div class="form-group col-md-5">
          <label for="enderecoCliente">Endereço para entrega</label>
          <input type="text" class="form-control" id="enderecoCliente" name="enderecoCliente" aria-describedby="enderecoCliente" placeholder="Endereço completo">
        </div>

        <div class="form-group col-md-5">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Crie uma senha">
        </div>

        <div class="form-group col-md-5">
          <label for="exampleInputPassword1">Confirme a senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme a senha">
        </div>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Li e estou de acordo com as <a href="politicasPrivacidade.php"> políticas de privacidade</a></label>
      </div>
      <br>

      <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>


  </main>

  <?php require_once("./inc/footer.php"); ?>
</body>

</html>