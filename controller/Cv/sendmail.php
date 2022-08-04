<?php
include  "../../model/PHPMailer/src/PHPMailer.php";
include  "../../model/PHPMailer/src/Exception.php";
include  "../../model/PHPMailer/src/OAuth.php";
include  "../../model/PHPMailer/src/POP3.php";
include  "../../model/PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);  
// print_r($mail);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'huynhthaihuy64@gmail.com';                 // SMTP username
    $mail->Password = 'zkgcbvgmglmcbtsn';                           // SMTP password app mail
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('huynhthaihuy64@gmail.com', 'Mailer');

    $mail->addAddress('ch4ut1nhtr1@gmail.com', 'Huy');     // Add a recipient
    $mail->addAddress('kinsatthu123@gmail.com', 'Huynh');               // Name is optional

    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('huynhthaihuy64@gmail.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recruitment Letter';
    $mail->Body    = '<a style="color:red">Pass</a>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Mail has been sent';
} catch (Exception $e) {
    echo 'Mail could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>