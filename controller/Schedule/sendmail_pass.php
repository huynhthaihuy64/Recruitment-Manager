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
    $mail->addCC('ch4ut1nhtr1@gmail.com');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recruitment Letter';
    $mail->Body    = '<h2>Chúng tôi chân thành cảm ơn sự quan tâm của bạn đối với công ty CP Phần Mềm MOR (MOR JSC) cũng như vị trí thực tập mà bạn đã ứng tuyển.</h2> <br/>

    <h2>Sau quá trình xem xét, công ty đã quyết định mời bạn vào thực tập tại trụ sở của công ty.</h2> <br/>
    
      <b>-  Địa chỉ: Công ty CP Phần Mềm MOR - CN Đà Nẵng.</b><br/>
    
      <b> 112 Nguyễn Hữu Thọ, Phường Hoà Thuận Tây, Quận Hải Châu, Tp Đà Nẵng.</b><br/>
      <h2><b>Trân Trọng!</b></h2>';

    $mail->send();
    echo 'Mail has been sent';
} catch (Exception $e) {
    echo 'Mail could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
