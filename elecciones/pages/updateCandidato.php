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
  <!-- Bootstrap CSS -->

</head>

<body>
  <?php
  include 'header.php';
  $servicesPartidos = new DatabaseServicePartidos();
  $servicesPuestos = new DatabaseServicePuestos();
  $servicesCandidatos = new DatabaseServiceCandidato();
  $serviceUser = new DatabaseServiceUser();
  $listUser = $serviceUser->GetList();
  $listPuestos = $servicesPuestos->GetList();
  $listPartidos = $servicesPartidos->GetList();
  $logic = new logic();
  $logic->tramposo();
  $listCandidatos = $servicesCandidatos->GetList();
  $Candidato = new candidato();
  foreach ($listCandidatos as $value) {
    if ($_GET['id'] == $value->id) {
      $Candidato->id = $value->id;
      $Candidato->nombre = $value->nombre;
      $Candidato->apellido = $value->apellido;
      $Candidato->partido = $value->partido;
      $Candidato->puesto = $value->puesto;
      $Candidato->foto = $value->foto;
      $Candidato->estado = $value->estado;
    }
  }

  if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['partido']) && isset($_POST['puesto']) && isset($_FILES['photo'])) {
    $updateCandidato = new candidato();
    $updateCandidato->initialize($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['puesto'], $_POST['partido'], $_FILES['photo'], $_POST['estado']);
    $servicesCandidatos->Update($_POST['id'], $updateCandidato);
    header('Location: update.php?id=2');
    exit();
  }
  ?>
  <div class="estilo">
    <form action="updateCandidato.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" class="form-control" name="id" value="<?php echo $Candidato->id; ?>" hidden>

        <label for="">Nombre</label>
        <input type="text" class="form-control" id="" aria-describedby="helpId" placeholder="" name="nombre" value="<?php echo $Candidato->nombre; ?>">

        <label for="">Apellido</label>
        <input type="text" class="form-control" id="" aria-describedby="helpId" placeholder="" name="apellido" value="<?php echo $Candidato->apellido; ?>">

        <label for="">Partido</label>
        <select class="form-control" name="partido">
          <option value="0">Elegir</option>
          <?php foreach ($listPartidos as $value) : ?>
            <option value="<?php echo $value->id; ?>"><?php echo $value->nombre; ?></option>
          <?php endforeach; ?>
        </select>

        <label for="">Puesto</label>
        <select class="form-control" name="puesto">
          <option value="0">Elegir</option>
          <?php foreach ($listPuestos as $value) : ?>
            <option value="<?php echo $value->id; ?>"><?php echo $value->nombre; ?></option>
          <?php endforeach; ?>
        </select>

        <label for="">Foto</label>
        <input type="file" class="form-control" id="" aria-describedby="helpId" placeholder="" name="photo" value="<?php $Candidato->foto; ?>" width="200px" height="200px">

        <?php if ($Candidato->estado == 'activo') : ?>
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


        <button type="submit" name="submit" id="" class="btn btn-primary mt-3">Editar</button>

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