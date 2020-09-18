<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<!--Menu de navegacion-->
<?php
session_start();
    require_once "../interface/iFile.php";
    require_once "../interface/iService.php";
    require_once "../Object/Candidato.php";
    require_once "../Object/Partidos.php";
    require_once "../Object/Ciudadano.php";
    require_once "../Object/Elecciones.php";
    require_once "../Object/PuestoElectivo.php";
    require_once "../Object/User.php";
    require_once "../FileHandler/file.php";
    require_once "../Logic/generalLogic.php";
    require_once "../Database/eleccionContext.php";
    require_once "../Service/dbService/partidoService.php";
    require_once "../Service/dbService/candidatoService.php";
    require_once "../Service/dbService/puestosService.php";
    require_once "../Service/dbService/eleccionesService.php";
    require_once "../Service/dbService/ciudadanoService.php";
    require_once "../Service/dbService/userService.php";
    session_start();
    $userSesion = new DatabaseServiceUser();
    $listUser = $userSesion->GetList();
    $user;
    
    foreach($listUser as $value){
      
      foreach($_SESSION['user'] as $value2){
        if($value->nombre == $value2){
          $user = $value->nombre;
        }
      }
    }
?>
<header class="logo">
    <div class="wrapper">
        <div class="logobox">
            <br>
            <h1 class="text-center">Admin</h1>
        </div>
        <nav class="menu">
            <?php if($_SESSION['user'] != null):?>
                <div class="float-right">
                    <br>
                    <a href="../../index.php">Modo Ciudadano</a>
                    <a href="update.php">Editar</a>
                    <a href="Eliminar.php">Eliminar</a>
                    <a href="addCandidato.php">Candidato</a>
                    <a href="agregarCiudadano.php">Ciudadano</a>
                    <a href="agregarElecciones.php">Eleciones</a>
                    <a href="agregarPartido.php">Partido</a>
                    <a href="agregarPuestos.php">Puestos</a>
                    <a href="opcionesUsuario.php">Usuario: <?php echo $user; ?></a>
                     
                <?php endif;?>
            </nav>
        </div>
    </div>
</header>