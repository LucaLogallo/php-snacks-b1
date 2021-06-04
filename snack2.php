<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- consegna: Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
  <?php
  $name = $_GET['name'];
  $email = $_GET['email'];
  $age = $_GET['age'];
  $text = "Accesso negato";

  
  if(is_numeric( $age ) === true && strlen( $name ) > 3 && strpos($email, "@") >= 0 && strpos($email, ".") !== false){
    $text ="Accesso riuscito";
  }else{
    $text = "Accesso negato";
  }

  ?>
  
  <h1> <?php echo $text ?></h1>
</body>
</html>