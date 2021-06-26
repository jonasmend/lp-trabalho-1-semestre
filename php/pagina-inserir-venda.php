<?php
  include 'menu.php';

  include 'conexao.php';
  $pdo = Conexao::conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sqlProd = 'SELECT * FROM produto ORDER BY descricao';
  $listaProdutos = $pdo->query($sqlProd);
  $sqlCli = 'SELECT * FROM cliente ORDER BY NOME';
  $listaClientes = $pdo->query($sqlCli);
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

  <link rel="stylesheet" href="../css/pagina-inserir-vendas.css">
</head>
<body>

  <div class="container-fluid col-12">
    <div class="text-center col-12" style="background-color: orange;">
      <h3>Nova Venda</h3>
    </div>
  </div>
  <div class="container">
    <div class="row form-group">
      <form action="inserir-venda.php" method="POST" id="formulario-venda" class="">
        
        <div class="input-field col-6">
          <label for="lblDescricao">Selecione o Cliente</label>
          <!--input type="text" class="form-control" id="txtDescricao" name="txtDescricao" required-->
          <select class="form-select" id="slcCliente" name="slcCliente">
            <option value="" disabled selected>Escolha o Cliente</option>
            <?php 
              foreach($listaClientes as $cliente) { ?>
                  <option value="<?php echo $cliente['id']?>"><?php echo $cliente['nome'] ?></option>
              <?php } ?>
          </select>
        </div>
        <div class="input-field col-6">
          <label for="lblDescricao">Selecione o Produto</label>
          <!--input type="text" class="form-control" id="txtDescricao" name="txtDescricao" required-->
          <select class="form-select" id="slcProduto" name="slcProduto">
            <option value="" disabled selected>Escolha o Produto</option>
            <?php 
              foreach($listaProdutos as $produto) { ?>
                  <option value="<?php echo $produto['id']?>"><?php echo $produto['descricao'] ?></option>
              <?php } ?>
          </select>
        </div>
        <div class="row input-field">
          <div class="col-6">
            <label for="lblEstoque">Informe a quantidade: </label>
            <input type="number" class="form-control" id="txtQuantidade" name="txtQuantidade" pattern="[0-9]{3}" placeholder="Ex: 014" required>
          </div>
        </div>
        
        <br>

        <div class="buttons input-field col-12">
          <button class="btn btn-danger" type="button" name="btnVoltar" onclick="JavaScript:location.href='pagina-vendas.php'">
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