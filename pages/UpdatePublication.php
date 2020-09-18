<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
      <?php
      require_once "../interfaces/iService.php";
      require_once "../interfaces/iFile.php";
      require_once "../Logic/FileHandler/file.php";
      require_once "../Database/UserContext.php";
      require_once "../Logic/logic.php";
      require_once "../Logic/DBService/DBServicesUser.php";
      require_once "../Logic/DBService/DBServicesPublicaciones.php";
      require_once "../User/user.php";
      require_once "../User/publicaciones/publicaciones.php";
      session_start();
        $UpdatePublication = new publicaciones();
        $service = new DatabaseServicePublicaciones();
        $listPublicaciones = $service->GetList();
        $tiempo = date('y-m-d h:i:s');
        $title;
        $content;
        $idUser;
        $Username = $_SESSION['user']->username;
        $photo = $_SESSION['user']->photo;
        if($photo['name'] == "A"){
          $photo = "Default.jpg";
        }
        foreach($listPublicaciones as $value){
            if($_GET['id'] == $value->id){
                $title = $value->title;
                $content = $value->content;
                $idUser = $value->idUser;
            }
        }

        if(isset($_POST['content']) && isset($_POST['title']) && isset($_POST['id']) && isset($_POST['idUser'])){
         $UpdatePublication->initialize($_POST['id'],$_POST['idUser'],$_POST['title'],$_POST['content'],$tiempo);
         $service->Update($_POST['id'],$UpdatePublication);
          header('Location: viewPublications.php');
           exit();
        }
      ?>
    <!--  -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="../index.php" id="init">Notes</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                 aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="viewPublications.php">Registro de publicaciones</a>
              </li>
            </ul>
            <img src="<?php echo $photo;?>" alt="Cinque Terre" id="imt" class="rounded-circle" <?php if($photo == 'Default.jpg'){echo "style='width: 4%;'";} ?>>
              <!--  -->
              <div class="btn-group" role="group" style="margin-right: 25%;">
                 <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropbutton">
                    <?php echo $Username; ?>
                  </button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                           <a class="dropdown-item" href="../User/loginOut.php">Cerrar sesion</a>
                      </div>
              </div>
        </div>
              <!--  -->
       </div>
    </nav>
    <!--  -->
<div class="container mt-5">
 <form action="UpdatePublication.php" method="POST">
       <input type="text" name='id' value="<?php echo  $_GET['id'];?>" hidden>
       <input type="text" name='idUser' value="<?php echo $idUser;?>" hidden>
    <div class="form-group">
        <label for="formGroupExampleInput">Titulo</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titulo de la publicacion" name="title" value="<?php echo  $title;?>">
     </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Contenido</label>
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"><?php echo  $content;?></textarea>
        <button type="submit" class="btn btn-success mt-2">Editar</button>
    </div>
</form>
</div>

    <!--  -->
  <?php //$layaut->navbar(false,false); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>