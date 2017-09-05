<?php 
if(!isset($_POST['submit']))
{
echo "error; you need to submit the form!;
}
$name = $_POST['sender'];
$visitor_email = $_POST['senderEmail'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email))
{
echo "name and email are mandatory!;
}

$email_from = 'perilanglois7@gmail.com';
$email_subject = "new form";
$email_body = "new message from $name.\n" "email: $visitor_email\n" "message: \n $message"

$to = "perilanglois7@gmail.com";
$headers = "from: $email_from \r\n"; 

mail($to,$email_subject,$email_body,$headers);
