<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Parse data from the POST request
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; //  SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'bouzitm180@gmail.com'; //  SMTP username
    $mail->Password = 'jljsjhcunvufyypo'; //  SMTP password
    $mail->SMTPSecure = 'tls'; // TLS or SSL encryption
    $mail->Port = 587; // Port number

    $mail->setFrom('othman@gmail.com', 'Your Name'); // Sender's email address and name
    $mail->addAddress($to); // Recipient's email address
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo 'Email sending failed. Error: ' . $mail->ErrorInfo;
}
?>