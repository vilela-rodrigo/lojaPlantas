<!-- HEAD -->
<?php require_once './inc/head.php'; ?>

<!-- HEADER -->
<?php require_once './inc/header.php'; ?>


<!-- PRODUCTS -->
<main>
  <!-- FILTERS -->
  <form class="filters mt-3 bg-light p-5">
    <h5>Filtrar por:</h5>
    <ul class="tabs row" id="filter-tabs">
      <!-- FEATURES -->
      <li class="tabs-title col-sm-6 mt-3">
        <a href="#">Características</a>
        <a class="text-muted fa fa-angle-down ml-2" href="#"></a>

        <div class="row ml-0 mt-3">
          <!-- LIGHT -->
          <div>
            <form action="">
              <h6>Luz</h6>
              <label for="light-bright" class="form-check">
                <input id="light-bright" type="checkbox">
                <span>Claridade</span>
              </label>
    
              <label for="light-shadow" class="form-check">
                <input id="light-shadow" type="checkbox">
                <span>Sombra</span>
              </label>
            </form>
          </div>
  
          <!-- STYLE -->
          <div>
            <form action="">
              <h6>Estilo</h6>
              <label for="style-blooming" class="form-check">
                <input id="style-blooming" type="checkbox">
                <span>Blooming</span>
              </label>
    
              <label for="style-patterned" class="form-check">
                <input id="style-patterned" type="checkbox">
                <span>Patterned</span>
              </label>
    
              <label for="style-trending" class="form-check">
                <input id="style-trending" type="checkbox">
                <span>Trending</span>
              </label>
    
              <label for="style-cascading" class="form-check">
                <input id="style-cascading" type="checkbox">
                <span>Cascading</span>
              </label>
            </form>
          </div>
          
          <!-- BENEFITS -->
          <div>
            <form action="">
              <h6>Benefícios</h6>
              <label for="benefits-pet" class="form-check">
                <input id="benefits-pet" type="checkbox">
                <span>Amiga dos pets</span>
              </label>
    
              <label for="benefits-air" class="form-check">
                <input id="benefits-air" type="checkbox">
                <span>Purificadora de ar</span>
              </label>
            </form>
          </div>
        </div>
      </li>

      <!-- VARIETY -->
      <li class="tabs-title col-sm-3 mt-3">
        <a href="#">Variedade</a>
        <a class="text-muted fa fa-angle-down ml-2" href="#"></a>

        <form class="mt-3" action="">
          <label for="variety-succulent" class="form-check">
            <input id="variety-succulent" type="checkbox">
            <span>Succulent</span>
          </label>
          
          <label for="variety-fern" class="form-check">
            <input id="variety-fern" type="checkbox">
            <span>Fern</span>
          </label>

          <label for="variety-parlor-paml" class="form-check">
            <input id="variety-parlor-paml" type="checkbox">
            <span>Parlor Palm</span>
          </label>

          <label for="variety-peperomia" class="form-check">
            <input id="variety-peperomia" type="checkbox">
            <span>Peperomia</span>
          </label>

          <label for="variety-philodendron" class="form-check">
            <input id="variety-philodendron" type="checkbox">
            <span>Philodendron</span>
          </label>
        </form>
      </li>

      <!-- SIZES -->
      <li class="tabs-title col-sm-3 mt-3">
        <a href="#">Tamanhos</a>
        <a class="text-muted fa fa-angle-down ml-2" href="#"></a>

        <form class="mt-3" action="">
          <label for="size-mini" class="form-check">
            <input id="size-mini" type="checkbox">
            <span>Mini 2.5"</span>
          </label>
          
          <label for="size-x-small" class="form-check">
            <input id="size-x-small" type="checkbox">
            <span>Muito pequena 4"</span>
          </label>

          <label for="size-small" class="form-check">
            <input id="size-small" type="checkbox">
            <span>Pequena 4.5"</span>
          </label>

          <label for="size-medium" class="form-check">
            <input id="size-medium" type="checkbox">
            <span>Média 7"</span>
          </label>

          <label for="size-large" class="form-check">
            <input id="size-large" type="checkbox">
            <span>Grande 12"</span>
          </label>
        </form>
      </li>
    </ul>

    <button type="reset" class="button clear clear-filters">Limpar filtros</button>
  </form>

  <div class="card-deck my-4">
    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">ZZ Plant</h4>
        <p class="card-text">The ZZ Plant is characterized by its thick waxy green leaves. It is a great air purifying plant for beginners. This makes a great gift for a new grad!</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Bird’s Nest Fern</h4>
        <p class="card-text">If you’re looking for the perfect tropical houseplant, look no further than the Bird’s Nest Fern. Known for its wavy ripple-edge fronds that grow out of a central rosette, this plant will add vibrant pop of green to any space.</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Monstera Deliciosa</h4>
        <p class="card-text">Nicknamed the “swiss cheese plant”, the Monstera deliciosa is famous for its quirky natural leaf holes.</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>
  </div>

  <div class="card-deck my-4">
    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">ZZ Plant</h4>
        <p class="card-text">The ZZ Plant is characterized by its thick waxy green leaves. It is a great air purifying plant for beginners. This makes a great gift for a new grad!</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Bird’s Nest Fern</h4>
        <p class="card-text">If you’re looking for the perfect tropical houseplant, look no further than the Bird’s Nest Fern. Known for its wavy ripple-edge fronds that grow out of a central rosette, this plant will add vibrant pop of green to any space.</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Monstera Deliciosa</h4>
        <p class="card-text">Nicknamed the “swiss cheese plant”, the Monstera deliciosa is famous for its quirky natural leaf holes.</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>
  </div>

  <div class="card-deck my-4">
    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">ZZ Plant</h4>
        <p class="card-text">The ZZ Plant is characterized by its thick waxy green leaves. It is a great air purifying plant for beginners. This makes a great gift for a new grad!</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Bird’s Nest Fern</h4>
        <p class="card-text">If you’re looking for the perfect tropical houseplant, look no further than the Bird’s Nest Fern. Known for its wavy ripple-edge fronds that grow out of a central rosette, this plant will add vibrant pop of green to any space.</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Monstera Deliciosa</h4>
        <p class="card-text">Nicknamed the “swiss cheese plant”, the Monstera deliciosa is famous for its quirky natural leaf holes.</p>
        <a href="./produto.php">+ Comprar</a>
      </div>
    </div>
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