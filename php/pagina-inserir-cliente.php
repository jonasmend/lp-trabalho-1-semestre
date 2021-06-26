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
  <title>Inserir Cliente</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/pagina-inserir-cliente.css">
</head>
<body>

  <div class="container-fluid col-12">
    <div class="text-center col-12" style="background-color: orange;">
      <h3>Adicionar Novo Cliente</h3>
    </div>
  </div>
  <div class="container">
    <div class="row form-group">
      <form action="inserir-cliente.php" method="POST" id="formulario-cliente" class="">
        
        <div class="input-field col-12">
          <label for="lblNome">Informe o nome do cliente</label>
          <input type="text" class="form-control" id="txtNome" name="txtNome" required>
        </div>
        <div class="row input-field">
          <div class="col-6">
            <label for="lblCPF">Informe o CPF: </label>
            <input type="text" class="form-control" id="txtCPF" name="txtCPF" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="Ex: 000.000.000-00" required>
          </div>
          <div class="col-6">
            <label for="lblNascimento">Informe a data de nascimento: </label>
            <input type="text" class="form-control" id="txtNascimento" name="txtNascimento" pattern="[0-3]{1}[0-9]{1}/[0-1]{1}[0-9]{1}/[0-9]{4}" placeholder="Ex: 01/01/2000" required>
          </div>
        </div>
        <div class="row input-field">
          <div class="col-5">
            <label for="lblCEP">Informe o CEP: </label>
            <input type="text" class="form-control" id="txtCEP" name="txtCEP" pattern="[0-9]{2}.[0-9]{3}-[0-9]{3}" placeholder="Ex: 00.000-000" required>
          </div>
          <div class="col-5">
            <label for="lblRua">Informe a Rua: </label>
            <input type="text" class="form-control" id="txtRua" name="txtRua" required>
          </div>
          <div class="col-2">
            <label for="lblNumero">Informe a Número: </label>
            <input type="number" class="form-control" id="txtNumero" name="txtNumero" required>
          </div>
        </div>
        <div class="row input-field">
          <div class="col-5">
            <label for="lblBairro">Informe a Bairro: </label>
            <input type="text" class="form-control" id="txtBairro" name="txtBairro" required>
          </div>
          <div class="col-7">
            <label for="lblComplemento">Informe a Complemento: </label>
            <input type="text" class="form-control" id="txtComplemento" name="txtComplemento">
          </div>
        </div>
        
        <br>
        <div class="buttons input-field col-12">
          <button class="btn btn-success" type="submit" name="btnGravar">
            <i class="fas fa-check"></i> Salvar
          </button>

          <button class="btn btn-warning" type="reset" name="btnLimpar">
            <i class="fas fa-backspace"></i> Limpar
          </button>

          <button class="btn btn-danger" type="button" name="btnVoltar" onclick="JavaScript:location.href='pagina-clientes.php'">
            <i class="fas fa-arrow-circle-left"></i> Voltar
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