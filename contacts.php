<?
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$body .= "name: " . $name . "\n";
$body .= "email: " . $email . "\n";
$body .= "phone: " . $phone . "\n";
$body .= "message: " . $message . "\n";

mail("m.navti@gmail.com","From Remote Clasroom",$body);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script>
    alert("Your email has been sent. Thank you")

  </script>
  <meta HTTP-EQUIV="REFRESH" content="0; url=contact.html">
</head>
