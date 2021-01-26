<?php
session_start();
if (isset($_SESSION["id_korisnika"])){
}
else{
    header("Location: 16index.php");
    die();
}
include "connection.php";
$id = $_SESSION["id_korisnika"];
$var = "SELECT * FROM korisnik WHERE id_korisnika='".$id."'";
$result = mysqli_query($conn, $var);
$redak = mysqli_fetch_assoc($result);
$ime = $redak["ime_korisnika"];
$vino = "SELECT id_clanka, naslov_clanka, slika, datum, k.naziv_kategorije FROM clanak c
JOIN kategorija k ON c.id_kategorije = k.id_kategorije WHERE c.vidljiv = 1
ORDER BY c.redoslijed";
$result = mysqli_query($conn, $vino);
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="shift_jis">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
    div.c {
    text-align: right;
    } 
    </style>
</head>
<body>
<div class="c">
<h3>Bok,<?php echo $ime;?>!</h3>
<a href="18logout.php">Log out</a>
</div>
<a href="19unos.php">Unesi novi članak</a>
<table style="width:100%" border="1">
  <tr>
    <th>ID clanka</th>
    <th>Naslov clanka</th>
    <th>Upravljanje</th>
  </tr>
  <?php
		while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["id_clanka"]?></td>
                <td><?php echo $row["naslov_clanka"]?></td>
                <td>
                  <a href="14delete.php?id=<?php echo $row["id_clanka"]; ?>"> <i class="material-icons">delete_forever</i> </a>
                  <a href="19unos.php?id=<?php echo $row["id_clanka"]; ?>"> <i class="material-icons">create</i> </a>
                </td>
            </tr>
		<?php	} ?>
  
</table>

</body>
</html>



