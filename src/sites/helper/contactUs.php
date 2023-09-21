<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (!empty($_POST)) {
	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = rtrim(file_get_contents("/run/secrets/SMTP_GMAIL_USER"));
	$mail->Password = rtrim(file_get_contents("/run/secrets/SMTP_GMAIL_PASSWORD"));
	$mail->SetFrom("kontakt@theflashback.ch", "Kontakt The FlashBack");
	$mail->Subject = "[theflashback] Neue Anfrage";
	$mail->AddAddress("jimmy.levell@outlook.com");

	$mail->Body = mb_convert_encoding('
			<h1> Eine neue Anfrage wurde soeben erfasst </h1>
			<p> Name: ' . $_POST["name"] . ' </p>
			<p> Email: ' . $_POST["email"] . '</p>
			<p> Nachricht: ' . $_POST["message"] . '</p>
			<i> Bitte so rasch wie möglich Antworten. </i>', 'ISO-8859-1', 'UTF-8');

	if (!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Vielen Dank für deine Nachricht. Wir kontaktieren mich bald :)";
	}
}
