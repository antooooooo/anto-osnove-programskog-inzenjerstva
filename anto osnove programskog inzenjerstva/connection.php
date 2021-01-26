<?php
$servername = "localhost";
$username = "fiorella_ante";
$password = "lozinkalozinka2019";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "fiorella_baza");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_set_charset ($conn ,"utf8");

?>