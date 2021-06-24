<?php
  include 'conexao.php';

  $id = trim($_POST['id']);
  $descricao = trim($_POST['txtDescricao']);
  $estoque = trim($_POST['txtEstoque']);
  $preco = trim($_POST['txtPreco']);

  if(!empty($descricao) && !empty($estoque) && !empty($preco) && !empty($id)){
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE produto SET descricao=?, estoque=?, preco=? WHERE id=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array($descricao, $estoque, $preco, $id));
    Conexao::desconectar();
  }
  else echo "Há campos vazios que precisam ser preenchidos!";
  
  header("location: pagina-produtos.php");
?>