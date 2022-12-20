<?php
include('connection.php');

if($_SERVER['REQUEST_METHOD']=="POST"){
    

    $cb= $_POST['carbrand'];
    $cn= $_POST['carName'];
    $col= $_POST['color'];
    $cno= $_POST['carNo'];
    $ft= $_POST['fuelType'];
    $ct= $_POST['carType'];
    $sn= $_POST['noSeats'];
    $tr= $_POST['transmission'];
    $city= $_POST['city'];
    $kmd= $_POST['kmDriven'];
    $pin=  $_POST['pincode'];
    $price= $_POST['price'];


	

	

	
	
	

    $query="insert into car_details (RegNo,Brand,Car_Type,KM_Driven,Fuel,Transmission,Capacity,Price,Car_Name)	values ('$cno','$cb','$ct','$kmd','$ft','$tr','$sn','$price','$cn')";
    $qrres=mysqli_query($con,$query);
    

    header("location:Homepage.html");

}


?>

<html>
    <title>Car registration</title>
    <head>
        <style>
            td{
                line-height: 1.5;
                padding:10px;
            }
            input{
                height: 50px;
                width:100%;
                border-radius:32px;
                font-size:20px;
                padding-left:40px;
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
            button{
                height:50px;
                font-family: montserrat;
                background-color: #333333;
                color:white;
                width: 100%;
                border-radius:32px;
                font-size:20px;
            }
            button:hover{
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
              margin-top:7%;
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
            
                background:url(car2.jpeg);
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
            #carBrand{
                background-image:url(carBrand.jpeg);
                background-repeat: no-repeat;
                background-size:25px 25px;
                background-position: 4px;
            }
            #carNo{
                background-image:url(carNo.jpeg);
                background-repeat: no-repeat;
                background-size:25px 25px;
                background-position: 4px;
            }
            #fuelType{
                padding-left: 50px;
                background-image:url(fuelType.jpeg);
                background-repeat: no-repeat;
                background-size:35px 25px;
                background-position: 5px;
            }
            #kmDriven{
                background-image:url(kmDriven.jpeg);
                background-repeat: no-repeat;
                background-size:25px 25px;
                background-position: 4px;
            }
            #city{
                background-image:url(location.jpeg);
                background-repeat: no-repeat;
                background-size:25px 25px;
                background-position: 4px;
            }
            select{
                width:100%;
                border-radius:32px;
                height: 50px;
                font-size:20px;
                padding-left:40px;
            }
            </style>
           
    </head>
    <body>
        <form action="#" method="post">

            <div class="form">
                <table>
                
                <tr><td colspan=2><h1>Enter your car details</h1></td></tr>
                <tr>
                    <td><input type="text" placeholder="Car Brand" id="carBrand" name='carbrand' /></td>
                    <td><input type="text" placeholder="Car Name" id="carName" name='carName'/></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Color" id="color" name='color'/></td>
                    <td><input type="text" placeholder="Car Number" id="carNo" name='carNo'/></td>
                </tr>
                <tr>
                    <td>
                        <div class="custom-select">
                            <select name="fuelType" placeholder="Fuel Type" id="fuelType">
                                <option value="" disabled selected hidden >Fuel Type</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electric</option>
                                <option value="cng">CNG</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <select name="carType" placeholder="Car Type" id="carType">
                            <option value="" disabled selected hidden >Car Type</option>
                            <option value="Sedan">Sedan</option>
                            <option value="SUV">SUV</option>
                            <option value="Luxury">Luxury</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="noSeats" id="noSeats">
                            <option value="" disabled selected hidden >No of Seats</option>
                            <option value="5">5 Seater</option>
                            <option value="7">7 Seater</option>
                        </select>
                    </td>
                    <td>
                        <select name="transmission" id="transmission">
                            <option value="" disabled selected hidden>Transmission</option>
                            <option value="auto">Automatic</option>
                            <option value="manual">Manual</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="city" placeholder="City" id="city" name='city'/></td>
                    <td><input type="kmDriven" placeholder="KM Driven" id="kmDriven" name='kmDriven'/></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Pincode" id="pincode" name='pincode'/></td>
                    <td><input type="text" placeholder="Price" id="price" name='price'/></td>
                </tr>
                
                <tr>
                    <td colspan=2><button type="submit" onclick=getInfo()>SUBMIT</button></td>
                </tr>
                
            </table>
        </div>
        </form>
        <script>
            function getInfo(){
                var el = document.getElementById("mobile").value;
                var pattern = /[0-9]{10}/;
                if (pattern.test(el)){
                    alert(el);
                }
                else{
                    alert("Invalid phone no");
                }
            }
        </script>
    </body>
</html>
