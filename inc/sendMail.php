<?php

require 'vendor/autoload.php';
require __DIR__ . '/../config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;
$mail->CharSet  = 'UTF-8';
$mail->isSMTP();
$mail->isHTML(true);
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Port       = 465;
$mail->SMTPSecure = 'ssl';
$mail->Username   = MAIL_USERNAME;
$mail->Password   = MAIL_PASSWORD;
$mail->AddAddress(MAIL_TO);
$mail->SetFrom(MAIL_FROM);
$mail->Subject = 'Message de ' . htmlspecialchars($safe['contact_email'], ENT_QUOTES, 'UTF-8');

$mail->Body = '<html><head><style>h1{color:green}</style></head><body>'
    . '<h1>Message de ' . htmlspecialchars($safe['contact_email'],  ENT_QUOTES, 'UTF-8') . '</h1>'
    . '<p>Nom : '       . htmlspecialchars($safe['contact_name'],   ENT_QUOTES, 'UTF-8') . '</p>'
    . '<p>Message : '   . nl2br(htmlspecialchars($safe['contact_message'], ENT_QUOTES, 'UTF-8')) . '</p>'
    . '</body></html>';

if ($mail->Send()) {
    $json = [
        'status'  => 'success',
        'message' => 'Merci de nous avoir contacté',
    ];
} else {
    $json = [
        'status'  => 'error',
        'message' => 'Une erreur est survenue, veuillez réessayer plus tard.',
    ];
}
echo json_encode($json);
exit;
