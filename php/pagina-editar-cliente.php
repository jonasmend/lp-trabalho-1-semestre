<?php
  include 'verificar-usuario-logado.php';
  include 'menu.php';
  include 'conexao.php';

  $id = $_GET['id'];

  $pdo = Conexao::conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'SELECT * FROM cliente WHERE id=?;';
  $query = $pdo->prepare($sql);
  $query->execute(array($id));

  $dados = $query->fetch(PDO::FETCH_ASSOC);

  $nome = $dados['nome'];
  $data_nascimento = $dados['data_nascimento'];
  $cpf = $dados['cpf'];
  $cep = $dados['cep'];
  $rua = $dados['rua'];
  $bairro = $dados['bairro'];
  $numero = $dados['numero'];
  $complemento = $dados['complemento'];

  Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/pagina-editar-clientes.css">

  <title>Editar Cliente</title>
</head>
<body>
  
  <div class="container-fluid col-12">
    <div class="text-center col-12" style="background-color: orange;">
      <h3>Editar Cliente</h3>
    </div>
  </div>
  <div class="container">
    <div class="row form-group">
      <form action="editar-cliente.php" method="POST" id="formulario-cliente" class="">

        <div class="row input-field">
          <div class="col-2">
            <label for="lblId">ID do cliente</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $id;?>" readonly>
          </div>
          <div class="col-10">
            <label for="lblNome">Informe o nome do cliente</label>
            <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?php echo $nome?>">
          </div>
        </div>
        <div class="row input-field">
          <div class="col-6">
            <label for="lblCPF">Informe o CPF: </label>
            <input type="text" class="form-control" id="txtCPF" name="txtCPF" value="<?php echo $cpf?>">
          </div>
          <div class="col-6">
            <label for="lblNascimento">Informe a data de nascimento: </label>
            <input type="text" class="form-control" id="txtNascimento" name="txtNascimento" value="<?php echo $data_nascimento?>">
          </div>
        </div>
        <div class="row input-field">
          <div class="col-5">
            <label for="lblCEP">Informe o CEP: </label>
            <input type="text" class="form-control" id="txtCEP" name="txtCEP" value="<?php echo $cep?>">
          </div>
          <div class="col-5">
            <label for="lblRua">Informe a Rua: </label>
            <input type="text" class="form-control" id="txtRua" name="txtRua" value="<?php echo $rua?>">
          </div>
          <div class="col-2">
            <label for="lblNumero">Informe a Número: </label>
            <input type="number" class="form-control" id="txtNumero" name="txtNumero" value="<?php echo $numero?>">
          </div>
        </div>
        <div class="row input-field">
          <div class="col-5">
            <label for="lblBairro">Informe a Bairro: </label>
            <input type="text" class="form-control" id="txtBairro" name="txtBairro" value="<?php echo $bairro?>">
          </div>
          <div class="col-7">
            <label for="lblComplemento">Informe a Complemento: </label>
            <input type="text" class="form-control" id="txtComplemento" name="txtComplemento" value="<?php echo $complemento?>">
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