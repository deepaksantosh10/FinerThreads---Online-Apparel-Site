<?php
$conn = mysqli_connect("localhost", "root", "","finerthreads");
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$Email = $_POST['Email'];
if(!(empty($Email)))
{
    echo"test";
}
$sql = "SELECT * FROM `tailormade` WHERE Email='$Email';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$Email = $row['Email'];
$Name = $row['Firstname'];
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
 
                  
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'finerthreads1234@gmail.com';                    
    $mail->Password   = 'bxqzjchjoahmtgvr';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465; 
    $mail->addAttachment('catalogue.pdf');                                

  
    $mail->setFrom('finerthreads1234@gmail.com', 'Finer Threads');

    $mail->addAddress($Email); 


    $mail->isHTML(true);                                 
    $mail->Subject = 'Order Confirmation';
    $mail->Body    = '<h3>Thank you for shopping with Finerthreads!</h3> <br>Hi, This is to confirm your order placed at Finerthreads. We have received your order and we are getting it ready to be shipped. <br>We will contact you once your package is shipped.<br><br><mark>YOUR ORDER HAS BEEN CONFIRMED.</mark>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Email has been sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>