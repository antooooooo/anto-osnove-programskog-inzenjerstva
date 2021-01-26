<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require_once('/home/fiorella/public_html/PHPMailer.php');
require_once('/home/fiorella/public_html/Exception.php');
require_once('/home/fiorella/public_html/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
if(isset($_POST["email"])){
//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->isSMTP();
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'mail.fiorella.hr';
$mail->Port = 26;
$mail->SMTPAuth = true;
$mail->Username = 'info@fiorella.hr';
$mail->Password = 'lozinkalozinka2019';
//Set who the message is to be sent from
$mail->setFrom('info@fiorella.hr', 'upit s weba');
//Set an alternative reply-to address
$mail->addReplyTo($_POST["email"], $_POST["name"]);
//Set who the message is to be sent to
$mail->addAddress('anteherceg29@gmail.com');
//Set the subject line
$mail->Subject = $_POST["subject"];
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body = $_POST["message"];
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;}}
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, 
initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="kontakt.css"> 
<link rel="stylesheet" type="text/css" href="kontakt2.css">  
<link rel="stylesheet" href="kontakt3.css">
<link rel="stylesheet" href="kontakt4.css">
<link rel="shortcut icon" type="image/x-icon" href="00ikona.png">
<script src="12izbornik.js" defer></script>
<title>Fiorella</title>
<style>
* {
    box-sizing: border-box;}
body{
	margin:0;
	font-family:courier new;
	text-align:justify;	
    background-color:green;}
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden; }
li {
	float: left; }
li a{
	display: inline-block;
	padding: 0px 20px;}
.btn{
	border-radius:9px;
	font-family:'Oswald', sans-serif;
	color:red;
	font-size:135%;
	padding:10px 20px;
	border: solid red 3px;
	text-transform:uppercase;
	text-decoration:none;}
.btn:hover{
	color: #fff;
	border:solid #fff 3px;}
.bbbbbb{
    color:redo;
    background-color:cyan;
	height:150px;}
.backpicture{
	height:75px;}
.asdfs{
	margin-left:17px;
	margin-top:20px;
	height:25px;}
.left{
	float:left;
	width:35%;
	border:1px ;
	padding:5px;
	box-sizing: border-box;
	margin-top:100px;
	margin-left:120px;}
.right{
	float:left;
	width:52%;
	box-sizing: border-box;}
.menu {
    float: left;}
.menuitem {
    padding: 8px;
    margin-top: 7px;
    margin-right: 35px;}
.main {
  float: right;
  width: 18%;}
@media only screen and (max-width:800px) {/* For tablets: */
.main {
    width: 100%;
    padding: 0;}
.right {
    width: 100%;}}
@media only screen and (max-width:500px) {/* For mobile phones: */
.menu, .main, .right {
    width: 100%;}
.main {
    width: 100%;
    padding:0px 35px;}}
.menu1 {
    float: left;
    width: 10%;}
.menuitem1 {
    padding: 8px;
    margin-top: 7px;
    border-bottom: 1px solid #f1f1f1;}
.main1 {
    width: 100%;
    padding: 30px 130px;
    background-color:blue;
    margin-top: 70px;}
.right1 {
    width: 100%;
    padding: 0 400px;
    margin-top: 70px;}
@media only screen and (max-width:800px) {/* For tablets: */
.main1 {
    width: 100%;
    padding: 0;}
.right1 {
    width: 100%;
    padding: 0;}}
@media only screen and (max-width:500px) {/* For mobile phones: */
.menu1, .main1, .right1 {
    width: 100%;}}</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head><body><nav class="navbar">
<div class="brand-title"><ul><li><a href="index.html">Fiorella</a></li></ul></div>
<a href="#" class="toggle-button" style="color:white;">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span></a>
<div class="navbar-links"><ul>
<li><a href="djelatnosti.php">naše djelatnosti</a></li>
<li><a href="radovi.html">naši radovi</a></li>
<li><a href="kontakt.php">kontakt</a></li>
<li><a href="info.html">info</a></li>
<li><a href="moto.html">naš moto</a></li></ul></div></nav>
<div style="overflow:auto;", "background-color:green"><div class="right" style="background-color:green"></div>
<div class="menu" style="background-color:green"><div class="menuitem" style="background-color:green"></div></div>
<div class="main" style="background-color:green">
<a href ="https://www.facebook.com/vesna.borovec.750"><img class="izbornik" src="07kontakt.png"></a>
<a href ="https://www.google.com/maps/@43.0020324,17.2701502,15z">
<img class="izbornik" src="08kontakt.png"></a></div>
<div class="main1" style="background-color:green; ">
<form action="" method="post">
<textarea cols="15" name="message" placeholder="upit" rows="10" style="background-color:yellowgreen; font-family:segoe script;";></textarea>
<input name="name" placeholder="Ime Prezime" type="text"  style="background-color:white; font-family:segoe script;" width="100px;">
<input name="email" placeholder="email" type="text" style="background-color:white; font-family:segoe script;">
<input id="submit" type="submit" value="poruka" style="background-color:white; font-family:segoe script;"/>
</form></div></div></body></html>