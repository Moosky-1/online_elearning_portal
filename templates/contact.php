<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$emai_from = 'Remote Classroom Student Enquiry';
$email_subject = 'New Message from student';
$email_body = "Name: $name.\n",
              "Email: $email.\n",
              "Message: $message.\n";

$to = "wiylanyuyM@cardiff.ac.uk";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


 ?>
