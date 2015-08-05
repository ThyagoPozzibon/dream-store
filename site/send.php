<?php
	$message2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
	echo "<script type='text/javascript'>alert('$message2');</script>";
	if(isset($_POST['firstname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])) {
		
		$firstname = 	$_POST['firstname'];
		$phone = 		$_POST['phone'];
		$email = 		$_POST['email'];
		$message = 		$_POST['message'];


		$message = "
			NOME: $firstname <br />
			EMAIL: $email <br />
			TELEFONE: $phone <br />
			MENSAGEM: $message <br />
			IP: $message2;
		";	

		$headers = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "From: $firstname <$email>\n";
		$headers .= "Return-Path: <$email>\n";
		echo mail("kfm.mendes@hotmail.com, professorwillians@gmail.com, nayarads@gmail.com", "email vindo do site", $message, $headers);
	}else{
		echo "você não deveria estar fazendo isso...";
	}
	echo "seu IP foi identificado...";

?>