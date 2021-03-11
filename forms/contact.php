<?php
include_once 'inc/connect.php';
	$req = $bdd->query('SELECT * FROM config');
	$a = $req->fetch();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailermaster\src\Exception.php';
require 'PHPMailermaster\src\PHPMailer.php';
require 'PHPMailermaster\src\SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mail.yahoo.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'devcomclub@yahoo.com';                     // SMTP username
    $mail->Password   = 'qwbg fdwm ccwk tulp';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('devcomclub@yahoo.com', $a["prenom"].' '.$a["nom"]);
    $mail->addAddress($_POST["mail"]);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST["objet"];
    $mail->Body    = $_POST["message"];
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    //header('Location: ../index.php');

?>
