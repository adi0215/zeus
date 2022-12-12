<html>
    <head>
        <link rel="stylesheet" href=style.css>
    </head>
    <body>
    <div class="form">

        <form action='' method='post'>
            <input type='text' id='otp' name='otp' placeholder='Enter OTP'/> 
            <input type='submit' name='submit' value='submit'/>
        </form>
    </div>
    </body>
</html>
<?php
session_start();
    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
    //include 'global.php';
     $submitted=isset($_POST['submit'])?'true':'false';
                    
     if (isset($_POST['submit'])) {
         echo "INDIDE SUBMIT ".$_POST['otp']." ".$_SESSION['otp'];
         if($_POST['otp']==$_SESSION['otp']){
             if ($_SESSION['buttonPressed']==1) {
                
                 Redirect('forHost.html', false);
                 
             }
             else if ($_SESSION['buttonPressed']==2) {
                 Redirect('search.html', false);
                 
             }
         } else
             echo "<script>document.getElementById('otp').placeholder='INVALID OTP Please Enter Again'</script>";
     }
         



?>        