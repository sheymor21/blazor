<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro</title>
</head>

<body class="radiant">
    <?php
    include '../Sistemaelectoral/utilities/header.php'

    ?>
    <div class="inicio-session">
        <img src="img/login2.png" alt="" width="100px" class="login">
        <form action="index.php" method="POST">
            <label>Usuario</label>
            <input class="form-control" placeholder="Introduzca su usuario" name="usuario">

            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" placeholder="Password" name="contrasena">
            <br>

            <div class="text-center">
                <button class="btn btn-default btn-grad btn-lg btn-block text-white" type="submit">Iniciar seccion</button>
            </div>
            
        </form>
        <div class="text-center">
            <br>
            <br>
        <a href="#" class="fa fa-youtube  btn-lg"></a>
            <a href="#" class="fa fa-twitter btn-lg"></a>
            <a href="#" class="fa fa-instagram btn-lg"></a>
            <a href="#" class="fa fa-github btn-lg "></a>
        </div>
            
    </div>
    </div>
</body>
<?php
include '../Sistemaelectoral/utilities/footer.php';
?>

</html>