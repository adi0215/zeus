<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    //$con=mysqli_connect("localhost","root","","zeus");
   // $res=mysqli_query($con,"Select * from car_details where Regno in (select HRegNo from car_details,host where HRegNo=RegNo and city='$city1')");
  
?>


    <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

                if (isset($_POST['booking'])) {
                   
                    ob_start();

                    $mail = new PHPMailer();
                    $mail->IsSMTP();
                    $mail->Mailer = "smtp";

                    $mail->SMTPDebug = 1;
                    $mail->SMTPAuth = TRUE;
                    $mail->SMTPSecure = "tls";
                    $mail->Port = 587;
                    $mail->Host = "smtp.gmail.com";
                    $mail->Username = "hannah13200@gmail.com";
                    $mail->Password = "lcslpqqfmkuimcnb";

                    $mail->IsHTML(true);
                    $mail->AddAddress($_SESSION["email"], $_SESSION["email"]);
                    $mail->SetFrom("hannah13200@gmail.com", "zeus rentals");
                    //$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
                    //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
                
                    $mail->Subject = "Booking from Zeus";
                    $content = "Booked ".$_POST['booking'];

                    $mail->MsgHTML($content);


                    if (!$mail->Send()) {
                        echo "Error while sending Email.";
                        var_dump($mail);
                        exit;
                    }
                }

                    echo "Email sent successfully";
                    ?>
</body>
</html>