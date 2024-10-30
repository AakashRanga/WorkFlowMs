<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                     // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';              // Set the SMTP server
    $mail->SMTPAuth   = true;                            // Enable SMTP authentication
    $mail->Username   = 'akashranga27@gmail.com';        // SMTP username
    $mail->Password   = 'vuvwtlnwxymwjtun';           // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption; 'PHPMailer::ENCRYPTION_SMTPS' for SSL
    $mail->Port       = 587;                             // TCP port to connect to

    // Recipients
    $mail->setFrom('akashranga27@gmail.com', 'Aakash Send Mail');
    $mail->addAddress('clarencepraison32303@gmail.com', 'Vikas'); // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thankyou For Your Response';
    $mail->Body    = 'UserName: <b>Aakash</b><br> Email: <b>ak@gmail.com</b><br>';
    $mail->AltBody = 'This is Testing Mail';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}