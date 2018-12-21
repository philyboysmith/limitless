<?php

header("Access-Control-Allow-Origin: *");
    if(isset($_POST["Email"])){
        $to_email = "phil@amillionmonkeys.co.uk";
        $subject = "Webform completed";
        $body = "
        From: " . $_POST["Name"] . "\r\n
        Email: " . $_POST["Email"] . "
        Company: " . $_POST["Company"] . "
        Message: \r\n
        " . $_POST["Message"];
     
        $from_email = $_POST["Email"];
     
        if (mail($to_email, $subject, $body, "From: $from_email")) {
           echo("Email successfully sent to $to_email...");
        } else {
           echo("Email sending failed...");
        }
    }
   
?>