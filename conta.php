<!-- HEAD -->
<?php require_once './inc/head.php'; ?>

<!-- HEADER -->
<?php require_once './inc/header.php'; ?>

<!-- CONTACT -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 bg-plant">
            <h1>Detalhes da Conta & Histórico de Pedidos</h1>
            <h2 class="mt-5">George Chaves</h2>
            <h5 class="mb-3">george_hfc@yahoo.com.br</h5>

            <div class="mb-3">
                <a href="./editar-conta.php">Alterar dados</a>
            </div>
            <div class="mb-5">
                <a href="./index.php" class="tomato">Sair da conta</a>
            </div>
        </div>

        <!-- ORDERS -->
        <div class="col-md-7">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data</th>
                        <th scope="col">Pagamento</th>
                        <th scope="col">Processando</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>04/07/2020</td>
                        <td>À vista</td>
                        <td>Aprovado</td>
                        <td><strong>R$ 430,00</strong></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>04/07/2020</td>
                        <td>À vista</td>
                        <td>Aprovado</td>
                        <td><strong>R$ 430,00</strong></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>04/07/2020</td>
                        <td>À vista</td>
                        <td>Aprovado</td>
                        <td><strong>R$ 430,00</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- FOOTER -->
<?php require_once './inc/footer.php'; ?>