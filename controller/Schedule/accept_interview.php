<?php
include  "../../model/PHPMailer/src/PHPMailer.php";
include  "../../model/PHPMailer/src/Exception.php";
include  "../../model/PHPMailer/src/OAuth.php";
include  "../../model/PHPMailer/src/POP3.php";
include  "../../model/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$gmail = $_GET['email'];
$date = $_GET['date'];
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
    $mail->Body    = '<h2>Cảm ơn bạn đã dành thời gian quan tâm đến công ty CP Phần Mềm Mor và gửi CV ứng tuyển cho vị trí Back-end PHP. Chúng tôi rất mong muốn được trao đổi với bạn chi tiết hơn về công việc này, cũng như để hiểu rõ hơn về bạn.</h2><br/>
    <h2>Buổi phỏng vấn sẽ được bắt đầu vào: </h2><br/>
     
    <h2><b>Thời gian : ' . $date . '</b></h2><br/>
    <h2><b>Hình thức phỏng vấn: Online</b></h2>
    <h2><b>Link phỏng vấn: <a href="https://meet.google.com/ogs-nvuf-eha?authuser=0">https://meet.google.com/ogs-nvuf-eha?authuser=0</a></b></h2>
    <h2><b>Trân trọng!</b></h2>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mail has been sent';
} catch (Exception $e) {
    echo 'Mail could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
