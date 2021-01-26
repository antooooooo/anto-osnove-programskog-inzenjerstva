<?php
session_start();
$target_file="";

if(!empty($_FILES)){
    // var_dump($_FILES['slika']);
    $target_dir = "slike/";
    $target_file = $target_dir . basename($_FILES["slika"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["slika"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["slika"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "txt" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["slika"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


}else{
    echo "nema unosa fileaova";
}

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



$unos = "INSERT INTO clanak (naslov_clanka, sadrzaj_clanka, datum, highlight, autor, vidljiv, redoslijed, id_korisnika, zadnja_promjena, slika, id_kategorije) 
VALUES('".$_POST["naslov_clanka"]."','". $_POST["sadrzaj_clanka"]."','". $_POST["datum"]."','". $_POST["highlight"]."','". 
$_POST["autor"]."', 1, 0, ".$_SESSION["id_korisnika"].",". $_SESSION["id_korisnika"].", '. $target_file.', '".$_POST["id_kategorije"]."')";

if ($conn->query($unos) === TRUE) {
    echo "New record created successfully";
    header("Location: 13cms.php");

} else {
    echo "Error: " . $unos . "<br>" . $conn->error;
}





