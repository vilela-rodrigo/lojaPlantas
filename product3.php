<!-- HEAD -->
<?php require_once './inc/head.php'; ?>

<!-- HEADER -->
<?php require_once './inc/header.php'; ?>

<!-- PRODUCT DETAIL -->
<main>
  <div class="row">
    <div class="col-lg-6 col-md-7 highlight">
      <img width="100%" src="./assets/images/plantaQualquer3.jpg" />
    </div>

    <div class="col-md-5 mt-5 product-page-info">
      <h2>Bird’s Nest Fern</h2>
      <p>If you’re looking for the perfect tropical houseplant, look no further than the Bird’s Nest Fern. Known for its wavy ripple-edge fronds that grow out of a central rosette, this plant will add vibrant pop of green to any space.</p>

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