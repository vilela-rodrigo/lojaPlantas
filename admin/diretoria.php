<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen" />
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon" />

    <title>Planteliê • Painel Administrativo</title>
</head>

<body>
    <div class="wrap-all">

        <!-- NAV TOP -->
        <header class="nav-shop py-2">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4">
                </div>
                <div class="col-4 text-center">
                    <a class="name-shop text-dark" href="./diretoria.php">Diretoria</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a href="../index.php" class="tomato">Sair</a>
                </div>
            </div>
        </header>

        <!-- ADMIN -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 bg-plant">
                    <h1>Painel Administrativo</h1>
                    <h5 class="mb-5">Planteliê</h5>
                    <div class="mb-3">
                        <a href="./usuarios.php" class="p-1">Usuários</a>
                    </div>

                    <div class="mb-3">
                        <a href="./categorias.php" class="p-1">Categorias</a>
                    </div>

                    <div class="mb-3">
                        <a href="./produtos.php" class="mr-5 p-1">Produtos</a>
                    </div>

                    <div class="mb-5">
                        <a href="./mensagens.php" class="mr-5 p-1">Mensagens</a>
                    </div>
                </div>
            </div>

            <!-- MAIN -->
            <div class="col-md-7">

            </div>
        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</body>

</html>