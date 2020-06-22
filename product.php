<!-- HEAD -->
<?php require_once './inc/head.php'; ?>

<!-- HEADER -->
<?php require_once './inc/header.php'; ?>

<!-- PRODUCT DETAIL -->
<main>
  <div class="row mt-3">

  <!-- CAROUSSEL -->
  <div id="carousel-img" class="carousel slide col-lg-6 col-md-7 highlight" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-img" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-img" data-slide-to="1"></li>
      <li data-target="#carousel-img" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./assets/images/plantaQualquer.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/images/plantaQualquer.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/images/plantaQualquer.jpg" alt="Third slide">
      </div>
    </div>
    
    <a class="carousel-control-prev" href="#carousel-img" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
    <a class="carousel-control-next" href="#carousel-img" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
  </div>

  <!-- ABOUT -->
  <div class="col-md-5 mt-5 product-page-info">
    <h1>Snake Plant Laurentii</h1>
    <div class="price mb-5">R$ 99,00</div>
    <p>The Snake Plant Laurentii is a succulent plant characterized by its upright swordlike leaves with vibrant yellow edges. Add a pop of color by pairing it with our limited edition Summer Red Grant Planter.</p>

    <!-- QUANTIDADE -->
    <section class="mb-3">
      <h5>Quantidade:</h5>
      <input type="number" value="1" class="quantity form-control">
    </section>

    <!-- VASO -->
    <section class="mb-3">
      <h5>Formato do vaso:</h5>
      <select class="pot custom-select">
        <option selected>Grant</option>
        <option value="1">Hyde</option>
      </select>
    </section>

    <!-- COLOR PICKER -->
    <section class="col-md-12 mb-3">
      <div class="row mb-2">
        <h5>Cor do vaso: <span><?php $color_name ?></span></h5>
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
    <button type="button" class="cta btn btn-dark mt-3">Comprar planta</button>

    </div>
</main>

<!-- FOOTER -->
</div>
<?php
require_once './inc/footer.php';
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>