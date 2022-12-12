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
    include('connection.php');
    $query = "insert into signup(firstName,lastName,Email,Password,userType) values('".$_SESSION["firstName"]."','".$_SESSION["lastName"]."','".$_SESSION['loginEmail']."','".$_SESSION['password']."'";
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
                $query = $query . ",\"HOST\")";
            if (!mysqli_query($con, $query)) {
                die("ERROR ".mysqli_error($con));
            }
                 Redirect('forHost.html', false);
                 
             }
             else if ($_SESSION['buttonPressed']==2) {
                $query = $query . ",\"RENTER\")";
                echo $query;
                if (!mysqli_query($con, $query)) {
                    die("ERROR ".mysqli_error($con));
                }
                 Redirect('Homepage.html', false);
                 
             }
         } else
             echo "<script>document.getElementById('otp').placeholder='INVALID OTP Please Enter Again'</script>";
     }
         



?>        