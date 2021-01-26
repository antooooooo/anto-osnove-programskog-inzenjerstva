<?php
include "connection.php";
$vino = "SELECT sadrzaj_clanka, id_clanka, naslov_clanka, slika, datum, k.naziv_kategorije FROM clanak c
JOIN kategorija k ON c.id_kategorije = k.id_kategorije WHERE c.vidljiv = 1
ORDER BY c.redoslijed";
$result = mysqli_query($conn, $vino); ?>
<html>
<head>
<link rel="stylesheet" href="djelatnosti.css">
<link rel="shortcut icon" type="image/x-icon" href="00ikona.png">
<script src="12izbornik.js" defer></script>
<title>Fiorella</title>
<meta charset="utf-8"></head>
<body>
    <nav class="navbar">
    <div class="brand-title"><ul><li><a href="index.html">Fiorella</a></li></ul></div>
    <a href="#" class="toggle-button" style="color:white;">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span></a>
        <div class="navbar-links">
        <ul>
	        <li><a href="djelatnosti.php">naše djelatnosti</a></li>
            <li><a href="radovi.html">naši radovi</a></li>
            <li><a href="kontakt.php">kontakt</a></li>
            <li><a href="info.html">info</a></li>
            <li><a href="moto.html">naš moto</a></li>
                </ul></div></nav>
      
<section class="intro">
<div class="inner">
<div class="content">
    
<?php
while($row = mysqli_fetch_assoc($result)) {
//	echo "sadrzaj: " . $row["sadrzaj_clanka"].	"id_clanka: " . $row["id_clanka"]. " 	- naslov clanka: " . $row["naslov_clanka"] .	"slika: " . $row["slika"]. 	" - datum: " . $row["datum"].	" - naziv kategorije: " . $row["naziv_kategorije"]."<br>";
echo '
<h2 style="color:white; font-family:courier new;">'. $row["sadrzaj_clanka"].'</h2>';}?>
</div></div></section></body></html>