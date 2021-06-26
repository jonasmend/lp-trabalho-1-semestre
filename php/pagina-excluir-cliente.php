<?php 
  include 'verificar-usuario-logado.php';
  include 'menu.php';
  $id = trim($_GET['id']);

  include 'conexao.php';
  $pdo = Conexao::conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'SELECT * FROM cliente WHERE id=?;';
  $query = $pdo->prepare($sql);
  $query->execute(array($id));

  $cliente = $query->fetch(PDO::FETCH_ASSOC);
  Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/pagina-editar-clientes.css">

  <title>Exluir Cliente</title>
</head>
<body>

  <div class="container-fluid col-12">
    <div class="text-center col-12" style="background-color: orange;">
      <h3>Exluir Cliente</h3>
    </div>
  </div>

  <div class="container">
    <div class="row form-group">
      <form action="remover-cliente.php" method="POST" id="remover-cliente" class="">

        <div class="row">
          <label for="lblId"><h4><blockquote>ID: <?php echo $id ?></blockquote></h4></label>
          <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">
        </div>
        <div class="row">
          <label for="lblNome"><h4><blockquote>Nome: <?php echo $cliente['nome'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblNascimento"><h4><blockquote>Nascimento: <?php echo $cliente['data_nascimento'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblCPF"><h4><blockquote>CPF: <?php echo $cliente['cpf'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblCEP"><h4><blockquote>CEP: <?php echo $cliente['cep'] ?></blockquote></h4></label>
        </div>
        <div class="row">
        <label for="lblRua"><h4><blockquote>Rua: <?php echo $cliente['rua'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblNumero"><h4><blockquote>Número: <?php echo $cliente['numero'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblBairro"><h4><blockquote>Bairro: <?php echo $cliente['bairro'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblComplemento"><h4><blockquote>Complemento: <?php echo $cliente['complemento'] ?></blockquote></h4></label>
        </div>
        
        <br>

        <div class="buttons input-field col-12">
          <button class="btn btn-danger" type="button" name="btnVoltar" onclick="JavaScript:location.href='pagina-clientes.php'">
            <i class="fas fa-arrow-circle-left"></i> Voltar
          </button>
          <button class="btn btn-success" type="submit" name="btnConfirmar">
            <i class="fas fa-check"></i> Confirmar
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