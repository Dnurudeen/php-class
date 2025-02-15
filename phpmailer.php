<?php
// ini_set("include_path", '/home/mmxgftdd/php:' . ini_get("include_path") );

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['submit'])){


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //   $to = "info@ayoolasuite.com";
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $terms = $_POST['terms'];

    $fullname = $fname . ' ' . $lname;

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '8bfab4ee99d8c2';                     //SMTP username
    $mail->Password   = '82e3ca9a3686e5';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('nurdeendaniju@yahoo.com', "Deen's Code");
    $mail->addAddress('nurdeendaniju@yahoo.com', 'Mr Deen');              //Name is optional
    $mail->addAddress($email, $fullname);
    $mail->addReplyTo('noreply@mail.com', 'Mr Code');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Alert! from Deen.";
    $mail->Body    = "Name: $fname $lname <br>" . "Email: $email <br>" . "Terms: $terms <br><br><br><br> Thanks for filling out!";

    $mail->send();
        echo "<div style='background-color: green; padding: 30px; color: white; text-align: center; margin-top: 35px; font-size: 20px;'>Congratulations! Your message is been sent</div>"; 
        // echo "<script>alert('Message has been sent successfully')</script>";
} catch (Exception $e) {
    echo "<div style='background-color: red; padding: 30px; color: white; text-align: center; margin-top: 35px; font-size: 20px;'>Message not successfully sent</div>";    
}

}