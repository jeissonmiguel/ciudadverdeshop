<?php


require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
// require 'vendor/autoload.php';

// // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ciudadverdeshoporiginal@gmail.com';                     // SMTP username
    $mail->Password   = '80815886InicioVentas';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ciudadverdeshoporiginal@gmail.com', 'admin');
    $mail->addAddress('ciudadverdeshoporiginal@gmail.com', 'user');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'muy importante';
    $mail->Body    = 'este es un cambio de contraseña!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'se envio correctamente';
} catch (Exception $e) {
    echo "hubo un error al enviar el correo: {$mail->ErrorInfo}";
}