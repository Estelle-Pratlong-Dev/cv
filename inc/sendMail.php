
	<?php

	// Load Composer's autoloader
	require 'vendor/autoload.php';

	/* import des classes de PHPMailer */

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$mail = new PHPMailer;
	/* paramétrage du SMTP */
	$mail->SMTPOptions = [
		'ssl' =>
		[
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		]
	];
	// $mail->SMTPDebug = 3; //mode debug si > 2
	$mail->CharSet = 'UTF-8'; //charset utf-8
	$mail->isSMTP(); //connexion directe à un serveur SMTP
	$mail->isHTML(true); //mail au format HTML
	$mail->Host = 'smtp.gmail.com'; //serveur SMTP
	$mail->SMTPAuth = true; //serveur sécurisé
	$mail->Port = 465; //port utilisé par le serveur
	$mail->SMTPSecure = 'ssl'; //certificat SSL
	$mail->Username = 'pratlong.estelle.test@gmail.com'; //login
	$mail->Password = 'jerestelle@18'; //mot de passe
	$mail->AddAddress('pratlong.estelle@gmail.com'); //destinataire
	$mail->SetFrom('pratlong.estelle.test@gmail.com'); //expediteur
	$mail->Subject = 'Message de ' . $safe['contact_email']; //sujet
	// le corps du mail au format HTML
	$mail->Body = '<html>

			<head>
				<style>
					h1 {
						color: green;
					}
				</style>
			</head>

			<body>
				<h1>Message de ' . $safe['contact_email'] . '</h1>
				<p>Nom: ' . $safe['contact_name'] . '</p>
				<p>Message: ' . $safe['contact_message'] . '</p>
			</body>

			</html>';

	// envoi
	if ($mail->Send()) {
		$json = [
			'status' => 'success',
			'message' => 'Merci de nous avoir contacté',
		];
		echo json_encode($json);
		
	} else {
		$json = [
			'status' => 'error',
			'message' => 'Une erreur est survenue, veuillez réessayer plus tard. Erreur: ' . $mail->ErrorInfo,
		];
		echo json_encode($json);
	}
