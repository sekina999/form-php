<?php
       if (isset($_POST['submit'])) {
          $name= $_POST['name'];
          $subject= $_POST['subject'];
          $mailFrom= $_POST['mail'];
          $message= $_POST['message'];

          $mailTo = "badreldinsekina@gmail.com";
          $headers = "From: ".$mailFrom;  //get the name of person who sent the email
          $txt = "You have recieved an email from: " .$nameFrom." .\n\n" .$message;

          mail($mailto, $subject, $txt, $headers);
          header("Location: index.php?mailsend");

       }






 ?>
