<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Home - Planta no Apê</title>
</head>

<body>

  <Header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">NomeDaLoja</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Minha conta</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Plantas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Ambiente de muita luz</a>
              <a class="dropdown-item" href="#">Ambiente de pouca luz</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Qualquer ambiente</a>
            </div>
          </li>
          <li class="nav-item">

            <svg class="bi bi-cart3" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>
          </li>
        </ul>

      </div>
    </nav>

  </Header>

  <img class="container-fluid" src="assets\imagens\banner.png" alt="Foto de capa">


  <div class="container col-12">


    <table>
      <tr>
        <td><img width="400" height="400" src="assets\imagens\plantaQualquer2.jpg" /></td>


        <td>
          <h2 class="col-12 text-right  mt-5">Planta do mês</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </br>
            Phasellus bibendum aliquet erat, ut ornare purus malesuada et.orem ipsum dolor sit amet consectetur adipisicing elit. Animi, rerum aliquam. Repudiandae aperiam repellat amet, perspiciatis ab ea minima error iusto rerum similique exercitationem architecto nobis inventore, obcaecati hic doloremque?Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati natus nisi vero, quod eveniet unde explicabo voluptatum necessitatibus blanditiis? Blanditiis sed cum sapiente esse provident accusamus nisi minima distinctio numquam?</p>
        </td>
      </tr>
    </table>
  </div>
  <a href="#" class="  float-right"> + Saiba mais... </a>

  <div class="container">
    <main class="container">
      <h1 class="col-12 text-center text-info mt-5 mb-4">Destaque</h1>

      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="assets\imagens\plantaQualquer.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Planta 1</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt repellendus quod tempore quia. In similique vel illo tenetur placeat, accusamus veniam eum temporibus? Recusandae repellat dicta deleniti nemo alias vitae.</p>

            <p class="preco-vitrine text-info d-inline">R$ 99,00</p>
            <a href="#" class="btn btn-info float-right">Comprar</a>

          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets\imagens\plantaQualquer.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Planta 2</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate at aliquid ut quaerat accusamus </p>

            <p class="preco-vitrine text-info d-inline">R$ 99,00</p>
            <a href="#" class="btn btn-info float-right">Comprar</a>

          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets\imagens\plantaQualquer.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Planta 3</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolore tenetur labore itaque iste placeat dolorum dolorem, velit tempora excepturi laborum mollitia reiciendis eum ratione aspernatur veniam aut impedit fugit?.</p>

            <p class="preco-vitrine text-info d-inline">R$ 99,00</p>
            <a href="#" class="btn btn-info float-right">Comprar</a>

          </div>
        </div>
      </div>
    </Main>


    <footer class="container-fluid bg-light text-dark mt-4 p-3 ">

      <h4>Nome da Empresa</h4>
      <ul style="list-style:none; padding:0; margin:0">
        <li>Endereço</li>
        <li>Telefone</li>
        <li>email</li>
        <li>CNPJ</li>
        <li>redes sociais</li>
      </ul>
    </footer>

    <script src="...https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="...https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="...https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>






</body>

</html>