<?php
/*
 * The data sender of contact form
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'fgonzalez@cyanmedialab.com';                     // SMTP username
    $mail->Password   = 'appleMG1';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('fgonzalez@cyanmedialab.com', 'Caja Popular Mexicana');
    $mail->addAddress('pacho@minds.com.mx', 'Joe User');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Dudas sobre: Crédito Personal Plus CPM';
    $mail->Body    = 'Cuerpo del mensaje';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Su mensaje ha sido enviado...';
} catch (Exception $e) {
    echo "Su mensaje no ha podido ser enviado. <br><span style='color:red;'>Mailer Error</span>: {$mail->ErrorInfo}";
}
?>