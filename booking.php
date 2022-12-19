<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
            font-family: 'Montserrat', sans-serif;
        }
        span.logo{
            font-size: 78px;
            position:absolute;
            left:50px;
            top:10px;
        }
        .title{
            position: absolute;
            left: 10.45%;
            right: 26.48%;
            top: 26%;
            bottom: 46.49%;
            font-weight: 528;
            font-size: 40px;
            line-height: 127.9%;
            color: #000000;
            text-shadow: 0px 8.14286px 8.14286px rgba(0, 0, 0, 0.25);
        }
        .head{
            position: relative;
            width: 1536px;
            height: 140px;
            left: -10px;
            top: -10px;
            background: #D9D9D9;
        }
        h1{
            color:white;
            font-size: 44px;
            font-weight: 400;
        }
        
</style>
<header class="head">
    <!-- <img src="image.png" alt=""> -->
    <span class="logo">Z</span>
    <a href="Homepage.html"><span class="title">ZEUS RENTALS</span></a>
    
    </header>
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
                ob_end_clean();

                    echo "<h1>Email sent successfully</h1>";
                    ?>
</body>
</html>