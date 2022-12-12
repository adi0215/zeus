
    <html>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
       
        
        <script src="js/validate.js"></script>
        <script src="js/airtable.js"></script>
    

        <title>Signup page</title>
        <head>
        <link rel="stylesheet" href="style.css"/>
            
        </head>
        <body>

            <div class="form">
                <form action="" method="post" id="formID">
                <table>
                    
                    <tr><td colspan=2><h1>Enter details to signup</h1></td></tr>
                    <tr><td colspan=2><input type="text" placeholder="First Name" name="firstName" id="firstName" required/></td></tr>
                    <tr><td colspan=2><input type="text" placeholder="Last Name" id="lastName"/></td></tr>

                

                    <tr><td colspan=2><input type="email" placeholder="Email ID" name="loginEmail" id="loginEmail" required/></td></tr>
                    <tr><td colspan=2 ><input type="password" placeholder="Password" id="password" required/></td></tr>
                    <tr><td colspan=2 ><input type="password" placeholder="Confirm Password" id="passwordConf" required/></td></tr>
                    <tr>
                        <td><input type="submit" name="button1" value="SIGNUP AS HOST"/></td>
                        <td><input type="submit" name="button2" value="SIGNUP AS RENTER"/></td>
                    </tr>
                </table>
                <?php
                session_start();
            function Redirect($url, $permanent = false)
            {
                header('Location: ' . $url, true, $permanent ? 301 : 302);
                exit();
            }
            
        
            
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

                //include 'global.php';
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

                if (isset($_POST['button1']) || isset($_POST['button2'])) {
                    $_SESSION['buttonPressed'] = isset($_POST['button1']) ? 1 : 2;
                    $_SESSION['otp'] = rand(1000, 10000);
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
                    $mail->AddAddress($_POST["loginEmail"], $_POST["firstName"]);
                    $mail->SetFrom("hannah13200@gmail.com", "zeus rentals");
                    //$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
                    //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
                
                    $mail->Subject = "OTP from Zeus";
                    $content = "OTP is " . $_SESSION['otp'];

                    $mail->MsgHTML($content);


                    if (!$mail->Send()) {
                        echo "Error while sending Email.";
                        var_dump($mail);
                        exit;
                    }

                    echo "Email sent successfully";

                    ob_end_clean();
                    Redirect("enterOTP.php", false);
                }
                ?>
                
            </form>
            </div>
        
        </body>
    </html>
