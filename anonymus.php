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
  require_once '../Sistemaelectoral/metodos/logic.php';
  require_once '../Sistemaelectoral/metodos/Dbase.php';
  require_once '../Sistemaelectoral/metodos/eleccion.php';
  session_start();
  $servicePartido = new DatabaseServicePartidos('elecciones/Database');
  $serviceCandidato = new DatabaseServiceCandidato('elecciones/Database');
  $servicePuesto = new DatabaseServicePuestos('elecciones/Database');
  $listCandidato = $serviceCandidato->GetList();
  $listPartidos = $servicePartido->GetList();
  $listPuesto = $servicePuesto->GetList();

  if(!isset($_SESSION['votante'])){
    header('Location: ../index');
  }
 
  if($_POST['id'] == 1){
    if(isset($_POST['voto'])){
      $_SESSION['eleccion']['presidente'] = $_POST['voto'];
    }
  }else if($_POST['id'] == 2){
    if(isset($_POST['voto'])){
      $_SESSION['eleccion']['regidor'] = $_POST['voto'];
    }
  } else if($_POST['id'] == 3){
    if(isset($_POST['voto'])){
      $_SESSION['eleccion']['diputado'] = $_POST['voto'];
    }
  }else if($_POST['id'] == 4){
    if(isset($_POST['voto'])){
      $_SESSION['eleccion']['senador'] = $_POST['voto'];
    }
  }else if($_POST['id'] == 5){
    if(isset($_POST['voto'])){
      $_SESSION['eleccion']['alcalde'] = $_POST['voto'];
    }
  }

  ?>
  <section class="acerca-de wrapper"></section>
  <div class="text-center">
    <h2 style="color: black;">candidatos disponibles</h2>

    <form action="anonymus.php" method="GET">
    <?php if($_SESSION['eleccion']['presidente'] == null): ?>
      <a href="anonymus.php?id=1" class="btn btn-default btn-dark">presidente</a>
    <?php endif;?>
    <?php if($_SESSION['eleccion']['regidor'] == null): ?>
      <a href="anonymus.php?id=2" class="btn btn-default btn-dark">regidor</a>
      <?php endif;?>
      <?php if($_SESSION['eleccion']['diputado'] == null): ?>
      <a href="anonymus.php?id=3" class="btn btn-default btn-dark">diputado</a>
      <?php endif;?>
      <?php if($_SESSION['eleccion']['senador'] == null): ?>
      <a href="anonymus.php?id=4" class="btn btn-default btn-dark">senador</a>
      <?php endif;?>
      <?php if($_SESSION['eleccion']['alcalde'] == null): ?>
      <a href="anonymus.php?id=5" class="btn btn-default btn-dark">alcalde</a>
      <?php endif;?>
      <br>
      <br>
      <br>
      <br>
    </form>
    <div>
      <hr>
        <form action="anonymus.php" method="post">
          <input type="text" value="<?php echo $_GET['id'];?>" name="id"hidden>
        <div class="container">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Partido</th>
              <th scope="col">Puesto</th>
              <th scope="col">Foto</th>
              <th scope="col">Estado</th>
              <th scope="col">votar</th>
              <th ><a href="../Sistemaelectoral/ninguno.php" class="btn btn-default btn-grad float-right">Voto nulo</a></th>
              <th scope="col"> <a href="enviarEmail.php" class="btn btn-default btn-grad float-right">Enviar su eleccion</a></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($listCandidato as $value): ?>
                <?php 
                $partido;
                $puesto;
                  foreach($listPartidos as $valuePartidos){
                    if($value->partido == $valuePartidos->id){
                      $partido  = $valuePartidos->nombre;
                      
                    }
                  }
                  foreach($listPuesto as $valuePuesto){
                    if($value->puesto == $valuePuesto->id){
                      $puesto  = $valuePuesto->nombre;
                      
                    }
                  }
                
                ?>
                <?php if($_GET['id'] == 1 && $puesto == 'presidente'):?>
            <tr>
              <td><?php echo  $value->id;?></td>
              <td><?php echo  $value->nombre;?></td>
              <td><?php echo  $value->apellido;?></td>
              <td><?php echo $partido;?></td>
              <td><?php echo  $puesto;?></td>
              <td><img src="<?php echo  $value->foto;?>" alt="" srcset=""></td>
              <td><?php echo $value->estado;?></td>
              <td><button type="submit" class="btn btn-primary" value="<?php echo $value->id;?>" name="voto">votar</button></td>
            </tr>
                <?php endif; ?>
                <!--  -->
                <?php if($_GET['id'] == 2 && $puesto == 'regidor'):?>
            <tr>
              <td><?php echo  $value->id;?></td>
              <td><?php echo  $value->nombre;?></td>
              <td><?php echo  $value->apellido;?></td>
              <td><?php echo  $partido;?></td>
              <td><?php echo  $puesto;?></td>
              <td><img src="<?php echo  $value->foto;?>" alt="" srcset=""></td>
              <td><?php echo $value->estado;?></td>
              <td><button type="submit" class="btn btn-primary" value="<?php echo $value->id;?>" name="voto">votar</button></td>
            </tr>
                <?php endif; ?>
                <!--  -->
                <?php if($_GET['id'] == 3 && $puesto == 'diputado'):?>
            <tr>
              <td><?php echo  $value->id;?></td>
              <td><?php echo  $value->nombre;?></td>
              <td><?php echo  $value->apellido;?></td>
              <td><?php echo $partido;?></td>
              <td><?php echo  $puesto;?></td>
              <td><img src="<?php echo  $value->foto;?>" alt="" srcset=""></td>
              <td><?php echo $value->estado;?></td>
              <td><button type="submit" class="btn btn-primary" value="<?php echo $value->id;?>" name="voto">votar</button></td>
            </tr>
                <?php endif; ?>
                <!--  -->
                <?php if($_GET['id'] == 4 && $puesto == 'senador'):?>
            <tr>
              <td><?php echo  $value->id;?></td>
              <td><?php echo  $value->nombre;?></td>
              <td><?php echo  $value->apellido;?></td>
              <td><?php echo $partido;?></td>
              <td><?php echo  $puesto;?></td>
              <td><img src="<?php echo  $value->foto;?>" alt="" srcset=""></td>
              <td><?php echo $value->estado;?></td>
              <td><button type="submit" class="btn btn-primary" value="<?php echo $value->id;?>" name="voto">votar</button></td>
            </tr>
                <?php endif; ?>
                <!--  -->
                <?php if($_GET['id'] == 5 && $puesto == 'alcalde'):?>
            <tr>
              <td><?php echo  $value->id;?></td>
              <td><?php echo  $value->nombre;?></td>
              <td><?php echo  $value->apellido;?></td>
              <td><?php echo $partido;?></td>
              <td><?php echo  $puesto;?></td>
              <td><img src="<?php echo  $value->foto;?>" alt="" srcset=""></td>
              <td><?php echo $value->estado;?></td>
              <td><button type="submit" class="btn btn-primary" value="<?php echo $value->id;?>" name="voto">votar</button></td>
            </tr>
                <?php endif; ?>
                <!--  -->
            <?php endforeach;?>
          </tbody>
        </table>
        

        <!--  -->
  </div>
      </form>

      <?php
      include '../Sistemaelectoral/utilities/footer.php';
      ?>


      </footer>

</body>

</html>