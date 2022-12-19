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
                             Redirect('forHost.php', false);
                             
                         }
                     } else
                         echo "INVALID OTP";
                 } else
                     echo "NOT CLICKED SUBMIT " . $submitted;
?>