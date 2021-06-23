<?php 
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
</head>
<body>

<div class="container-fluid col-12">
    <div class="text-center col-12" style="background-color: orange;">
      <h3>Adicionar Novo Cliente</h3>
    </div>
    <div class="row">
      <form action="insCompetidor.php" method="POST" id="frmInsCompetidor" class="col-12">
        
        <div class="input-field col-8">
          <label for="lblNome">Informe o nome do cliente</label>
          <input type="text" class="form-control" id="txtNome" name="txtNome">
        </div>
        <div class="input-field col-5">
          <label for="lblCidade">Informe o CPF: </label>
          <input type="text" class="form-control" id="txtCPF" name="txtCPF">
        </div>
        <div class="input-field col-5">
          <label for="lblEstado">Informe a data de nascimento: </label>
          <input type="text" class="form-control" id="txtNascimento" name="txtNascimento">
        </div>
        <div class="input-field col-5">
          <label for="lblIdade">Informe o CEP: </label>
          <input type="number" class="form-control" id="txtCEP" name="txtCEP">
        </div>
        <div class="input-field col-5">
          <label for="lblNota">Informe a Rua: </label>
          <input type="number" class="form-control" id="txtRua" name="txtRua">
        </div>
        <div class="input-field col-5">
          <label for="lblNota">Informe a Número: </label>
          <input type="number" class="form-control" id="txtNumero" name="txtNumero">
        </div>
        <div class="input-field col-5">
          <label for="lblNota">Informe a Bairro: </label>
          <input type="number" class="form-control" id="txtBairro" name="txtBairro">
        </div>
        <div class="input-field col-5">
          <label for="lblNota">Informe a Complemento: </label>
          <input type="number" class="form-control" id="txtComplemento" name="txtComplemento">
        </div>
        
        <br>
        <div class="input-field col s8">
          <button class="btn waves-effect waves-light green" type="submit" name="btnGravar">
            Gravar <i class="material-icons">send</i>
          </button>

          <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
            Limpar <i class="material-icons">brush</i>
          </button>

          <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar" onclick="JavaScript:location.href='listarCompetidor.php'">
            Voltar <i class="material-icons">arrow_back</i>
          </button>
        </div>

      </form>
    </div>
  </div>
  
</body>
</html>