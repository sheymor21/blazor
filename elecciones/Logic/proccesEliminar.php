<?php 
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
$servicePartido = new DatabaseServicePartidos();
$serviceCandidato = new DatabaseServiceCandidato();
$serviceCiudadano = new DatabaseServiceCiudadano();
$servicePuesto = new DatabaseServicePuestos();

$isId = isset($_POST['id']);
$isElque = isset($_GET['que']);


if($isElque){
    $elque = $_GET['que'];
    if($isId){
        $id = $_POST['id'];

        if($elque == 1){
            $servicePartido->Delete($id);
        } else if($elque == 2){
            $serviceCandidato->Delete($id);
        } else if($elque == 3){
            $serviceCiudadano->Delete($id);
        }else if($elque == 4){
            $servicePuesto->Delete($id);
        }
        $direccion = 'Location: ../pages/Eliminar.php?id='.$elque;
        header($direccion);
        exit();
    }
    header('Location: ../index.php');
    exit();
}

?>