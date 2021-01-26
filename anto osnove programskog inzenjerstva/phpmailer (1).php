<html>
<head>
<title>PHPMailer - Mail() basic test</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){
	require_once('PHPMailer/class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = str_replace("\n","<br>",$_POST['message']);

$mail->AddReplyTo($_POST['email'],$_POST['name']);

$mail->SetFrom($_POST['email'],$_POST['name']);
// connect to smtp phpmailer

$address = 'hrgaa2@gmail.com';
$ime = 'Ante Herceg';


$mail->AddAddress($address, $ime);

$mail->Subject = "Website Contact Form";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);



    
}

?>

</body>
</html>
