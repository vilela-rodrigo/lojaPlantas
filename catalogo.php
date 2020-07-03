<!-- HEAD -->
<?php require_once './inc/head.php'; ?>

<!-- HEADER -->
<?php require_once './inc/header.php'; ?>


<!-- PRODUCTS -->
<main>
  <!-- FILTERS -->
  <form class="filters mt-3 bg-light p-4">

    <div class="row">
      <div class="col">
        <h5>Filtrar por:</h5>
      </div>

      <div class="col">
        <button type="reset" class="float-right reset-button text-muted">Limpar filtros</button>
      </div>
    </div>
    <ul class="row">
      <!-- FEATURES -->
      <li class="tabs-title col-sm-3">

        <a data-toggle="collapse" href="#filter-features" aria-expanded="true">Características</a>
        <a class="text-muted fa fa-angle-down ml-2" data-toggle="collapse" href="#filter-features"
          aria-expanded="true"></a>

        <div class="row mt-3 collapse" id="filter-features">
          <!-- LIGHT -->
          <div class="col-md-12">
            <h6>Luz</h6>
            <label for="light-bright" class="form-check">
              <input id="light-bright" type="checkbox">
              <span>Claridade</span>
            </label>

            <label for="light-shadow" class="form-check">
              <input id="light-shadow" type="checkbox">
              <span>Sombra</span>
            </label>
          </div>


          <!-- STYLE -->
          <div class="col-md-12 mt-3">
            <h6>Estilo</h6>
            <label for="style-blooming" class="form-check">
              <input id="style-blooming" type="checkbox">
              <span>Flores</span>
            </label>

            <label for="style-patterned" class="form-check">
              <input id="style-patterned" type="checkbox">
              <span>Padronada</span>
            </label>

            <label for="style-cascading" class="form-check">
              <input id="style-cascading" type="checkbox">
              <span>Cascata</span>
            </label>
          </div>


          <!-- BENEFITS -->
          <div class="col-md-12 mt-3">
            <h6>Benefícios</h6>
            <label for="benefits-pet" class="form-check">
              <input id="benefits-pet" type="checkbox">
              <span>Amiga dos pets</span>
            </label>

            <label for="benefits-air" class="form-check">
              <input id="benefits-air" type="checkbox">
              <span>Purificadora de ar</span>
            </label>
          </div>

        </div>
      </li>

      <!-- VARIETY -->
      <li class="tabs-title col-sm-3">
        <a data-toggle="collapse" href="#filter-variety" aria-expanded="true">Espécies</a>
        <a class="text-muted fa fa-angle-down ml-2" data-toggle="collapse" href="#filter-variety"
          aria-expanded="true"></a>

        <div class="mt-3 collapse" id="filter-variety">
          <label for="variety-succulent" class="form-check">
            <input id="variety-succulent" type="checkbox">
            <span>Suculenta</span>
          </label>

          <label for="variety-fern" class="form-check">
            <input id="variety-fern" type="checkbox">
            <span>Samambaia</span>
          </label>

          <label for="variety-parlor-paml" class="form-check">
            <input id="variety-parlor-paml" type="checkbox">
            <span>Palmeira</span>
          </label>

          <label for="variety-peperomia" class="form-check">
            <input id="variety-peperomia" type="checkbox">
            <span>Peperômia</span>
          </label>

          <label for="variety-philodendron" class="form-check">
            <input id="variety-philodendron" type="checkbox">
            <span>Philodendron</span>
          </label>
        </div>
      </li>

      <!-- SIZES -->
      <li class="tabs-title col-sm-3">
        <a data-toggle="collapse" href="#filter-sizes" aria-expanded="true">Tamanhos</a>
        <a class="text-muted fa fa-angle-down ml-2" data-toggle="collapse" href="#filter-sizes"
          aria-expanded="true"></a>

        <div class="mt-3 collapse" id="filter-sizes">
          <label for="size-x-small" class="form-check">
            <input id="size-x-small" type="checkbox">
            <span>Pequena 10cm</span>
          </label>

          <label for="size-small" class="form-check">
            <input id="size-small" type="checkbox">
            <span>Média 30cm</span>
          </label>

          <label for="size-large" class="form-check">
            <input id="size-large" type="checkbox">
            <span>Grande 60cm</span>
          </label>
        </div>
      </li>
    </ul>
  </form>

  <div class="card-deck my-4">
    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Planta ZZ</h4>
        <p class="card-text">Planta ZZ tem como característica suas folhas cerosas e grossas folhas. É uma ótima
          purificadora de ar para iniciantes. Serve como ótimo presente de graduação!</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Ninho de Pássaro</h4>
        <p class="card-text">Se você busca pela planta tropical perfeita para sua casa, não precisa de nada mais do que
          uma Ninho de Pássaro. Conhecida pelas suas folhas onduladas que crescem de uma rosetta central, essa planta
          vai trazer um estalo vibrante para o verde de qualquer espaço.</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Costela de Adão</h4>
        <p class="card-text">Monstera Deliciosa, também conhecida como a “planta do queijo suíço”, é famosa pelos
          peculiares buracos naturais.</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>
  </div>

  <div class="card-deck my-4">
    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">ZZ Plant</h4>
        <p class="card-text">The ZZ Plant is characterized by its thick waxy green leaves. It is a great air purifying
          plant for beginners. This makes a great gift for a new grad!</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Bird’s Nest Fern</h4>
        <p class="card-text">If you’re looking for the perfect tropical houseplant, look no further than the Bird’s Nest
          Fern. Known for its wavy ripple-edge fronds that grow out of a central rosette, this plant will add vibrant
          pop of green to any space.</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Monstera Deliciosa</h4>
        <p class="card-text">Nicknamed the “swiss cheese plant”, the Monstera deliciosa is famous for its quirky natural
          leaf holes.</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>
  </div>

  <div class="card-deck my-4">
    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">ZZ Plant</h4>
        <p class="card-text">The ZZ Plant is characterized by its thick waxy green leaves. It is a great air purifying
          plant for beginners. This makes a great gift for a new grad!</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Bird’s Nest Fern</h4>
        <p class="card-text">If you’re looking for the perfect tropical houseplant, look no further than the Bird’s Nest
          Fern. Known for its wavy ripple-edge fronds that grow out of a central rosette, this plant will add vibrant
          pop of green to any space.</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="./assets/images/plantaQualquer4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="mt-1 ml-1">R$ 99,00</h5>
        <h4 class="card-title">Monstera Deliciosa</h4>
        <p class="card-text">Nicknamed the “swiss cheese plant”, the Monstera deliciosa is famous for its quirky natural
          leaf holes.</p>
        <a href="./produto.php">+ Adicionar ao carrinho</a>
      </div>
    </div>
  </div>

</main>

<!-- FOOTER -->
<?php
require_once './inc/footer.php';
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>