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
                <a class="dark cart fa fa-shopping-cart mr-4" href="#" data-toggle="modal" data-target="#modal-cart"></a>
                <a id="icon-cart">2</a>
                <a class="btn-sm btn-dark mr-2 login" href="#" role="button" data-toggle="modal" data-target="#modal-login">Entrar</a>
            </div>
        </div>
    </header>

    <!-- MODAL LOGIN-->
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
                    <form action="../conta.php" method="POST" class="p-2">
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
                    <a class="btn btn-dark cta button mt-3" href="./conta.php">Acessar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CART -->
    <div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="#" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Seu carrinho</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container mb-2">
                        <div class="row">
                            <div class="mt-3 col-md-12 p-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="d-block w-100" src="./assets/images/plantaQualquer.jpg" alt="First slide">
                                    </div>
                                    <div class="col-md-7">
                                        <h2>Snake Plant Laurentii</h2>
                                        <div class="price mb-3">R$ 99,00</div>
                                        <input type="number" value="1" class="quantity form-control">
                                    </div>
                                    <div class="col-md-1 align-self-center float-right mt-2">
                                        <a href="#" class="tomato">Remover</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mt-3 col-md-12 p-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="d-block w-100" src="./assets/images/plantaQualquer2.jpg" alt="First slide">
                                    </div>
                                    <div class="col-md-7">
                                        <h2>Snake Plant Laurentii</h2>
                                        <div class="price mb-3">R$ 99,00</div>
                                        <input type="number" value="1" class="quantity form-control">
                                    </div>
                                    <div class="col-md-1 align-self-center float-right mt-2">
                                        <a href="#" class="tomato">Remover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row float-md-right mt-2 mr-md-2">    
                            <h2>Subtotal: $ 999,00</h2>
                        </div>
                        <div class="row mt-3">
                            <h5>Frete calculado no pagamento</h5>
                        </div>
                        <div class="row">
                            <p>Sente falta de algo? <a href="./index.php">Continue comprando</a>.</p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="cta btn btn-dark button">Comprar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- NAV SCROLLER -->
    <div class="nav-scroller py-1">
        <nav class="nav d-flex justify-content-between">
            <a href="./favoritas.php" class="ml-5 p-1 text-muted">Favoritas</a>
            <a href="./catalogo.php" class="p-1 text-muted">Categorias</a>
            <a href="./contato.php" class="mr-5 p-1 text-muted">Contato</a>
        </nav>
    </div>