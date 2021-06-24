<?php
  include 'conexao.php';

  $id = trim($_POST['id']);
  $nome = trim($_POST['txtNome']);
  $cpf = trim($_POST['txtCPF']);
  $data_nascimento = trim($_POST['txtNascimento']);
  $cep = trim($_POST['txtCEP']);
  $rua = trim($_POST['txtRua']);
  $numero = trim($_POST['txtNumero']);
  $bairro = trim($_POST['txtBairro']);
  $complemento = trim($_POST['txtComplemento']);

  if(!empty($nome) && !empty($cpf) && !empty($cep) && !empty($data_nascimento) && !empty($rua) && !empty($numero) && !empty($bairro)){
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE cliente SET nome=?, cpf=?, data_nascimento=?, cep=?, rua=?, bairro=?, numero=?, complemento=? WHERE id=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $cpf, $data_nascimento, $cep, $rua, $bairro, $numero, $complemento, $id));
    Conexao::desconectar();
  }
  else echo "Há campos vazios que precisam ser preenchidos!";
  
  header("location: pagina-clientes.php");
?>