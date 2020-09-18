<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<!--Menu de navegacion-->
<?php 

require_once "elecciones/interface/iFile.php";
require_once "elecciones/interface/iService.php";
require_once "elecciones/Object/Candidato.php";
require_once "elecciones/Object/Partidos.php";
require_once "elecciones/Object/Elecciones.php";
require_once "elecciones/Object/PuestoElectivo.php";
require_once "elecciones/Object/User.php";
require_once "elecciones/FileHandler/file.php";
require_once "elecciones/Database/eleccionContext.php";
require_once "elecciones/Service/dbService/partidoService.php";
require_once "elecciones/Service/dbService/candidatoService.php";
require_once "elecciones/Service/dbService/puestosService.php";
require_once "elecciones/Service/dbService/eleccionesService.php";
require_once "elecciones/Service/dbService/ciudadanoService.php";
//srequire_once "elecciones/Object/Ciudadano.php";
require_once "elecciones/Service/dbService/userService.php";
session_start();

?>
<header class="logo">
    <div class="wrapper">
        <div class="logobox">
            <br>
            <h1 class="text-center">Bienvenido a su Sistema electoral</h1>
        </div>
        <nav class="menu">
            <div class="float-right">
                <br>
                <a href="utilities/Sesion.php?salio=1">Inicio</a>
                <?php if(!isset($_SESSION['votante'])):?>
                <a href="elecciones/pages/agregarUser.php">Modo Admin</a>
                <?php endif;?>
               
            </div>

        </nav>
    </div>
</header>