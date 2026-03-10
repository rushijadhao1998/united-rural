<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yourgmail@gmail.com';
        $mail->Password = 'yourapppassword';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('yourgmail@gmail.com', 'Website Contact');

        $mail->addAddress('info@unitedrural.in');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Message';

        $mail->Body = "
Name: $name <br>
Phone: $phone <br>
Email: $email <br>
Message: $message
";

        $mail->send();

        echo "<script>alert('Message Sent Successfully');window.location.href='contact.php';</script>";
    } catch (Exception $e) {

        echo "<script>alert('Message Failed');window.location.href='contact.php';</script>";
    }
}
