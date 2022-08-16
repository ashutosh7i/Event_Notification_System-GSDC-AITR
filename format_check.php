<?php
//error_reporting(0);



$format="format/format.html";
if (file_exists($format)){
    echo nl2br("format.txt exist.\n");
    //echo '<script>alert("Data File exists")</script>';
    echo nl2br("reading and showing file contents\n\n");
echo nl2br(file_get_contents($format)); // get the contents, and echo it out.
}

?>