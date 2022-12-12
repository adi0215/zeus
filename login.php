
<html>
    <title>Login page</title>
    <head>
        
        <style>
            td{
                line-height: 1.5;
                padding:10px;
            }
            input{
                height: 40px;
                width:100%;
                border-radius:32px;
                font-size:20px;
            }
            a:link {
                color: black;
                background-color: transparent;
                text-decoration: none;
                padding: 10px 0;
            }
            a:visited{
                color:black;
            }
            a:hover{
                text-decoration:underline;
            }
            input[type=submit]{
                height:40px;
                font-family: montserrat;
                background-color: #333333;
                color:white;
                width: 100%;
                border-radius:32px;
                font-size:20px;
            }
            input[type=submit]:hover{
                background-color: #D9D9D9;
                color:black;
                font-weight: 300;
            }
            @font-face {
                font-family: montserrat;
                src: url(Montserrat-VariableFont_wght.ttf);
            }
            .form {
              margin: auto;
              margin-top:10%;
              padding:40% 0;
              width: 60%;
              background-color: rgba(129,126,126,.72);
              padding: 10px;
              text-align: center;
              border-radius: 32px;
            }
            html  {
                font-family: montserrat;
                font-weight:300;
            
                background: url(images/car1.jpg);
                background-repeat: no-repeat;
                background-size:cover;
                box-shadow: inset 0 0 0 1000px   rgba(0,0,0,.5);
            }
            h1 {
                font-family: montserrat;
                font-weight:100;
                font-size:48px;
                text-align: center;
            }
            td{
                text-align: center;
            }
            table{
                margin:auto;
            }
            #loginEmail{
                background-image:url(images/PFP.jpeg);
                background-repeat: no-repeat;
                background-size:35px 35px;
                padding-left:40px;
            }
            #password{
                background-image:url(images/pwd.jpeg);
                background-repeat: no-repeat;
                background-size:25px 25px;
                padding-left:40px;
                background-position: 4px;
            }
            </style>
           
    </head>
    <body>
        <div class="form">
            <form action="" method="post">
            <table>
                
                    <tr><td colspan=2><h1>Enter details to login</h1></td></tr>
                    <tr><td colspan=2><input type="email" placeholder="Email ID" name="loginEmail" id="loginEmail" required/></td></tr>
                    <tr><td colspan=2 ><input type="password" placeholder="Password" name="password" id="password" required/></td></tr>
                    <tr><td colspan=2><input type="submit" value="LOGIN"/></td></tr>
                    <tr>
                    <td><a href="#forgotPwd" color="#000000">Forgot Password?</a></td>
                    <td><a href="signup.php">New User?<b>Signup</b></a></td>
                    </tr>
                
            </table>
        </form>
        </div>
        <?php
        $login=false;
        $showerror=false;
        include ("connection.php");
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $username=$_POST["loginEmail"];
            $password=$_POST["password"];
            $sql="select * from renter_login where Email='$username' AND (RPassword='$password')";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
            if($num==1){
                $login=true;
                session_start();
                $_session['loggedin']=true;
                $_session['email']=$_POST["loginEmail"];
               
                header("location:Homepage.html");
            }
            else{
                $showerror="Invalid credentials";
            }
    }




?>
    </body>
</html>
