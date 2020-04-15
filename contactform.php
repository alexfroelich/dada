<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['messsage'];

        $mailTo = "alexander.froelich@outlook.com";
        echo "SENDING";
        mail($mailTo, $subject, $message, $name);
        header("Location: index.html");
    }
?>
