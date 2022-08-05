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
    $mail->Body    = '<h2>Cảm ơn bạn đã dành thời gian tham gia tuyển dụng vị trí lập trình viên Back End của công ty.</h2><br/>
    <h2>Chúng tôi thực sự ấn tượng bởi hồ sơ và kĩ năng của bạn cũng như những gì bạn thể hiện trong suốt buổi phỏng vấn. </h2><br/>
    <h2>Tuy nhiên, chúng tôi rất tiếc phải thông báo với bạn rằng chúng tôi đã quyết định lựa chọn một ứng viên khác phù hợp hơn với vị trí lập trình viên Back End và yêu cầu của công việc tại thời điểm này.</h2><br/>
    
    <h2>Chúng tôi tin rằng bạn có thể phù hợp với công ty chúng tôi cho những vị trí trong tương lai. Chúng tôi sẽ lưu lại hồ sơ của bạn và xin phép liên hệ lại với bạn khi có cơ hội phù hợp. </h2><br/>
     
    <h2><b>Xin chúc bạn mọi điều may mắn trong sự nghiệp.</b></h2><br/>
    
    <h2><b>Trân trọng!</b></h2>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mail has been sent';
} catch (Exception $e) {
    echo 'Mail could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
