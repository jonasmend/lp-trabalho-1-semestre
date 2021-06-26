<?php 

  $usuario = trim($_POST['usuario']); 
  $senha = md5(trim($_POST['senha']));

  include 'conexao.php';
  $pdo = Conexao::conectar();
  $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM usuario WHERE login LIKE ?;";
  $query = $pdo->prepare($sql);
  $query->execute(array($usuario));
  $user = $query->fetch(PDO::FETCH_ASSOC);
  Conexao::desconectar();

  if ($user['senha']==$senha){  // verificar autorização

    session_start();
    $_SESSION['usuario'] = $usuario; 
    $_SESSION['nome'] = $user['nome'];
    Header("location:pagina-clientes.php");
  } else {
    Header("location:pagina-login.php");
  }

?>