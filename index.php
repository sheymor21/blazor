<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
    require_once "Logic/Auth.php";
     require_once "interfaces/iService.php";
     require_once "interfaces/iFile.php";
     require_once "Logic/FileHandler/file.php";
     require_once "Database/UserContext.php";
     require_once "Logic/logic.php";
     require_once "Logic/DBService/DBServicesUser.php";
     require_once "Logic/DBService/DBServicesPublicaciones.php";
     require_once "User/user.php";
     require_once "User/publicaciones/publicaciones.php";
     session_start();

     if($_SESSION == null){
       header('Location: User/login.php');
       exit();
     }

     $service = new DatabaseServicePublicaciones('Database');
     $listPublication = $service->GetList();
     $n = 1;
     $s = 1;
     $idUser = $_SESSION['user']->id;
     $Username = $_SESSION['user']->username;
     $photo = $_SESSION['user']->photo;
     if($photo['name'] == "A"){
       $photo = "Default.jpg";
     }
    ?>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="#" id="init">Notes</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                 aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="pages/viewPublications.php">Registro de publicaciones</a>
              </li>
            </ul>
              <img src="pages/<?php echo $photo;?>" alt="Cinque Terre" id="imt" class="rounded-circle" <?php if($photo == 'Default.jpg'){echo "style='width: 4%;'";} ?>>
              <!--  -->
              <div class="btn-group" role="group" style="margin-right: 25%;">
                 <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropbutton">
                    <?php echo $Username; ?>
                  </button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                           <a class="dropdown-item" href="User/loginOut.php">Cerrar sesion</a>
                      </div>
              </div>
        </div>
              <!--  -->
       </div>
    </nav>
    <!--  -->
    <div class="container mt-5">
      <a name="" id="" class="btn btn-primary mb-3" href="pages/addPublications.php" role="button">agregar publicacion</a>
      <div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <?php foreach($listPublication as $value):?>
              <?php if($value->idUser == $idUser):?>
                <?php if($s == 1):?>
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#<?php $s++; echo $value->title;?>" role="tab" ><?php echo $value->title;?></a>
                <?php else:?>
                  <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#<?php echo $value->title;?>" role="tab" ><?php echo $value->title;?></a>
                <?php endif;?>
              <?php endif;?>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
          <?php foreach($listPublication as $value):?>
            <?php if($value->idUser == $idUser):?>
              <?php if($n == 1):?>
            <div class="tab-pane fade show active text-break" id="<?php $n++ ; echo $value->title;?>" role="tabpanel" ><?php echo  $value->content; ?></div>
              <?php endif;?>
              <div class="tab-pane fade text-break" id="<?php echo $value->title;?>" role="tabpanel" ><?php echo  $value->content; ?></div>
            <?php endif;?>
            <?php endforeach; ?>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">talulaaa</div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">asdsa</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">afsfad</div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
  <?php //$layaut->navbar(false,false); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>