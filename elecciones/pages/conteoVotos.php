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
    include 'header.php';
    $conteoVotos=$_SESSION['eleccion']['voto'];
    $totalVotos=count( $conteoVotos);
    ?>

    <div class="text-center">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total de votos</h5>
    <p class="card-text"> El total es : <?php echo $totalVotos ?></p>
    
  </div>
</div>
    </div>
    <?php
    include 'footer.php';
    ?>


    </footer>

</body>

</html>