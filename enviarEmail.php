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
 
    $nombrePresidente=$_SESSION['eleccion']['presidente'];
    $nombreregidor=$_SESSION['eleccion']['regidor'];
    $nombreDiputado=$_SESSION['eleccion']['diputado'];
    $nombreSenador= $_SESSION['eleccion']['senador'];
    $nombreAlcalde=$_SESSION['eleccion']['alcalde'];

    $to = $_POST['email'];//el email que ingreso por post
    $subject = "Voto realizado!";
    $message = "Gracias por realizar su voto usted voto por "."$nombrePresidente "." candidato a la presidencia,".$nombreDiputado." candidato como diputado,".$nombreSenador." como su senador y ".$nombreAlcalde." como alcalde para su provincia";
    $message1 = "Gracias por realizar su voto usted voto por "."Presidente nulo" ." candidato a la presidencia,".$nombreDiputado." candidato como diputado,".$nombreSenador." como su senador y ".$nombreAlcalde." como alcalde para su provincia";
    $message2 = "Gracias por realizar su voto usted voto por ".$nombrePresidente ." candidato a la presidencia,"."Diputado nulo"." candidato como diputado,".$nombreSenador." como su senador y ".$nombreAlcalde." como alcalde para su provincia";
    $message3 = "Gracias por realizar su voto usted voto por ".$nombrePresidente ." candidato a la presidencia,".$nombreDiputado." candidato como diputado,"."Senador nulo"." como su senador y ".$nombreAlcalde." como alcalde para su provincia";
    $message4 = "Gracias por realizar su voto usted voto por ".$nombrePresidente ." candidato a la presidencia,".$nombreDiputado." candidato como diputado,".$nombreSenador." como su senador y "."Alcalde nulo"." como alcalde para su provincia";
    
    if (filter_var($to, FILTER_VALIDATE_EMAIL) && $_POST['email'] != null) {
      mail($to, $subject, $message);
      header("location:index.php");
    } else if(FILTER_VALIDATE_EMAIL == false){
      echo "Email incorrecto intenta de nuevo";
    }
    if(filter_var($to, FILTER_VALIDATE_EMAIL) && $_POST['email'] != null&& $nombrePresidente=$_SESSION['eleccion']['presidente'] == null){
      mail($to, $subject, $message1);
      header("location:index.php");
    }
    if(filter_var($to, FILTER_VALIDATE_EMAIL) && $_POST['email'] != null && $nombreregidor=$_SESSION['eleccion']['regidor']== null){
      mail($to, $subject, $message2);
      header("location:index.php");
    }
    if(filter_var($to, FILTER_VALIDATE_EMAIL) && $_POST['email'] != null && $nombreSenador= $_SESSION['eleccion']['senador']== null){
      mail($to, $subject, $message3);
      header("location:index.php");
    }
    if(filter_var($to, FILTER_VALIDATE_EMAIL) && $_POST['email'] != null && $nombreAlcalde=$_SESSION['eleccion']['alcalde']== null){
      mail($to, $subject, $message4);
      header("location:index.php");
    }
   


  ?>
  <form action="enviarEmail.php" method="post">



    
    <label for="">Enviar Resultados</label>
    <input type="text" required placeholder="intruzca su email" name="email">
    <button type="submit" class="btn btn-default btn-dark ">Enviar datos de votacion</button>


  </form>

  <?php
  include '../Sistemaelectoral/utilities/footer.php';
  ?>


  </footer>

</body>

</html>