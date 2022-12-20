<?php
$submitted=isset($_POST['submit'])?'true':'false';
                echo $GLOBALS['var'] . " ", $otp;
                 if (isset($_POST['submit'])) {
                     echo "INDIDE SUBMIT";
                     if($_POST['otp']==$otp){
                         if ($var==1) {
                             Redirect('search.html', false);
                             
                         }
                         else if ($var==2) {
<<<<<<< HEAD
                             Redirect('forHost.html', false);
=======
                             Redirect('forHost.php', false);
>>>>>>> 9ca3ab35c200e0427ce1abe15ea016fe93d1d5cb
                             
                         }
                     } else
                         echo "INVALID OTP";
                 } else
                     echo "NOT CLICKED SUBMIT " . $submitted;
?>