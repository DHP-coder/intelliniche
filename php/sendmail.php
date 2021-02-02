<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];

$mailBody = "Customer information:<br>"
			."Full name: ".$name."<br>"
			."Phone number: ".$phone."<br>"
			."Email: ".$email."<br>"
			."Address: ".$address."<br>"
			."Message: ".$message."<br>";

// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../lib/PHPMailer_5.2.0/Exception.php';
require '../lib/PHPMailer_5.2.0/PHPMailer.php';
require '../lib/PHPMailer_5.2.0/SMTP.php';

$mail = new PHPMailer();

// set mailer to use SMTP
// $mail->isSMTP();

$mail->Host = "smtp.gmail.com";  // specify main and backup server

$mail->SMTPAuth = true;     // turn on SMTP authentication

$mail->SMTPSecure = "tls";
$mail->Port = 587;

// thay mail cong ty vo day
$mail->Username = "IntelliNiche@gmail.com";  // SMTP username
$mail->Password = "Intelliniche2405"; // SMTP password

// thay mai cong ty vo day
 $mail->setFrom('IntelliNiche@gmail.com', 'Mailer');

// thay mail nguoi nhan vo day
// $mail->addAddress("long.nt.59cntt@ntu.edu.vn", "Long");
 $mail->addAddress("huynhkynhatcuong@gmail.com", "CuongHuynh");
	

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->isHTML(true);

$mail->Subject = "You have received feedback from your website!";

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->Body    = $mailBody;
$mail->AltBody = $mailBody;

if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
	exit;
}

echo "1";
?>