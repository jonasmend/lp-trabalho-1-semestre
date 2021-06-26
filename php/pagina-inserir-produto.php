<?php 
  include 'verificar-usuario-logado.php';
  include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir Produto</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/pagina-inserir-produto.css">
</head>
<body>

  <div class="container-fluid col-12">
    <div class="text-center col-12" style="background-color: orange;">
      <h3>Adicionar Novo Produto</h3>
    </div>
  </div>
  <div class="container">
    <div class="row form-group">
      <form action="inserir-produto.php" method="POST" id="formulario-produto" class="">
        
        <div class="input-field col-12">
          <label for="lblDescricao">Informe a descrição do produto</label>
          <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" required>
        </div>
        <div class="row input-field">
          <div class="col-6">
            <label for="lblEstoque">Informe a quantidade disponível: </label>
            <input type="text" class="form-control" id="txtEstoque" name="txtEstoque" pattern="[0-9]{3}" placeholder="Ex: 014" required>
          </div>
          <div class="col-6">
            <label for="lblPreco">Informe o preço unitário: </label>
            <div class="input-group mb-3">
              <span class="input-group-text">R$</span>
              <input type="text" class="form-control" id="txtPreco" name="txtPreco" pattern="[0-9]{3}.[0-9]{2}" placeholder="Ex: 015.99" required>
            </div>
          </div>
        </div>
        
        <br>

        <div class="buttons input-field col-12">
          <button class="btn btn-danger" type="button" name="btnVoltar" onclick="JavaScript:location.href='pagina-produtos.php'">
            <i class="fas fa-arrow-circle-left"></i> Voltar
          </button>

          <button class="btn btn-warning" type="reset" name="btnLimpar">
            <i class="fas fa-backspace"></i> Limpar
          </button>

          <button class="btn btn-success" type="submit" name="btnGravar">
            <i class="fas fa-check"></i> Salvar
          </button>
          
        </div>

      </form>
    </div>
  </div>
  
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

<?php
  include 'footer.php'
?>