<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from ='dsc_mmmut.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
                "User Email: $visitor_email.\n". 
                "subject: $subject.\n". 
                "User Message: $message .\n";
$to = 'vs170801.01@gmail.com'; 

$headers = "From: $email-form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers );
header("Location: contact.html");


?>