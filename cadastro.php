<!-- HEAD -->
<?php require_once './inc/head.php'; ?>

<!-- HEADER -->
<?php require_once './inc/header.php'; ?>

<body>

  <main class="container my-5">

    <form action="./index.php" method="$_POST" class="mx-auto border rounded p-5">
      <h1>Formulário de cadastro</h1>
      <h5>Coloque seus dados pessoais</h5>

      <div class="form-row mt-5 sign-up col-sm-12">
        <div class="form-group col-md-6">
          <label for="client-name">Nome</label>
          <input type="text" class="form-control" id="client-name" name="client-name" aria-describedby="client-name" placeholder="Nome completo">
        </div>

        <div class="form-group col-md-6">
          <label for="client-name">Sobrenome</label>
          <input type="text" class="form-control" id="client-name" name="client-name" aria-describedby="client-name" placeholder="Nome completo">
        </div>

        <div class="form-group col-md-12">
          <label for="client-email">Email</label>
          <input type="email" class="form-control" id="client-email" name="client-email" aria-describedby="client-email" placeholder="Seu email">
        </div>

        <div class="form-group col-md-12">
          <label for="client-address">Endereço para entrega</label>
          <input type="text" class="form-control" id="client-address" name="client-address" aria-describedby="client-address" placeholder="Endereço completo">
        </div>

        <div class="form-group col-md-6">
          <label for="client-password">Senha</label>
          <input type="password" class="form-control" id="client-password" placeholder="Crie uma senha">
        </div>

        <div class="form-group col-md-6">
          <label for="confirm-password">Confirme a senha</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirme a senha">
        </div>
        
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="agree">
          <label class="form-check-label" for="agree">Li e estou de acordo com as <a href="politicasPrivacidade.php">Políticas de privacidade</a></label>
        </div>
  
        <div class="col-12 text-center">
          <button type="submit" class="cta btn btn-dark button mt-5">Confirmar</button>
        </div>
      </div>
      
    </form>

  </main>

  <!-- FOOTER -->
  </div>
  <?php
  require_once './inc/footer.php';
  ?>
</body>

</html>