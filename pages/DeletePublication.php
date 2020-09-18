<?php
    require_once "../interfaces/iService.php";
    require_once "../interfaces/iFile.php";
    require_once "../Logic/FileHandler/file.php";
    require_once "../Database/UserContext.php";
    require_once "../Logic/logic.php";
    require_once "../Logic/DBService/DBServicesUser.php";
    require_once "../Logic/DBService/DBServicesPublicaciones.php";
    require_once "../User/user.php";
    require_once "../User/publicaciones/publicaciones.php";

$servicio = new DatabaseServicePublicaciones();

$isId = isset($_GET['eliminarId']);

if($isId){
    $publicationId = $_GET['eliminarId'];
    $servicio->Delete($publicationId);
}
header("Location: viewPublications.php");
exit();

?>