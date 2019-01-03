<?php

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");

$mail = new PHPMailer;

$mail->isSMTP(); 
//$mail->Host = 'tls://smtp.gmail.com:587';                           // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'jatin.infotech88@gmail.com';          // SMTP username
$mail->Password = 'uiamhfchrbdsecxh'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
 $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
$mail->setFrom('jatin.infotech88@gmail.com', 'CodexWorld');
$mail->addAddress('meghaexpinator@gmail.com');   // Add a recipient


$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>This is tesing mail PHP 7.2</h1>';
$bodyContent .= '<p>Thanks</b></p>';

$mail->Subject = 'Expinator';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>