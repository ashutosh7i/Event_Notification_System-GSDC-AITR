<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

//todo
//initialize email function.-done
//read format and find variables.-done
//code to replace #^ with user name.-done
//code to replace #@ with user email.-done
//Adding data and time in place of DATATIME.-done

//Initializing email function.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);


//code to seperate values using -&&- in reciepents.txt-
$recipients=file_get_contents("recipients/recipients.txt"); //open
$lines = explode("\n", $recipients);   //seperate based on newline
foreach($lines as $line){              //for each line do-
    $parsed=explode('-&&-', $line);;                  // , to create a array of reciepents.
$format_default=file_get_contents("format/format.html");
//code to replace #^ with username
$after_replace_username=str_replace('#^',$parsed[0],$format_default);
//code to replace #@ with user email.
$after_replace_email=str_replace('#@',$parsed[1],$after_replace_username);
//code to replace DATETIME with current Data&Time.
$after_date_time=str_replace('DATETIME',(date("Y/m/d")." at ".date("h:i:sa")),$after_replace_email);
//how it looks after replace-
//echo($after_date_time);
}



//code to seperate values using -&&- in reciepents.txt
$recipients=file_get_contents("recipients/recipients.txt"); //open
$lines = explode("\n", $recipients);   //seperate bases on newline
foreach($lines as $line){              //for each line do-
    $parsed=explode('-&&-', $line);    //seperate using -&&-
    echo($parsed[1]); //will get all names seperated by a comma
    echo(",");                  // , to create a array of reciepents.

//code to read subject of mail
$mail_subject=file_get_contents("subject.txt");
try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Edebug output
    $mail->isSMTP();                                            
    $mail->Host       = 'in-v3.mailjet.com';//SMTP_Id
    $mail->SMTPAuth   = true;                        
    $mail->Username   = '51c4d47dd1fb90c0b19e40a558f47e71';//SMTP username
    $mail->Password   = '2d411f4ffd02050f92e0d430fca2d296';         //SMTP password
    $mail->Port       = 587;                        //SMTP_port

    //Recipients
    $mail->setFrom('ashtechindia130@gmail.com', 'Ashutosh7i');
    //$mail->addAddress('ashtechindia130@gmail.com','');     //=from recipients.txt;.'create a script with emails seperated with , to be used in process .txt';
    $mail->addAddress($parsed[1]);

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);      //Set email format to HTML
    $mail->Subject = $mail_subject;    //#% from format.txt;
    $mail->Body    = $after_date_time;
    $mail->send();
    echo 'Message has been sent';
    echo nl2br("\n\n");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo nl2br("\n\n");
}
}
?>