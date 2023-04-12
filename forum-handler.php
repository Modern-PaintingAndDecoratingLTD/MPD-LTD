<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_service = $_POST['service'];
$message = $_POST['message'];


$email_from = 'info@TRQBVA DA SE NAPRAVI KATO STANE SAITA';
$email_subject ='New Client Service Order'
$email_body=
"User Name: $name.∖n". 
"User Email: $visitor_email.∖n".
"Service: $visitor_service.∖n".
"User Message: $message.∖n";

$to= 'mpdltd245@gmail.com';

$headers = "From: $email_from ∖r∖n";
$headers. ="Reply-To: $visitor_emial"

mail($to,$email_subject,$email_body,$headers);

header("Location: contact-page.html");
?>