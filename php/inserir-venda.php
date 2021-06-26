<?php
  include 'conexao.php';

  $id_produto = trim($_POST['slcProduto']);
  $id_cliente = trim($_POST['slcCliente']);
  $quantidade = trim($_POST['txtQuantidade']);

  if(!empty($id_cliente) && !empty($id_produto) && !empty($quantidade)){
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlProd = "SELECT * FROM produto WHERE id=?";
    $queryProdSel = $pdo->prepare($sqlProd);
    $queryProdSel->execute(array($id_produto));
    $produto = $queryProdSel->fetch(PDO::FETCH_ASSOC);
    $estoque = $produto['estoque'];
    $novoEstoque = $estoque - $quantidade;
    
    if(!empty($produto) && $novoEstoque >=0) {
      $sqlProduto = "UPDATE produto SET estoque=? WHERE id=?";
      $queryProduto = $pdo->prepare($sqlProduto);
      
      $queryProduto->execute(array($novoEstoque, $produto['id']));

      $sql = "INSERT INTO venda (quantidade, valor_produto, valor_venda, id_cliente, id_produto) VALUES (?, ?, ?, ?, ?)";
      $query = $pdo->prepare($sql);
      $query->execute(array($quantidade, $produto['preco'], $produto['preco']*$quantidade, $id_cliente, $id_produto));
    }
    
    Conexao::desconectar();
  }
  else echo "Há campos vazios que precisam ser preenchidos!";
  
  header("location: pagina-vendas.php");
?>