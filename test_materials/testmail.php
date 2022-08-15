<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Edebug output
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp-relay.sendinblue.com';//SMTP_Id
    $mail->SMTPAuth   = true;                        
    $mail->Username   = 'ashtechindia130@gmail.com';//SMTP username
    $mail->Password   = 'R8yQ6XJBO3SUprfK';         //SMTP password
    $mail->Port       = 587;                        //SMTP_port

    //Recipients
    $mail->setFrom('someOrganisation@ashutosh7i.me', 'Ashutosh7i');
    $mail->addAddress('ashtechindia130@gmail.com','');               //Name is optiona

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    ='
    <html>
    <head>
      <title>this is the title</title>
    </head>
    <body>
      <p>Here are the birthdays upcoming in August!</p>
      <table>
        <tr>
          <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
        </tr>
        <tr>
          <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
        </tr>
        <tr>
          <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
        </tr>
      </table>
    </body>
    </html>
    ';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
