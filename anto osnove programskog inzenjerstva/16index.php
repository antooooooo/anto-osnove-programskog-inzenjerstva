<?php
session_start();
if (isset($_SESSION["id_korisnika"])){
  header("Location: 13cms.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="17login.php" method = "POST">
  Username:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="password" name="password"><br>
  <input type="submit" value="log in"><br>
  <?php
  if(isset($_GET['error'])){
      echo "Korisnik nije pronađen";
  }
  
  ?>
</form>
</body>
</html>