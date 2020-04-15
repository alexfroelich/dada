<?php
  
        $name = "Name";
        $subject ="Subject";
        $message ="Message";

        $mailTo = "alexander.froelich@outlook.com";
        echo "SENDING";
        mail($mailTo, $subject, $message, $name);
     
  
?>
