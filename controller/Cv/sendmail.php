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
$gmail = $_GET['email'];
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ch4ut1nhtr1@gmail.com';                 // SMTP username
    $mail->Password = 'qauccgvxiivaotcg';                           // SMTP password app mail
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ch4ut1nhtr1@gmail.com', 'Mailer');

    $mail->addAddress($gmail);     // Add a recipient
    // $mail->addAddress('kinsatthu123@gmail.com', 'Huynh');               // Name is optional

    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('ch4ut1nhtr1@gmail.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recruitment Letter';
    $mail->Body    = '<h1>Cảm ơn bạn đã tham gia phỏng vấn công ty chúng tôi</h1>
                      <h2>Nếu bạn có thể phỏng vấn trước 6pm thì hãy confirm mail này và truy cập trang web để tạo tài khoản và apply lịch phỏng vấn</h2>
                      <a href="http://localhost/Recruitment-Manager/index.php" class="btn btn-block btn-danger">
                            Confirm
                        </a>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mail has been sent';
} catch (Exception $e) {
    echo 'Mail could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
