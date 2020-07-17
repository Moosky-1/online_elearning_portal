<?php
session_start();

if (empty($_SESSION['key']))
    $_SESSION['key'] = bin2hex(random_bytes(32));

$csrf = hash_hmac('sha256','this is some string: contact.php', $_SESSION['key'])

if(isset($_POST['submit'])){
  if (hash_equals($csrf, $_POST['csrf'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

    $emai_from = 'Remote Classroom Student Enquiry';
    $email_subject = 'New Message from student';
    $email_body = "Name: $name.\n",
                  "Email: $email.\n",
                  "Message: $message.\n",
                  "Phone: $phone.\n";

    $to = "wiylanyuyM@cardiff.ac.uk";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


  }else {
    echo "CSRF token Failed";
  }

}

 ?>
