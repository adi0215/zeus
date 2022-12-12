<html>
    <div class="form">
            <form action="" method="post" id="formID">
            <table>
                
                <tr><td colspan=2><h1>Enter details to signup</h1></td></tr>
                <tr><td colspan=2><input type="text" placeholder="First Name" name="firstName" id="firstName" /></td></tr>
                <tr><td colspan=2><input type="text" placeholder="Last Name" id="lastName"/></td></tr>

               

                <tr><td colspan=2><input type="email" placeholder="Email ID" name="loginEmail" id="loginEmail" required/></td></tr>
                <tr><td colspan=2 ><input type="password" placeholder="Password" id="password" /></td></tr>
                <tr><td colspan=2 ><input type="password" placeholder="Confirm Password" id="passwordConf" /></td></tr>
                <tr>
                    <td><input type="submit" name="button1" value="SIGNUP AS HOST"/></td>
                    <td><input type="submit" name="button2" value="SIGNUP AS RENTER"/></td>
                </tr>
            </table>
            </form>
    </div>
</html>
<?php 
    
    use PragmaRX\Google2FA\Google2FA;

    if (isset($_POST['button1']) || isset($_POST['button2'])) {
    $google2fa = new Google2FA();

    $google2fa_secret = $google2fa->generateSecretKey();

    $QRcodeURL = $google2fa->getQRCodeGoogleUrl(
        "localhost/index.php",
        $user->$_POST['loginEmail'],
        $user->google2fa_secret
    );
    echo "<img src=\"<?php echo $QRcodeURL; ?>\" />";
}
?>