<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: ".$name."<" .$email.">\r\n";

$recipient = "samuelmongare2002@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error couldnt send");

echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.9">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact success</title>
        <link rel="stylesheet" href="page.css">
        <link rel="stylesheet" href="contact.css">
        
    </head>
    <body>
        <div class="container_contact">
            <h1>Thank you for contacting me. I will get back to you as soon as possible</h1>
            <p class="back">Go back to the <a href="index.html">Homepage</a></p>
        </div>
    </body>
';
?>