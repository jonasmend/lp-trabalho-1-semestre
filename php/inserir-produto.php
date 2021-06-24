<?php
  include 'conexao.php';

  $descricao = trim($_POST['txtDescricao']);
  $estoque = trim($_POST['txtEstoque']);
  $preco = trim($_POST['txtPreco']);

  if(!empty($descricao) && !empty($estoque) && !empty($preco)){
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO produto (descricao, estoque, preco) VALUES (?, ?, ?);";
    $query = $pdo->prepare($sql);
    $query->execute(array($descricao, $estoque, $preco));
    Conexao::desconectar();
  }
  else echo "Há campos vazios que precisam ser preenchidos!";
  
  header("location: pagina-produtos.php");
?>