<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone =  $_POST['telephone'];
    $message =  $_POST['message'];
    $from = 'From: yogajoin.com'; 
    $to = 'mail.ram450@gmail.com'; 
    $subject = 'Customer Inquiry';
    $body = "From: $name\n E-Mail: $email\n Mobile No.:\n $telephone\n Message:\n $message";
   
    if (mail ($to, $subject, $body, $from)) { 
        echo 'Thank you for your email. we will contact you as soon as possible.';
    } else { 
        echo 'Something went wrong, go back and try again!'; 
    }
?>