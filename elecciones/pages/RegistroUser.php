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
  $services = new DatabaseServiceUser();
  $logic = new logic();
  $logic->volverLogin();
  if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $newUser = new user();
    $newUser->initialize(1, $_POST['usuario'], $_POST['contraseña']);
    $services->Add($newUser);
    header('Location: agregarUser.php');
    exit();
  }
  ?>
  <div class="estilo">
    <img src="img/login2.png" alt="" width="100px" class="login">
    <form action="RegistroUser.php" method="POST">
    <a name="" id="" class="btn btn-default btn-gradd btn-block text-white" href="agregarUser.php">volver</a>
      <div class="float-right">
        <br>
      </div>
      <label>Nombre de usuario</label>
      <input class="form-control" placeholder="Introduzca su usuario" name="usuario">

      <label for="exampleInputPassword1">Password</label>
      <input class="form-control" placeholder="Password" name="contraseña">
      <br>

      <div class="text-center">
        <button class="btn btn-default btn-gradd btn-block text-white" type="submit">Registrarse</button>
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