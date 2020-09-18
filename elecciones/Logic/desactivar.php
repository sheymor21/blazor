<?php 
session_start();
unset($_SESSION['eleccion']['estado']);
header('Location: ../index.php');
exit();


?>