<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>menu</title>
  </head>
  <body>
  
  <?php require_once 'layaut/navbars.php';
        require_once 'logic.php';
        require_once 'pages/estudiantes.php';
       require_once 'ServiceBasic/iService.php';
       require_once 'pages/estudentService.php';

       $logic = new logic();
     $sevicios = new estudentService();

    $listEstudiante = $sevicios->GetList();
      if(isset($_GET['carreraId'])){
      
        $listEstudiante = $logic->filtrado($listEstudiante,'carrera',$_GET['carreraId']);
          
        }
        
  ?> 
    <?php 
        $layaut = new navbar();
        $layaut->nav();
    ?>
    <div class="container pt-5">
      <h3 class="bg-dark text-light py-2 pl-1 text-center" style="margin-right:52%;">Lista de estudiantes</h3>
     <div class="btn-group mb-1">
      <a href="index.php" class="btn btn-dark text-ligh">Todos</a>
       <a href="index.php?carreraId=Software" class="btn btn-dark text-ligh">Software</a>
       <a href="index.php?carreraId=Multimedia" class="btn btn-dark text-ligh" >Multimedia</a>
       <a href="index.php?carreraId=Mecatronica" class="btn btn-dark text-ligh">Mecatronica</a>
       <a href="index.php?carreraId=Seguridad informatica" class="btn btn-dark text-ligh">Seguridad</a>
       <a href="index.php?carreraId=Redes" class="btn btn-dark text-ligh">Redes</a>
     </div>
      <div class="row">
        <?php foreach($listEstudiante as $value):?>
        <div class="col-md-4">
        <div class="card mb-3 border-dark bg-dark" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body ">
        <h5 class="card-title text-white-50"><?php echo "Nombre: ".$value->nombre." ".$value->apellido; ?></h5>
        <h5 class="card-text text-white-50"><?php echo "Carrera: ".$value->carrera?></h5>
        <!--  -->
        <?php if($value->estatus == 'activo'):?>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked disabled>
              <label class="form-check-label text-success" for="defaultCheck1">Activo</label>
            </div></td>
          <?php elseif($value->estatus == 'inactivo'):?>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"  disabled>
              <label class="form-check-label text-danger" for="defaultCheck1">Inactivo</label>
            </div></td>
          <?php endif; ?>
        <!--  -->
      </div>
    </div>
    <a type="button" class="btn btn-outline-primary text-primary" style="margin-right: 20%;" href="<?php echo "pages/editar.php?editarId={$value->id}";?>">Editar</a>
    <a type="button" class="btn btn-outline-info mr-5 text-info disabled" href="<?php echo "pages/detalles.php?detalleId={$value->id}";?>">Detalles</a>
    <a type="button" class="btn btn-outline-danger ml-2 text-danger" href="<?php echo "eliminar.php?eliminarId={$value->id}";?>">Borrar</a>
    
  </div>
  
</div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
    
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="js/bootstrap.min.js"></script>
  </body>
</html>