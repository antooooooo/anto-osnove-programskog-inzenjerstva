<?php
include "connection.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$var = "SELECT * FROM korisnik WHERE username =  '".$username."' and password='".$password."'";

$result = mysqli_query($conn, $var);
$rowcount=mysqli_num_rows($result);
if ($rowcount != 1){
    header("Location: index.php?error=true");
    die();
}
else{
    session_start();
    $redak = mysqli_fetch_assoc($result);
    $id = $redak['id_korisnika'];
    $_SESSION["id_korisnika"] = $id;
    header("Location: 13cms.php");
    die();
}
