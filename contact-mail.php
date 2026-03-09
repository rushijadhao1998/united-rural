<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$to = "info@unitedrural.in";

$subject = "New Contact Message";

$body = "
Name: $name
Phone: $phone
Email: $email

Message:
$message
";

$headers = "From: United Rural Website <info@unitedrural.in>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if(mail($to,$subject,$body,$headers)){
echo "<span style='color:green;font-weight:600;'>Message sent successfully!</span>";
}else{
echo "<span style='color:red;font-weight:600;'>Server error. Please try again.</span>";
}

}

?>