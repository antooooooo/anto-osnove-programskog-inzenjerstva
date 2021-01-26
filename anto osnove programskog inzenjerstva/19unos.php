<?php
session_start();
if (isset($_SESSION["id_korisnika"])){
}
else{
    header("Location: 16index.php");
    die();
}
include "connection.php";

$clanak = null;
if(!empty($_GET) && isset($_GET['id']) && is_int(intval($_GET['id']))){
  $sql = "SELECT * FROM clanak WHERE id_clanka = " . $_GET['id'] . ";";

  $result = mysqli_query($conn, $sql);
  $rowcount=mysqli_num_rows($result);
  $clanak = mysqli_fetch_assoc($result);

}

?>
<?php
$vino = "SELECT * FROM kategorija";
$result = mysqli_query($conn, $vino);
?>
<!DOCTYPE html>
<html>

    
<body>

<h2>Forma za unos članka</h2>

<form action="<?php echo !$clanak ? '20unos_handler.php' : '21update_handler.php'; ?>" method="POST" enctype="multipart/form-data">
  Naslov clanka:<br>
  <input type="text" name="naslov_clanka" value="<?php echo $clanak ? $clanak['naslov_clanka'] : ''; ?>">
  <br>
  Sadrzaj clanka:<br>
  

  
  <input type="text" name="sadrzaj_clanka" value="<?php echo $clanak ? $clanak['sadrzaj_clanka'] : ''; ?>">
  <br>
  Slika:<br>
  <input type="file" name="slika" value="">
  <br>
  Datum:<br>
  <input type="date" name="datum" value="<?php echo $clanak ? $clanak['datum'] : ''; ?>">
  <br>
  ID kategorije:<br>
  <select name="id_kategorije" >
    <?php
		while($row = mysqli_fetch_assoc($result)) { ?>
            <option value='<?php echo $row["id_kategorije"]?>' <?php echo $clanak['id_kategorije'] == $row["id_kategorije"] ? 'selected' : '' ?>><?php echo $row["naziv_kategorije"]?></option>
		<?php	} ?>
  </select>
  <br>
  Highlight:<br>
  <input type="text" name="highlight" value="<?php echo $clanak ? $clanak['highlight'] : ''; ?>">
  <br>
  Autor:<br>
  <input type="text" name="autor" value="<?php echo $clanak ? $clanak['autor'] : ''; ?>">
  <br>
  <?php 
  if($clanak){
    ?>
    <input type="hidden" name="id_clanak" value="<?php echo $_GET['id']; ?>">
    <?php
  }
  ?>
  <input type="submit" value="Unos">
  
  
</form> 

</body>
</html>