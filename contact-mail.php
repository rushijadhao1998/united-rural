<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "info@unitedrural.in";

$body = "
Name: $name
Email: $email
Phone: $phone
Subject: $subject

Message:
$message
";

mail($to,$subject,$body);

header("Location: contact.php?success=1");

?>