<!doctype html>
<html lang="en">
  <head>
  <title>elecciones</title>
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
      $service = new DatabaseServiceElecciones();
      $logic = new logic();
      $logic->tramposo();
      $tiempo = date('y-m-d h:i:s');
      if(isset($_POST['elecciones'])){
        $newEleccion = new elecciones();
        $newEleccion->initialize(1,$_POST['elecciones'],$tiempo);
        $_SESSION['eleccion']['estado'] = 'activa';
        $service->Add($newEleccion);
        header('Location: ../index.php');
        exit();
      }
    ?>
  <div class="estilo">
    <form action="agregarElecciones.php" method="post">
      <label for=""> Nombre de la eleccion</label>
      <input class="form-control" type="text" placeholder="ingrese nombre de la eleccion" name="elecciones">
       <div class="row">
         <div class="col">
         <button type="submit" name="submit" id="" class="btn btn-primary mt-2">Activar eleccion</button>
         </div>
         <div class="col">
         <a class="btn btn-primary mt-2" href="../Logic/desactivar.php" role="button">Desactivar elecciones</a>
         </div>
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
  </body>
</html>