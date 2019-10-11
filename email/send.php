<?php

const SMTP_HOST = "smtp.example.com";   // SMTP server address
const SMTP_USER = "info@example.com";   // SMTP username
const SMTP_PASS = "secret";             // SMTP password
const SMTP_PORT = 587;                  // Default SMTP port

const SUBJECT = "Test mail";            // Email subject
const TEMPLATE_PATH = "template.html";  // HTML template as email body

const RECIPIENT = [
    'ADDR' => "john@example.com",           // Recipient's address
    'NAME' => "John Doe"                // Optional, you can leave empty
];
const SENDER = [
    'ADDR' => "jane@example.com",           // Send as from this address, may be fictive
    'NAME' => "Jane Doe"                // Optional, you can leave empty
];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$body = file_get_contents(TEMPLATE_PATH);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = SMTP_HOST;                              // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = SMTP_USER;                              // SMTP username
    $mail->Password   = SMTP_PASS;                              // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = SMTP_PORT;                              // TCP port to connect to

    //Recipients
    $mail->setFrom(SENDER['ADDR'], SENDER['NAME']);             // Add sender's address
    $mail->addAddress(RECIPIENT['ADDR'], RECIPIENT['NAME']);    // Add a recipient

    // HERE YOU CAN ADD MORE OPTIONS FROM README

    // Content
    $mail->isHTML(true);                                 // Set email format to HTML
    $mail->Subject = SUBJECT;                                   // Email subject
    $mail->Body    = $body;                                     // Email body
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}