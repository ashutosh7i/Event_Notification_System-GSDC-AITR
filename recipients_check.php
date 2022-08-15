<?php
//error_reporting(0);

$recipients="recipients/recipients.txt";
if (file_exists($recipients)){
    echo nl2br("recipients.txt exist.\n");
    //echo '<script>alert("Data File exists")</script>';
    echo nl2br("reading and showing file contents\n\n");
echo nl2br(file_get_contents($recipients)); // get the contents, and echo it out.
}

?>