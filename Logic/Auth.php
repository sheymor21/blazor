<?php
session_start();

if(isset($_SESSION['user'])){

    if($_SESSION['user'] == null){
        $_SESSION['message'] = "Esto es Ilegar";
        header('Location: ../User/login.php');
        exit();
    }

}else{
    if($_SESSION['user'] == null){
        $_SESSION['message'] = "Esto es Ilegar";
        header('Location: ../User/login.php');
        exit();
    }
}



?>