<!doctype html>
<html lang="en">
  <head>
    <title>elecciones</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    
  </head>
  <body>
    <?php 
    session_start();
    require_once "interface/iFile.php";
    require_once "interface/iService.php";
    require_once "Object/Candidato.php";
    require_once "Object/Partidos.php";
    require_once "Object/Ciudadano.php";
    require_once "Object/Elecciones.php";
    require_once "Object/PuestoElectivo.php";
    require_once "Object/User.php";
    require_once "FileHandler/file.php";
    require_once "Logic/generalLogic.php";
    require_once "Database/eleccionContext.php";
    require_once "Service/dbService/partidoService.php";
    require_once "Service/dbService/candidatoService.php";
    require_once "Service/dbService/puestosService.php";
    require_once "Service/dbService/eleccionesService.php";
    require_once "Service/dbService/ciudadanoService.php";
    require_once "Service/dbService/userService.php";
    $userSesion = new DatabaseServiceUser('Database');
    $listUser = $userSesion->GetList();
    $user;
    
    foreach($listUser as $value){
      
      foreach($_SESSION['user'] as $value2){
        if($value->nombre == $value2){
          $user = $value->nombre;
        }
      }
    }
    if($_SESSION['user'] == null){
      header('Location: pages/agregarUser.php');
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
                    <a href="../index.php">Modo Ciudadano</a>
                    <a href="pages/update.php">Editar</a>
                    <a href="pages/Eliminar.php">Eliminar</a>
                    <a href="pages/addCandidato.php">Candidato</a>
                    <a href="pages/agregarCiudadano.php">Ciudadano</a>
                    <a href="pages/agregarElecciones.php">Eleciones</a>
                    <a href="pages/agregarPartido.php">Partido</a>
                    <a href="pages/agregarPuestos.php">Puestos</a>
                    <a href="pages/opcionesUsuario.php">Usuario: <?php echo $user; ?></a>
                     
                <?php endif;?>
            </nav>
        </div>
    </div>
</header>
<?php if(isset($_SESSION['eleccion']['estado'])):?>
  <div class="alert alert-success" role="alert">
  Hay una eleccion activa
</div>
<?php endif;?>
    <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Footer -->
    <footer class="page-footer footer" >
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">&copy;Indiana Lora & José Armando~~ Todos los derechos reservados.
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </body>
</html>