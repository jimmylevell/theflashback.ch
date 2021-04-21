<?php
	if (!empty($_POST))
	{
		require 'phpmailer/PHPMailerAutoload.php';

		$mail = new PHPMailer(); 

		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "mrcavestar@gmail.com";
		$mail->Password = "THfeb.2015";
		$mail->SetFrom("kontakt@theflashback.ch");
		$mail->Subject = "[theflashback] Neue Anfrage";
		$mail->AddAddress("jimmy.levell@outlook.com");
		
		$mail->Body = utf8_decode('
			<h1> Eine neue Anfrage wurde soeben erfasst </h1>
			<p> Name: ' . $_POST["name"] . ' </p>
			<p> Email: ' . $_POST["email"] . '</p>
			<p> Nachricht: '. $_POST["message"] .'</p>
			<i> Bitte so rasch wie möglich Antworten. </i>');

		if(!$mail->Send()) 
		{
			echo "Mailer Error: " . $mail->ErrorInfo;
		 } 
		else 
		{
			echo "Vielen Dank für deine Nachricht. Wir kontaktieren mich bald :)";
		}
	}
?>