<?php
	$name = $_POST['Name'];
	$visitorEmail = $_POST['Email'];
	$message = $_POST['Message'];
	$telnum = $_POST['Tel'];
	
	
	$email_from = "contact@voltercables.com.pk";
	$email_subject = "User Contact";
	$email_body = "Name : $name \n".
					"Email : $visitorEmail \n".
					"Number : $telnum \n".
					  "Message : $message \n";
					  
	$to = "voltercables@gmail.com";
	
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-to: $visitorEmail \r\n";
	
	mail($to, $email_subject, $email_body, $headers);
	
	header("Location: index.html");
	
	


?>