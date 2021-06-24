<?php

  $id = trim($_POST['id']);
  
  if(!empty($id)){
    include 'conexao.php';
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'DELETE FROM cliente WHERE id=?';
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar();
  }
  else echo "Campo ID vazio!";
  
  header("location: pagina-clientes.php");
?>