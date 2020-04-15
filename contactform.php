<?php
  
        $name = "Name";
        $subject ="Subject";
        $message ="Message";

        $mailTo = "alexfroelich05@gmail.com";
        echo "SENDING";
        mail($mailTo, $subject, $message, $name);
     
  
?>
