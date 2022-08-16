<?php
error_reporting(0);
$uploaddir_reciepents="recipients/";
$uploaddir_format_file="format/";

//php to save reciepents file in directory if uploaded
$uploadedTempFile = $_FILES['recipients_file']['tmp_name'];
$filename = $_FILES['recipients_file']['name'];
$destFile = $uploaddir_reciepents. $filename;
move_uploaded_file($uploadedTempFile, $destFile);

//php to save reciepents file in directory if uploaded
$uploadedTempFile = $_FILES['format_file']['tmp_name'];
$filename = $_FILES['format_file']['name'];
$destFile = $uploaddir_format_file. $filename;
move_uploaded_file($uploadedTempFile, $destFile);




?>