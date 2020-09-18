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
    $logic = new logic();
    $servicePartido = new DatabaseServicePartidos();
    $serviceCiudadano = new DatabaseServiceCiudadano();
    $servicePuesto = new DatabaseServicePuestos();
    $serviceCandidato = new DatabaseServiceCandidato();

    $listPartidos = $servicePartido->GetList();
    $listCiudadano = $serviceCiudadano->GetList();
    $listCandidato = $serviceCandidato->GetList();
    $listPuesto = $servicePuesto->GetList();
    ?>
  <div class="estilo">
    <form action="../Logic/proccesEliminar.php?id =<?php echo $_POST['id'];?>&&que=<?php echo $_GET['id'];?>" method="post">
    <label for="">Que desea eliminar?</label>
        <?php $logic->listButtons($_GET['id'],'eliminar');?>
      <label for="">Coloca id de lo que desea eliminar</label>
        <div class="row">
            <div class="col">
            <input type="text"
          class="form-control"  id="" aria-describedby="helpId" placeholder="" name="id">
            </div>
            <div class="col">
                <button type="submit" name="" id="" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </form>
  </div>
  <!--  -->
  <div class="container">
    <?php if($_GET['id'] == 1):?>
   <table class="table">
      <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Logo</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($listPartidos as $value):?>
             <tr>
               <td><?php echo $value->id;?></td>
               <td><?php echo $value->nombre;?></td>
               <td><?php echo $value->descripcion;?></td>
               <td><img src="<?php echo $value->logo;?>" alt="" srcset="" width="200px" height="200px"></td>
               <td><?php echo $value->estado;?></td>
              </tr>
            <?php endforeach;?>
            </tbody>
          </table>
          <!--  -->
          <?php endif; ?>
        <?php if($_GET['id'] == 2): ?>
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
            <tr>
              <td><?php echo  $value->id;?></td>
              <td><?php echo  $value->nombre;?></td>
              <td><?php echo  $value->apellido;?></td>
              <td><?php echo $partido;?></td>
              <td><?php echo  $puesto;?></td>
              <td><img src="<?php echo  $value->foto;?>" alt="" srcset="" width="200px" height="200px"></td>
              <td><?php echo $value->estado;?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        <?php endif; ?>
        <!--  -->
          <?php if($_GET['id'] == 3):?>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Documento</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($listCiudadano as $value):?>
              <tr>
                <td><?php echo  $value->id; ?></td>
                <td><?php echo  $value->nombre; ?></td>
                <td><?php echo  $value->apellido; ?></td>
                <td><?php echo  $value->documento; ?></td>
                <td><?php echo  $value->email; ?></td>
                <td><?php echo $value->estado;?></td>
                
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        <?php endif;?>
        <!--  -->
        <?php if($_GET['id'] == 4):?>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($listPuesto as $value):?>
              <tr>
                <td><?php echo $value->id;?></td>
                <td><?php echo $value->nombre;?></td>
                <td><?php echo $value->descripcion;?></td>
                <td><?php echo $value->estado;?></td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        <?php endif;?>
        <!--  -->
  </div>
  
  
  <!--  -->
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