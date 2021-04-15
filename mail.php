<?php

    $Name = $_POST['name'];
    $Subject = $_POST['subject'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];

    $email_from = 'resume@brilve.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $Name.\n".
                "User Email: $Email.\n".
                "User Message: $Message.\n";
                
    $to = "clovesbrinda@gmail.com";
    
    $headers = "From: $email_from \r\n";
    
    $headers .= "Replay-to: $email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");
    
                
    

