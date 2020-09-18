<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de voto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!--Menu de navegacion-->
    <?php
    include '../Sistemaelectoral/utilities/header.php';
    require_once '../Sistemaelectoral/database/fileHandler/context.php';;
    require_once '../Sistemaelectoral/metodos/logic.php';
    $service = new DatabaseServiceCiudadano('elecciones/Database');
    $logic = new logic();
    $message = false;

    if(isset($_SESSION['votante'])){
        header('Location: anonymus.php');
    }
    
    if(isset($_POST['cedula'])){
        if($_SESSION['eleccion']['estado'] != 'activa' || $_SESSION['eleccion']['estado'] == null){
            $message = true;
        }else{
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
             $usuario = $service->buscar($_POST['cedula']);
             $_SESSION['votante'] = $usuario;
             if($usuario != null){
                 header('Location: anonymus.php');
                 exit();
             }
            }
            if($_SESSION['eleccion']=='Undefined index'){
               echo "no hay elecciones activas";
            }
        }
    }
    ?>
   <!--  -->
   <?php if($message):?>
   <div class="modal fade" id="modal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ha cometido un error</h5>
                         
                </div>
             <div class="modal-body">
             <h5>En este momento no hay elecciones activas, porfavor cree eleccion</h5>
             </div>
                <div class="modal-footer">
                   
                    </div>
                </div>
            </div>
        </div>
   <?php endif;?>
   <!--  -->
    <section class="acerca-de wrapper"></section>

    <div class="info-container">

        <h1 class="text-center" id="voto">Tu voto en las mejores manos</h1>

        <div class="text-center">
            <br>
            <img src="img/elecciones2020.jpg" alt="elecciones2020">

        </div>
        <div class="partidos text-center">
            <br>
            <form action="index.php" method="post">
            <input class="login" type="text" name="cedula" class="form-control" required placeholder="Ingrese su cedula">
            <br>
            <button type="submit" class="btn btn-default btn-dark">Obtener acceso para votar</button>
            </form>
            <br>
            
        </div>
    </div>
    </div>

    </section>
    </main>

    <!--Footer-->

    <div>
        <hr>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <?php
        include '../Sistemaelectoral/utilities/footer.php';
        ?>
    </div>
    </div>

    </div>

    </footer>

</body>
</html>