<?php
  include "verificar-usuario-logado.php";
  include "menu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/pagina-principal.css">

  <title>Pagina Principal</title>
</head>
<body>

  <div class="container-fluid col-12">
    <div class="text-center col-12" style="background-color: orange;">
      <h3>Padaria Bread</h3>
    </div>
  </div>

  <div class="features text-center">
    <div class="col-md-10 col-md-offset-1 titulo">
        <h4>Sistema de controle de estoque da Padaria Bread©.</h4>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-xs-6 col-md-4">
              <i class="far fa-user"></i>
              <h3>Clientes</h3>
              <p>Manipulação de clientes.</p>
              <a href="pagina-clientes.php">
                <button class="btn btn-outline-light">Acessar</button>
              </a>
          </div>
          <div class="col-xs-6 col-md-4">
              <i class="fas fa-store"></i>
              <h3>Produtos</h3>
              <p>Manipulação de produtos.</p>
              <a href="pagina-produtos.php">
                <button class="btn btn-outline-light">Acessar</button>
              </a>
          </div>
          
          <div class="col-xs-6 col-md-4">
              <i class="fas fa-shopping-cart"></i>
              <h3>Vendas</h3>
              <p>Manipulação de Vendas
              </p>
              <a href="pagina-vendas.php">
                <button class="btn btn-outline-light">Acessar</button>
              </a>
          </div>
      </div>
    </div>
  </div>
  
  
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

<?php
  include "footer.php";
?>