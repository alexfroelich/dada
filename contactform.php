<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['messsage'];

        $mailTo = "alexfroelich05@gmail.com";
        
        mail($mailTo, $subject, $message, $name);
        header("Location: index.php?mailsend");
    }
?>