<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $email_from = 'adscamponline@gmail.com';
    
    $email_subject = 'New Enquiry Subbmited !'; 

    $email_body = "Name :- $name. \n".
                  "Email :- $email. \n". 
                  "Contact No :- $number. \n". 
                  "Message :- $message. \n";

        $to = "hussainabid7199@gmail.com";
        $headers = "From :- $email_from \r\n";
        $headers = "Reply-To :- $email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location: index.html");

?>