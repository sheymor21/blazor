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
  <body class="bg-primary">
      <?php
      require_once "../interfaces/iService.php";
      require_once "../interfaces/iFile.php";
      require_once "../Logic/FileHandler/file.php";
      require_once "../Database/UserContext.php";
      require_once "../Logic/logic.php";
      require_once "../Logic/DBService/DBServicesUser.php";
      require_once "../User/user.php";
      $logic = new logic();
      $newUser = new User();
     $services = new DatabaseServiceUser();
     $servicesUser = new DatabaseServiceUser();
     $listUser = $servicesUser->GetList();
     $validacion = true;
        if(isset($_POST['name']) && 
        isset($_POST['lastname']) &&
        isset($_POST['email']) &&
        isset($_POST['username']) &&
        isset($_POST['password']) &&
        isset($_FILES['photo'])){
            
            foreach($listUser as $value){
                if($value->username == $_POST['username']){
                $validacion = false;
                } 
            }

            if($validacion){
                $newUser->initialize(0,$_POST['name'],$_POST['lastname'],$_FILES['photo'],$_POST['email'],$_POST['username'],$_POST['password']);
                $services->Add($newUser);
                header('Location: ../User/login.php');
                exit();
            }
        }
      ?>
    <!--  -->
<div class="container mt-5">
 <form action="addUser.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
      <?php if(!$validacion):?>
    <div class="alert alert-danger" role="alert">
        Ya existe el nombre de usuario
    </div>  
      <?php endif; ?>       
      <div class="row">
          <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                    <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="name">
            </div>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Apellido</span>
                    </div>
                        <input type="text" class="form-control" placeholder="LastName" aria-label="Username" aria-describedby="basic-addon1" name="lastname">
                 </div>
             </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
                <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email">
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Usuario</span>
        </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Contraseña</span>
        </div>
            <input type="Password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password">
    </div>
    <div class="input-group mb-3">
        <input type="file" class="form-control" aria-describedby="basic-addon1" name="photo">
    </div>
        <button type="submit" class="btn btn-success">Registrar</button>
        <a name="" id="" class="btn btn-warning" href="../User/login.php" role="button" style="margin-left: 83%;">Regresar</a>
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