<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css" class="href">

  <title>Planta no Apê</title>
</head>

<body>

  <!-- NAV -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Planta no Apê</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Início<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Minha conta</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plantas</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Ambiente de muita luz</a>
              <a class="dropdown-item" href="#">Ambiente de pouca luz</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Qualquer ambiente</a>
            </div>
          </li>
          <li class="nav-item">

            <svg class="bi bi-cart3 mt-2" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>
          </li>
        </ul>

      </div>
    </nav>

  </header>

  <!-- HERO BANNER -->
  <div class="img-container">
    <div class="inner-container ml-5">
      <h1>Apoie o verde</h1>
      <h3>Do mimo no dia dos namorados ao presente de graduação – nós temos o que você precisa.</h3>
      <button type="button" class="btn btn-dark mt-3">Buscar planta</button>
    </div>
  </div>

  <!-- PLANT HIGHLIGHT -->
  <div class="container col-12 mt-5">
    <div class="row">
      <div class="col-7 ml-5">
        <img width="88%" src="./assets/images/plantaQualquer.jpg" />
      </div>
      <div class="col-4 text-right mt-5">
        <h5 class="mt-5">Planta do mês</h5>
        <h2>Snake Plant Laurentii</h2>
        <p>The Snake Plant Laurentii is a succulent plant characterized by its upright swordlike leaves with vibrant yellow edges. Add a pop of color by pairing it with our limited edition Summer Red Grant Planter.</p>
        <a href="#" class="float-right"> + Saiba mais... </a>
      </div>
    </div>
  </div>

  <div class="container">
    <main class="container">
      <h2 class="mt-5 mb-4">Produtos</h2>

      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="./assets/images/plantaQualquer2.jpg" alt="Card image cap">
          <div class="card-body">
              <h5 class="float-right mt-1 ml-1">R$ 99,00</h5>
              <h4 class="card-title">ZZ Plant</h4>
            <p class="card-text">The ZZ Plant is characterized by its thick waxy green leaves. It is a great air purifying plant for beginners. This makes a great gift for a new grad!</p>
            <a href="#">+ Comprar</a>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="./assets/images/plantaQualquer3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="float-right mt-1 ml-1">R$ 99,00</h5>
            <h4 class="card-title">Bird’s Nest Fern</h4>
            <p class="card-text">If you’re looking for the perfect tropical houseplant, look no further than the Bird’s Nest Fern. Known for its wavy ripple-edge fronds that grow out of a central rosette, this plant will add vibrant pop of green to any space.</p>
            <a href="#">+ Comprar</a>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="./assets/images/plantaQualquer4.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="float-right mt-1 ml-1">R$ 99,00</h5>
            <h4 class="card-title">Monstera Deliciosa</h4>
            <p class="card-text">Nicknamed the “swiss cheese plant”, the Monstera deliciosa is famous for its quirky natural leaf holes.</p>
            <a href="#">+ Comprar</a>
          </div>
        </div>
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </div>

  <footer class="container-fluid bg-light mt-5 p-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 coluninha">
            <ul class="text-center">
              <li class="mt-3">
                <a href="#">Sobre nós</a>
              </li>
              <li class="mt-3">
                <a href="#">Perguntas frequentes</a>
              </li>
              <li class="mt-3">
                <a href="#">Informações de entrega</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 coluninha">
           <div class="text-center email">
             <label class="mt-3 mb-4"><strong>Apoie o verde.</strong></label>
              <form action="">
                <div>
                  <input class="text-center" type="email" value="" name="email" placeholder="Seu e-mail aqui">
                </div>
                <div class="mt-3">
                  <button type="submit" name="emailsignup" class="btn">Assinar</button>
                </div>
              </form>              
            </div>
          </div>
          <div class="col-lg-3 coluninha">
            <ul class="text-center">
              <li class="mt-3">
                <a href="#">Clube de vantagens</a>
              </li>
              <li class="mt-3">
                <a href="#">Entre em contato</a>
              </li>
            </ul>
          </div>
        </div>
      </div>    
    </footer>

</body>

</html>