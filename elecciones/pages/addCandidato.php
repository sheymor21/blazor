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

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['partido']) && isset($_POST['puesto']) && isset($_FILES['photo'])){
      $newCandidato = new candidato();
      $newCandidato->initialize(1,$_POST['nombre'],$_POST['apellido'],$_POST['puesto'],$_POST['partido'],$_FILES['photo']);
      $servicesCandidatos->Add($newCandidato);
      header('Location: ../index.php');
      exit();
    }
    ?>
  <div class="estilo">
      <form action="addCandidato.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text"
          class="form-control"  id="" aria-describedby="helpId" placeholder="" name="nombre">
  
          <label for="">Apellido</label>
          <input type="text"
          class="form-control"  id="" aria-describedby="helpId" placeholder="" name="apellido">

          <label for="">Partido</label>
          <select class="form-control" name="partido">
          <option value="0">Elegir</option>
            <?php foreach($listPartidos as $value):?>
             <option value="<?php echo $value->id;?>"><?php echo $value->nombre; ?></option>
            <?php endforeach; ?>
          </select>

          <label for="">Puesto</label>
          <select class="form-control" name="puesto">
          <option value="0">Elegir</option>
          <?php foreach($listPuestos as $value):?>
             <option value="<?php echo $value->id;?>"><?php echo $value->nombre; ?></option>
            <?php endforeach; ?>
          </select>

          <label for="">Foto</label>
          <input type="file"
          class="form-control" id="" aria-describedby="helpId" placeholder="" name="photo">

          <button type="submit" name="submit" id="" class="btn btn-primary mt-3">enviar</button>
     
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