<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if(isset($_POST["button"])){
  echo "IN OTP";
  

  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Mailer = "smtp";

  $mail->SMTPDebug  = 1;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "hannah13200@gmail.com";
  $mail->Password   = "lcslpqqfmkuimcnb";

  $mail->IsHTML(true);
  $mail->AddAddress($_POST["loginEmail"], $_POST["firstName"]);
  $mail->SetFrom("hannah13200@gmail.com", "zeus rentals");
  //$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
  //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
  $otp = rand(1000, 10000);
  $mail->Subject = "OTP from Zeus";
  $content = "OTP is ".$otp;

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
    echo "<form><input type='text' id='otp'/> <input type='submit' value='submit'></form>";
  }
}
?>