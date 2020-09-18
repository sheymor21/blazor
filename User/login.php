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
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
      <?php
      require_once "../interfaces/iService.php";
      require_once "../interfaces/iFile.php";
      require_once "../Logic/FileHandler/file.php";
      require_once "../Database/UserContext.php";
      require_once "../Logic/logic.php";
      require_once "../Logic/DBService/DBServicesUser.php";
      require_once "../User/user.php";

      $service = new DatabaseServiceUser();
      $result = null;
      $message = "";
      session_start();
      if(isset($_POST['user']) && isset($_POST['password'])){
        $result = $service->Login($_POST['user'],$_POST['password']);

        if($result != null){
            $_SESSION['user'] = $result;
            header('Location: ../index.php');
            exit();

        }else{
            $message = "Usuario o Contraseña incorrecto";
        }
      }
      ?>
    <!--  -->
    <form class="form-signin" action="login.php" method="POST">
  <h1 class="h3 mb-3 font-weight-normal text-center">iniciar secion</h1>
  <?php if($message != ""):?>
    <div class="alert alert-danger" role="alert">
        <?php echo  $message; ?>
    </div>
  <?php endif; ?>
  <label for="user" class="sr-only">usuario</label>
  <input type="user" id="user" class="form-control" placeholder="Username" required="" autofocus="" name="user">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <a href="../pages/addUser.php" class="mt-2">Si aun no tiene cuenta, Click aqui</a>
  <p class="mt-3 mb-3 text-muted">© 2017-2020</p>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>