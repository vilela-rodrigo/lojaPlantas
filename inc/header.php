<body>
    <div class="wrap-all">
    <!-- NAV TOP -->
    <header class="nav-shop py-2">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4">
            </div>
            <div class="col-4 text-center">
                <a class="name-shop text-dark" href="./index.php">Planteliê</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted cart fa fa-shopping-cart mr-4" href="#"></a>
                <a class="btn-sm btn-secondary mr-2 login" href="#" role="button" data-toggle="modal" data-target="#modal-login">Entrar</a>
            </div>
        </div>
    </header>

    <!-- MODAL -->
    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="#" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Digite suas credenciais</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="" method="$_POST" class="p-2">
                        <div class="form-row">
                            <p>Não possui conta?</p>
                            <a class="ml-1" href="./cadastro.php">Cadastre-se aqui</a>.

                            <div class="form-group col-12">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="inputEmail" placeholder="Digite seu email cadastrado">
                            </div>

                            <div class="form-group col-12">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                            </div>

                            <label for="remember-me" class="form-check">
                                <input class="m-2" id="remember-me" type="checkbox">
                                <span>Lembrar-se de mim nos próximos acessos.</span>
                            </label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <!-- <a href="#" data-dismiss="modal">Cancelar</a> -->
                    <button type="submit" class="cta btn btn-dark button">Acessar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- NAV SCROLLER -->
    <div class="nav-scroller py-1">
        <nav class="nav d-flex justify-content-between">
            <a href="#" class="ml-5 p-1 text-muted">Favoritas</a>
            <a href="./catalogo.php" class="p-1 text-muted">Categorias</a>
            <a href="./contato.php" class="mr-5 p-1 text-muted">Contato</a>
        </nav>
    </div>