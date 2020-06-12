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
      <a class="navbar-brand" href="./index.php">Planta no Apê</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
      
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Início</a>
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

  <!-- PRODUCT DETAIL -->
  <main>
    <div class="row">
      <div class="col-lg-6 col-md-7 highlight">
        <img width="100%" src="./assets/images/plantaQualquer.jpg" />
      </div>

      <div class="col-md-5 mt-5 product-page-info">
        <h2>Snake Plant Laurentii</h2>
        <p>The Snake Plant Laurentii is a succulent plant characterized by its upright swordlike leaves with vibrant yellow edges. Add a pop of color by pairing it with our limited edition Summer Red Grant Planter.</p>

        <!-- COLOR PICKER -->
        <section class="container col-md-12">
            <div class="row">
                <h5>Cor: <span><?php $color_name ?></span></h5>
            </div>
            <div class="color-picker">
                <input type="radio" name="radio" id="green" value="green">
                <label for="green" class="green"><span>VERDE</span></label>

                <input type="radio" name="radio" id="white" value="white">
                <label for="white" class="white"><span>BRANCO</span></label>

                <input type="radio" name="radio" id="black" value="black">
                <label for="black" class="black"><span>PRETO</span></label>

                <input type="radio" name="radio" id="petroleum" value="petroleum">
                <label for="petroleum" class="petroleum"><span>PETRÓLEO</span></label>
            </div>
        </section>
        
        <!-- CTA -->
        <button type="button" class="btn btn-dark mt-5">Comprar planta</button>


    </div>
  </main>

  <!-- FOOTER -->
  <?php
    require_once './inc/footer.php';
  ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>