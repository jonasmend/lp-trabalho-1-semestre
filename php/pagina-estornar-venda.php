<?php 
  include 'menu.php';
  $id = trim($_GET['id']);

  include 'conexao.php';
  $pdo = Conexao::conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'SELECT * FROM venda AS v INNER JOIN produto AS p ON (v.id_produto=p.id) INNER JOIN cliente AS c ON (v.id_cliente=c.id) WHERE v.id=?';
  $query = $pdo->prepare($sql);
  $query->execute(array($id));

  $venda = $query->fetch(PDO::FETCH_ASSOC);
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

  <title>Estornar Venda</title>
</head>
<body>

  <div class="container-fluid col-12">
    <div class="text-center col-12" style="background-color: orange;">
      <h3>Estornar Venda</h3>
    </div>
  </div>

  <div class="container">
    <div class="row form-group">
      <form action="estornar-venda.php" method="POST" id="estornar-venda" class="">

        <div class="row">
          <label for="lblId"><h4><blockquote>ID: <?php echo $id ?></blockquote></h4></label>
          <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">
        </div>
        <div class="row">
          <label for="lblProduto"><h4><blockquote>Produto: <?php echo $venda['descricao'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblCliente"><h4><blockquote>Cliente: <?php echo $venda['nome'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblQuantidade"><h4><blockquote>Quantidade: <?php echo $venda['quantidade'] ?></blockquote></h4></label>
        </div>
        <div class="row">
          <label for="lblTotal"><h4><blockquote>Total: <?php echo $venda['valor_venda'] ?></blockquote></h4></label>
        </div>
        
        <br>
        <div class="text-center">
          <h5>Certeza que deseja estornar a venda?</h5>
        </div>
        <br>

        <div class="buttons input-field col-12">
          <button class="btn btn-danger" type="button" name="btnVoltar" onclick="JavaScript:location.href='pagina-vendas.php'">
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