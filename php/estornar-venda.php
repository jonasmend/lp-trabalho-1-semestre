<?php

  $id = trim($_POST['id']);
  
  if(!empty($id)){
    include 'conexao.php';
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlVend = "SELECT * FROM venda WHERE id=?";
    $queryVend = $pdo->prepare($sqlVend);
    $queryVend->execute(array($id));
    $venda = $queryVend->fetch(PDO::FETCH_ASSOC);
    $id_produto = $venda['id_produto'];
    
    $sqlProd = "SELECT * FROM produto WHERE id=?";
    $queryProdSel = $pdo->prepare($sqlProd);
    $queryProdSel->execute(array($id_produto));
    $produto = $queryProdSel->fetch(PDO::FETCH_ASSOC);
    $novoEstoque = $produto['estoque'] + $venda['quantidade'];

    $sqlProduto = "UPDATE produto SET estoque=? WHERE id=?";
    $queryProduto = $pdo->prepare($sqlProduto);
    $queryProduto->execute(array($novoEstoque, $produto['id']));

    $sql = 'DELETE FROM venda WHERE id=?';
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar();
  }
  else echo "Campo ID_PRODUTO vazio!";
  
  header("location: pagina-vendas.php");
?>