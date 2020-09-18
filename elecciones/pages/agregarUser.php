<!doctype html>
<html lang="en">
  <head>
  <title>elecciones</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <?php
    include 'header.php';
     session_start();
     $usuario = new user();
     $service = new DatabaseServiceUser();
     $mensaje = false;
     $message = false;
     $advertencia = new logic();
     if(!isset($_SESSION['votante'])){

      $advertencia->volverLogin();
      if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
        $result = $service->Login($_POST['usuario'],$_POST['contraseña']);

        if($result != null){
          $_SESSION['user'] = $result;
          header('Location: ../index.php');
          exit();
        }else{
          $mensaje = true;
        }
        
      }

     }else{
      $message = true;
      header('Location: ../../anonymus');
     }
    
    ?>
    <?php if($mensaje):?>
      <?php $advertencia->Incorrect();?>
    <?php endif; ?>
      <div class="estilo">
      <img src="img/login2.png" alt="" width="100px" class="login">
        <form action="agregarUser.php" method="POST">
        <div class="row">
            <div class="col">
            <a name="" id="" class="btn btn-default btn-gradd btn-block text-white" href="../../index.php">volver</a>
            </div>
            <div class="col">
            <a name="" id="" class="btn btn-default btn-gradd btn-block text-white ml-3" href="RegistroUser.php">Registrarse</a>
            </div>
          </div>
        <div class="float-right">
                <br>
            </div>
            <label>Usuario</label>
            <input class="form-control" placeholder="Introduzca su usuario" name="usuario">

            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" placeholder="Password" name="contraseña">
            <br>

            <div class="text-center">
                <button class="btn btn-default btn-grad btn-lg btn-block text-white" type="submit">Iniciar seccion</button>
            </div>
            
        </form>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
        include 'footer.php';
        ?>
        <script>
          $('#incorrecto').modal('show');

        </script>
        <?php if($message): ?>
        <script> alert("Hay una eleccion en progreso");</script>
        <?php endif;?>
  </body>
</html>