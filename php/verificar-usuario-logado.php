<?php
  session_start();
  if (!isset($_SESSION['usuario']))
      Header("location:pagina-login.php"); 
?>