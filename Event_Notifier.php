<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event_Notifier by @ashutosh7i🔥</title>
    <meta name="description" content="A Programme to Notify a group of peoples about an Event on their E-mail id's in a single click">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>this is the homepage of Event_Notifier.php </h1>

    <!--creating a php applet to check if both files pre-exists, if yes, then tell user about it-->
    <?php
    $recipents_filename = "recipients/recipients.txt";
    $format_filename = "format/format.txt";

    if (file_exists($recipents_filename)&&file_exists($format_filename)){
        echo "Both File already exist, Proceed Further.";}
    elseif (file_exists($format_filename)){
        echo "format.txt File already exist,Now uplode recipents.txt";}
    elseif (file_exists($recipents_filename)){
        echo "recipents.txt File already exist,Now uplode format.txt";}
    
    ?>

        <!--taking the list of recipents-->
        <h2>Step1: Choose the file containing list of Recipents(recipents.txt)</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" accept=".txt" name="recipients_file">
            <input type="submit" value="Submit list">
        </form>

        <!--taking the format to send-->
        <h2>Step2: Choose the file containing Format of email(format.txt)</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" accept=".txt" name="format_file">
            <input type="submit" value="Submit format" />
        </form>
        <br/>
        
        <h2>Step3: Enter the Subject of email(</h2>
        <form method="post">
    Enter The Subject Here:<br>
    <input type="text" name="textdata"><br>
    <input type="submit" name="submit">
  </form>
  <?php
              
              if(isset($_POST['textdata']))
              {
              $data=$_POST['textdata'];
              $fp = fopen('subject.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              ?>
        <br/><br/>
        <!--button to show contents of recipients.txt in a new tab-->
        <form action="recipients_check.php">
            <input type="submit" value="Check and View recipients files">
        </form>
        <br/><br/>
        <!--button to show contents of format.txt in a new tab-->
        <form action="format_check.php">
            <input type="submit" value="Check and View Format">
        </form>
        <!--Creating the final send Button, which will send the mails after processing all data.-->
        <centre>
            <form action="process.php">
                <h4>Be really sure before sending.</h4>
                <input type="submit" value="SEND ALL💣🔥">
            </form>
        </centre>



        <script src="" async defer></script>
</body>

</html>