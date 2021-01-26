<?php
session_start();
$target_file="";

if (isset($_SESSION["id_korisnika"])){
}
else{
    header("Location: 16index.php");
    die();
}
include "connection.php";

if(empty($_POST["naslov_clanka"])){
    die("Naslov nije unesen");
}
if(empty($_POST["sadrzaj_clanka"])){
    die("Sadrzaj nije unesen");
}
if(empty($_POST["datum"])){
    die("Datum nije unesen");
}

if(empty($_POST["autor"])){
    die("Autor nije unesen");
}



$update = "UPDATE clanak SET 
naslov_clanka = '".$_POST["naslov_clanka"]."',
sadrzaj_clanka = '". $_POST["sadrzaj_clanka"]."',
datum = '". $_POST["datum"]."',
highlight = '". $_POST["highlight"]."',
autor = '".$_POST["autor"]."',
zadnja_promjena = '" . $_SESSION["id_korisnika"] ."',
id_kategorije = ". $_POST["id_kategorije"]." WHERE id_clanka = " . $_POST['id_clanak'] . ";";


if ($conn->query($update) === TRUE) {
    echo "New record created successfully";
    header("Location: 13cms.php");

} else {
    echo "Error: " . $unos . "<br>" . $conn->error;
}





