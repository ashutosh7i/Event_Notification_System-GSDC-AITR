<?php
//code to seperate values using -&&- in reciepents.txt
$recipients=file_get_contents("recipients/recipients.txt"); //open
$lines = explode("\n", $recipients);   //seperate bases on newline

foreach($lines as $line){              //for each line do-
    $parsed=explode('-&&-', $line);    //seperate using -&&-
    //echo($parsed[1]); //will get all names seperated by a comma
    //echo(",");                  // , to create a array of reciepents.



$format=file_get_contents("format/format.txt");
//code to replace #^ with username
$after_replace_username=str_replace('#^',$parsed[0],$format);
//code to replace #@ with user email.
$after_replace_email=str_replace('#@',$parsed[1],$after_replace_username);
//code to replace DATETIME with current Data&Time.
$after_date_time=str_replace('DATETIME',(date("Y/m/d")." at ".date("h:i:sa")),$after_replace_email);
//how it looks after replace-
echo($after_date_time);
}
?>

