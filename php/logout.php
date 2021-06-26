  
<?php
    session_start();

    unset($_SESSION['usuario']); 
    unset($_SESSION['nome']); 

    Header("Location:pagina-login.php"); 
?>