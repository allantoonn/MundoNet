<?php

	//Para realizar o teste, alterar a senha do email
	//e também o destinatário

	$nome = "";
	$telefone = "";
	$telefone2 = "";
	$email = "";
	$assunto = "";
	$mensagem = "";
	if(!empty($_POST['nome'])){
		$nome = $_POST['nome'];
	}
	if(!empty($_POST['telefone'])){
		$telefone = $_POST['telefone'];
	}
	if(!empty($_POST['telefone2'])){
		$telefone2 = $_POST['telefone2'];
	}
	if(!empty($_POST['email'])){
		$email = $_POST['email'];
	}
	if(!empty($_POST['assunto'])){
		$assunto = $_POST['assunto'];
	}
	if(!empty($_POST['mensagem'])){
		$mensagem = $_POST['mensagem'];
	}

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Set the hostname of the mail server
	$mail->Host = 'smtp-mail.outlook.com';
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 587;
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication
	$mail->Username = 'mundonetsolicitacao@outlook.com';
	//Password to use for SMTP authentication
	$mail->Password = 'senha';
	//Set who the message is to be sent from
	$mail->setFrom('mundonetsolicitacao@outlook.com', 'MundoNet Solicitacao');
	//Set who the message is to be sent to
	$mail->addAddress('destinatario@destinatario.com', 'Nome do destinatário');
	//Set the subject line
	$mail->Subject = $assunto;
	//Read an HTML message body from an external file, convert referenced images to embedded
	$mail->msgHTML("Nome: " . $nome . "<br>Telefone: " . $telefone . "<br>Recados: " . $telefone2 . "<br><br>Descricao do problema: " . $mensagem);
	//Set reply mail to customer mail
	$mail->addReplyTo($email, $nome);

	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');
	//send the message, check for errors
	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message sent!';
	}

?>