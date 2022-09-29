<!-- HEAD -->
<?php require_once './inc/head.php'; ?>

<!-- HEADER -->
<?php require_once './inc/header.php'; ?>

<!-- CONTACT -->
<div class="container my-5">
    <form action="./conta.php" method="POST" class="mx-auto border rounded p-5">
        <h1>Alterar Dados</h1>
        <h5>Edite dados pessoais</h5>
        <a href="./conta.php">Voltar</a>

        <div class="form-row mt-5 sign-up col-sm-12">
            <div class="form-group col-md-6">
                <label for="client-name">Nome</label>
                <input type="text" class="form-control" id="client-name" name="client-name"
                    aria-describedby="client-name" value="Testinho">
            </div>

            <div class="form-group col-md-6">
                <label for="client-name">Sobrenome</label>
                <input type="text" class="form-control" id="client-name" name="client-name"
                    aria-describedby="client-name" value="da Silva">
            </div>

            <div class="form-group col-md-12">
                <label for="client-email">Email</label>
                <input type="email" class="form-control" id="client-email" name="client-email"
                    aria-describedby="client-email" value="testudo@yahoo.com.br">
            </div>

            <div class="form-group col-md-12">
                <label for="client-address">Endereço para entrega</label>
                <input type="text" class="form-control" id="client-address" name="client-address"
                    aria-describedby="client-address" value="Rua Oscar Freire, 2121. Apt 1006">
            </div>

            <div class="form-group col-md-6">
                <label for="client-password">Alterar senha</label>
                <input type="password" class="form-control" id="client-password" placeholder="Alterar senha">
            </div>

            <div class="form-group col-md-6">
                <label for="confirm-password">Confirmar a nova senha</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirmar a nova senha">
            </div>

            <div class="col-12 text-center mt-3">
                <button type="submit" class="cta btn btn-dark button">Confirmar alterações</button>
            </div>
        </div>

    </form>
</div>

<!-- FOOTER -->
<?php require_once './inc/footer.php'; ?>