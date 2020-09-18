<?php 
if($_GET['salio'] == 1){
    session_start();
    unset($_SESSION['votante']);
    header('Location: ../index.php');
    exit();
}


?>