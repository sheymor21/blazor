<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
<?php
  include '../Sistemaelectoral/utilities/header.php';
  

    
    $to = $_POST['email'];//el email que ingreso por post
    $subject = "Voto realizado!";
    $message = "Su voto ha sido nulo ";
   
    
    if (filter_var($to, FILTER_VALIDATE_EMAIL) && $_POST['email'] != null) {
      mail($to, $subject, $message);
      header("location:index.php");
    }else if(FILTER_VALIDATE_EMAIL == false){
        echo "Email incorrecto intenta de nuevo";
      }
  ?>
      <h1>Gracias por su participacion!</h1>
  <form action="enviarEmail.php" method="post">

    <label for="">Enviar Resultados</label>
    <input type="text" required placeholder="intruzca su email" name="email">
    <button type="submit" class="btn btn-default btn-dark ">Enviar datos de votacion</button>


  </form>
  <?php
  include '../Sistemaelectoral/utilities/footer.php';
  ?>

</body>
</html>