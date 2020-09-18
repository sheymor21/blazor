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
  $services = new DatabaseServiceCiudadano();
  $logic = new logic();
  $logic->tramposo();
  $listCiudadano = $services->GetList();
  $ciudadano = new ciudadano();
  foreach ($listCiudadano as $value) {
    if ($_GET['id'] == $value->id) {
      $ciudadano->id = $value->id;
      $ciudadano->nombre = $value->nombre;
      $ciudadano->apellido = $value->apellido;
      $ciudadano->documento = $value->documento;
      $ciudadano->email = $value->email;
      $ciudadano->estado = $value->estado;
    }
  }

  if (isset($_POST['documento']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email'])) {
    $updateCiudadano = new ciudadano();
    $updateCiudadano->initialize($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['documento'], $_POST['email'], $_POST['estado']);
    $services->Update($_POST['id'], $updateCiudadano);
    header('Location: update.php?id=3');
    exit();
  }
  ?>
  <div class="estilo">
    <form action="updateCiudadano.php" method="POST">

      <input type="text" class="form-control" name="id" value="<?php echo $ciudadano->id; ?>" hidden>

      <div class="form-group">
        <label for="">Documento</label>
        <input type="text" class="form-control" id="" aria-describedby="helpId" placeholder="" name="documento" value="<?php echo $ciudadano->documento ?>">

        <label for="">Nombre</label>
        <input type="text" class="form-control" id="" aria-describedby="helpId" placeholder="" name="nombre" value="<?php echo $ciudadano->nombre ?>">

        <label for="">Apellido</label>
        <input type="text" class="form-control" id="" aria-describedby="helpId" placeholder="" name="apellido" value="<?php echo $ciudadano->apellido ?>">

        <div class="form-group">
          <label for="exampleInputEmail1">Correo Electronico</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $ciudadano->email ?>">
        </div>
        <?php if ($ciudadano->estado == 'activo') : ?>
          <div class="row">
            <div class="col">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="estado" class="custom-control-input" value="activo" checked>
                <label class="custom-control-label" for="customRadio1">activo</label>
              </div>
            </div>

            <div class="col">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="estado" class="custom-control-input" value="inactivo">
                <label class="custom-control-label" for="customRadio2">Inactivo</label>
              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="row">
            <div class="col">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="estado" class="custom-control-input" value="activo">
                <label class="custom-control-label" for="customRadio1">activo</label>
              </div>
            </div>

            <div class="col">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="estado" class="custom-control-input" value="inactivo" checked>
                <label class="custom-control-label" for="customRadio2">Inactivo</label>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <button type="submit" name="submit" id="" class="btn btn-primary">enviar</button>

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