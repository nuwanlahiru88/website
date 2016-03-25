<?php

if(empty($_POST['email']) || empty($_POST['name']) || empty($_POST['message'])) 
    {
   
    echo "Please enter a value into all text boxes";
         
    }
    else
    {
    
    $recipient="bestlifese@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

   echo "Thank you! Your message has been sent"."<br>";
   echo $sender."<br>";
   echo $senderEmail."<br>";
   echo $message;
   //header('Location: contact.html');
    
    
    }
?>