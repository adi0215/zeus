<?php include('connection.php')?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Montserrat', sans-serif;
        background-color: #202020;
    }
    .head{
        position: relative;
        width: 1536px;
        height: 140px;
        left: -9px;
        top: -10px;
        background-color: #d9d9d9;
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
    .btnn{
        position: absolute;
        width: 108px;
        height: 43px;
       
        border-radius: 32px;
        border: 2px solid black;

    }
    button.abs{
        position: absolute;
        right: 333px;
        top: 45px;
    }
    button.cs{
        position: absolute;
        right: 205px;
        top: 45px;
    }
    img.usr{
        height: 50px;
        width: 50px;
        border: 2px solid;
        border-radius: 50px;
        position: absolute;
        top: 40px;
        right: 70px;
    }
    section.filter{
        width: 402px;
        height: 688px;
        background-color: #ffffff;
        border-radius: 32px;
    }
    div.filterhead{
        width: 402px;
        height: 50px;
        background-color: #d9d9d9;
        text-align: center;
        border-top-left-radius: 32px;
        border-top-right-radius: 32px;
    }

    .fl{
        position: relative;
        top: 15px;
    }
    span.fl{
        font-weight: 550;
        font-size: 20px;
    }
    img.fl{
        position: relative;
        top: 20px;
    }
    .type>span{
        font-size: 16px;
        position: relative;
        top: 10px;
        font-weight: bold;
    }
    .type{
        text-align: center;

    }
    div.cnt>img{
        margin-left:50px ;
        margin-top: 10px;
        border: 1px solid;
        border-radius: 10px;
    }
    .img1{
        height: 50px;
        width: 60px;
    }
    section.filter{
        display: inline-block;
        position: relative;
        top: 62px;
    }
    .sc{
        background-color: #d9d9d9;
        border: none;
        border-radius: 32px;
        height: 40px;
        width: 240px;
        padding: 10px;
        position: absolute;
        top: 154px;
        left: 560px;
    }
    .even{
        background-color: #d9d9d9;
    }
    .dtl{
        background-color: #d9d9d9;
        border: none;
        border-radius: 32px;
        height: 32px;
        width: 540px;
        position: absolute;
        top: 154px;
        left: 850px;
        display: inline-block;
        padding: 10px;
        
    }
    .dtl>label{
        font-size: 12px;
        font-weight: 600;
    }
    
    input[type="datetime-local"]{
        background-color: #d9d9d9;
        border: none;
        margin-left: 10px;
    }
    .book{
        display: block;
        background-color: #efefef;
        width: 1070px;
        position: absolute;
        top: 220px;
        left:460px;   
        overflow-y: scroll;
        height: 510px;
        }


.book::-webkit-scrollbar { 
    display: none;
    }


   button.oddbtn{
        float:right;
        border: 1px solid;
        border-radius: 32px;
        height: 35px;
        margin-top: 50px;
    }
    button.oddbtn:hover{
        background-color: #202020;
        color: #ffffff;
    }
   button.evenbtn{
        float:right;
        border: 1px solid;
        border-radius: 32px;
        height: 35px;
        margin-top: 50px;
        background-color: #202020;
        color: #ffffff;
    }
    button.evenbtn:hover{
        background-color: #efefef;
        color: black;
    }
    .detail {
        position: relative;
        top: -122px;
        left: 155px;
    }
    .odd{
        width:100%;
    }
    .odd>h4{
        position: relative;
        left:160px;
    }
    .even>h4{
        position: relative;
        left:160px;
    }
    ul>li{
        list-style: none;
    }
    ul{
        position: relative;
        top: -20px;
    }  
    
    div.bk{
        margin-right: 10px;
        width: 230px;
        display: flex;
        text-align:right;
        position: relative;
    left: 361px;
        
         }
    div.list{
        display: flex;
        width: 800px;

    }
    i.pos {
        height: 18px;
        margin-left: 34px;
        height: 18px;
        margin-top: 20px;
        display: inline;
        margin-left: 80px;
        position: relative;
        right: -65px;
    }

    footer.foot{
        position: relative;
        width: 1536px;
        height: 249px;
        left: 0px;
        margin-top: 90px;
        background-color: #D9D9D9;

    }
    span.cnt{
        position: absolute;
        top: 30px;
        right: 244px;
        text-decoration: underline;
    
       }
       div.link1>a,div.link2>a{
        color: #000000;
        position: relative;
        left: 651px;
        padding-top: 20px;
        top: 72px;
       }
       span.add {
        position: relative;
        left: 1088px;
    }
    span.sls {
        position: relative;
        left: 1305px;
        top: -45px;
    }
    span.cc {
        position: relative;
        left: 1241px;
        top: -24px;
    }
    span.gnl{
        position: relative;
        left: 1080px;
    }
    span.logo2{
        font-size: 78px;
        position:absolute;
        left:60px;
        top:38px;
        font-size: 62px;
    }
    .title2{
        position: absolute;
        left: 9%;
        right: 26.48%;
        top: 26%;
        bottom: 46.49%;
        font-weight: 528;
        font-size: 30px;
        line-height: 127.9%;
        color: #000000;
        text-shadow: 0px 8.14286px 8.14286px rgba(0, 0, 0, 0.25);
    }a.favicon:visited{
        color: black;
   }
   a.favicon{
    margin-left:50px;
    position:relative;
    top:157px;
    left:28px;
    font-size: 20px;
   }
   span.qkl{
    text-decoration: underline;
    position: relative;
    left: 456px;
    top: 52px;
   }
   
     
 
  .cs:hover,.abs:hover{
    background-color: #000000;
    color: #ffffff;
  }
  .cnt>ul {
    list-style-type: none;
    display: contents;
}
  
  .cnt>ul>li {
    display: inline-block;
  }
  
  input[type="checkbox"] {
    display: none;
  }
  
  .cnt>ul>li>label {
    padding: 10px;
    display: block;
    position: relative;
    cursor: pointer;
    width: 45px;
    margin-left: 28px;
    margin-top: 20px;
  }
  
  .cnt>ul>li>label> img {
    height: 40px;
    width: 40px;
    transition-duration: 0.2s;
    transform-origin: 50% 50%;
    
  }
  
  
  :checked + label img {
    transform: scale(0.9);
    z-index: -1;
    background-color:rgb(39 152 24);
    border-radius: 10px;
  } 
  .two{
    margin-left: 40px;
  }
  .two>li{
    margin-left: 20px;
  }
  hr{
    width: 80%;;
  }
  div.list>img
{
  transition: all 1s ease-in-out;  
}
div.list>img:hover{
  transform: scale(1.2);
  opacity: 2;
}

button.search{

        border: 1px solid;
        border-radius: 32px;
        height: 35px;
        top: -43px;
        position: relative;
    margin-left: 280px;
    }
    button.search:hover{
        background-color: #202020;
        color: #ffffff;
    }
    span.title>a{
        text-decoration:none;
        color:black;
    }
</style>

</head>
<body>
    <header class="head">
        <span class="logo">Z</span>
        <span class="title"><a href="Homepage.html">ZEUS RENTALS</a></span>
        <a href="#" >
            <button class="btnn abs">
                ABOUT US
            </button>
        </a>
        <a href="#foot" >
            <button class="btnn cs" >CONTACT US</button>
        </a>

        <!-- <img src="user.png" alt="user" class="usr"> -->
    </header>

    <section class="filter">
        
        <div class="filterhead">
     
            <span class="fl">Filters</span>
            <img src="filter.png" alt="" height="20px" width="20px" class="fl">
        </div>
        <form action="#" method="post">
        <button type="submit"class='search'>SEARCH</button>
        <div class="cnt">
            <div class="type">
                <span>Car Type</span>
            </div>
            <?php
           $carquery="select * from cartype ";
           $carres=mysqli_query($con,$carquery);

           if(mysqli_num_rows($carres)>0){
            foreach($carres as $cars){

                $checked=[];
                if(isset($_POST['ctype'])){
                    $checked=$_POST['ctype'];
                }
                ?>
           
            <ul>
                <li>
                    <input type="checkbox" name=ctype[]  id =<?=$cars['id']?> value="<?=$cars['id'];?>" <?php if(in_array($cars['id'],$checked)){echo "checked";}?>>
                    
             
                  <label for="<?=$cars['id']?>"><img src=<?=$cars['icon']?> ><br><span><?=$cars['name']?> </span> </label>
                </li>
               
              </ul>
              <?php
            }
           }
           else{
            echo "no filters";
           }
           ?>
        </div>
        <hr> 
        <div class="cnt">
            <div class="type">
                <span>Fuel Type</span>
            </div>
            <?php
           $carquery="select * from fueltype ";
           $carres=mysqli_query($con,$carquery);

           if(mysqli_num_rows($carres)>0){
            foreach($carres as $cars){

                $checked=[];
                if(isset($_POST['ctype'])){
                    $checked=$_POST['ctype'];
                }
                ?>
           
            <ul>
                <li>
                    <input type="checkbox" name=ctype[]  id =<?=$cars['id']?> value="<?=$cars['id'];?>" <?php if(in_array($cars['id'],$checked)){echo "checked";}?>>
                    
             
                  <label for="<?=$cars['id']?>"><img src=<?=$cars['icon']?> ><br><span><?=$cars['name']?></span> </label>
                </li>
               
              </ul>
              <?php
            }
           }
           else{
            echo "no filters";
           }
           ?>
        </div>
        <hr> 
        <div class="cnt">
            <div class="type">
                <span>seats</span>
            </div>
            <?php
           $carquery="select * from seats ";
           $carres=mysqli_query($con,$carquery);

           if(mysqli_num_rows($carres)>0){
            foreach($carres as $cars){

                $checked=[];
                if(isset($_POST['ctype'])){
                    $checked=$_POST['ctype'];
                }
                ?>
           
            <ul>
                <li>
                    <input type="checkbox" name=ctype[]  id =<?=$cars['id']?> value="<?=$cars['id'];?>" <?php if(in_array($cars['id'],$checked)){echo "checked";}?>>
                    
             
                  <label for="<?=$cars['id']?>"><img src=<?=$cars['icon']?> ><br><span><?=$cars['name']." Seater"?></span> </label>
                </li>
               
              </ul>
              <?php
            }
           }
           else{
            echo "no filters";
           }
           ?>
        </div>
        <hr> 
        <div class="cnt">
            <div class="type">
                <span>Transmission</span>
            </div>
            <?php
           $carquery="select * from transmission ";
           $carres=mysqli_query($con,$carquery);

           if(mysqli_num_rows($carres)>0){
            foreach($carres as $cars){

                $checked=[];
                if(isset($_POST['ctype'])){
                    $checked=$_POST['ctype'];
                }
                ?>
           
            <ul>
                <li>
                    <input type="checkbox" name=ctype[]  id =<?=$cars['id']?> value="<?=$cars['id'];?>" <?php if(in_array($cars['id'],$checked)){echo "checked";}?>>
                    
             
                  <label for="<?=$cars['id']?>"><img src=<?=$cars['icon']?> ><br><span><?=$cars['name']?></span> </label>
                </li>
               
              </ul>
              <?php
            }
           }
           else{
            echo "no filters";
           }
           ?>
        </div>
        
        </form>
        <!-- <div class="cnt">
            <div class="type">
                <span>Fuel Type</span>
            </div>
            <ul>
                <li>
                  <input type="checkbox" id="myCheckbox4">
                  <label for="myCheckbox4"><img src="petrol.png"><br><span>Petrol</span> </label>
                </li>
                <li>
              
                  <input type="checkbox" id="myCheckbox5">
                  <label for="myCheckbox5"><img src="petrol.png" ><br><span>Diesel</span> </label>
                </li>
                
                <li>
              
                  <input type="checkbox" id="myCheckbox6">
                  <label for="myCheckbox6"><img src="electric.png" ><br><span>Electric</span> </label>
                </li>
                
                <li>
              
                  <input type="checkbox" id="myCheckbox7">
                  <label for="myCheckbox7"><img src="cng.png" ><br><span>CNG</span> </label>
                </li>
                
              </ul>
        </div>
        <hr>
        <div class="cnt">
            <div class="type ">
                <span>Seats</span>
            </div>
            <ul class="two">
                <li>
                  <input type="checkbox" id="myCheckbox8">
                  <label for="myCheckbox8"><img src="seats.png"><br><span>5Seats</span> </label>
                </li>
                <li>
              
                  <input type="checkbox" id="myCheckbox9">
                  <label for="myCheckbox9"><img src="seats.png" ><br><span>7Seats</span> </label>
                </li>
               
              </ul>
        </div>
        <hr>
        <div class="cnt">
            <div class="type">
                <span>Transmission</span>
            </div>
            <ul class="two">
                <li>
                  <input type="checkbox" id="myCheckbox10">
                  <label for="myCheckbox10"><img src="manual.png"><br><span>Manual</span> </label>
                </li>
                <li>
              
                  <input type="checkbox" id="myCheckbox11">
                  <label for="myCheckbox11"><img src="automatic.png" ><br><span>Automatic</span> </label>
                </li>
               
              </ul>
        </div> -->
       
    </section>
    <!-- <select name="pickupcity" id="" placeholder="Pickup City" class="sc">
        <option value="" disabled selected hidden>Pickup City</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Kerla">Kerla</option>
    </select>    -->
     <!-- <div class="dtl">
        <label for="start">Journey Starts</label>
        <input type="datetime-local" name="" id="start" >
        <i class="fa-solid fa-arrow-right"></i>
        <label for="ends">Journey Ends</label>
        <input type="datetime-local" name="" id="ends" >
    </div> -->

    <?php
    $city1=$_GET['pickupcity'];
    $con=mysqli_connect("localhost","root","","zeus");
    $res=mysqli_query($con,"Select * from car_details where Regno in (select HRegNo from car_details,host where HRegNo=RegNo and city='$city1')");
  
?>








    <section class="book">
        <div class="odd" style="display: inline;">
        <?php 
           if(mysqli_num_rows($res)<=0){
               echo "<h1>NO CARS FOR THIS LOCATION!!!!</h1>";
            }
            else{

                if(isset(($_POST['ctype']))){
                    $carchecked=[];
                    $carchecked=$_POST['ctype'];
                    foreach($carchecked as $ck){
                        // echo $ck;
                        // $fquery="Select * from car_details cd, cartype ct ,fueltype ft where Regno in (select HRegNo from car_details,host where HRegNo=RegNo and city='$city1')and ((ct.name=Car_Type and ct.id='$ck')or(ft.name=Fuel and ft.id='$ck'))";
                        //  $fquery="SELECT * FROM `car_details` WHERE Car_Type in (select name from cartype where id in ('$ck')) and Transmission in (select name from transmission where id in ('$ck')) and Fuel in (select name from fueltype where id in ('$ck')) and Regno in (select HRegNo from car_details,host where HRegNo=RegNo and city='$city1')";
                        //   $fquery="SELECT * FROM car_details cd WHERE cd.Car_Type in (select ct.name from cartype ct where ct.id in ('$ck')) and cd.Transmission in (select t.name from transmission t where t.id in ('$ck')) and cd.Fuel  in (select ft.name from fueltype ft where ft.id in ('$ck'))";
                          $fquery="SELECT * FROM car_details cd WHERE Regno in (select HRegNo from car_details,host where HRegNo=RegNo and city='$city1') and((cd.Car_Type in (select ct.name from cartype ct where ct.id in ('$ck'))) or( cd.Transmission in (select t.name from transmission t where t.id in ('$ck')) ) or (cd.Fuel  in (select ft.name from fueltype ft where ft.id in ('$ck'))) or (cd.Capacity  in (select st.name from seats st where st.id in ('$ck'))))";


                        $fquerres=mysqli_query($con,$fquery);
                        


                        while($row1=mysqli_fetch_array($fquerres)){
            
                            // echo "<div class='even'  style='display: flex;'>";
                            echo "  <div class='list' >";
                                
                          echo "     <img src='".$row1['Car_Image']."'  height='120px'>";
                           echo" <ul>";
                           echo"     <li>";
                           echo "         <h3>".$row1['Brand']." ".$row1['Car_Type']."</h3>";
                           echo"     </li>";
                           echo"     <li>";
                           echo       $row1['Fuel']." . ".$row1['Transmission']." . ".$row1['Capacity']." Seater";
                           echo"     </li>";
                
                           echo"     <li>";
                           echo       $row1['KM_Driven']." KM Driven";
                           echo"     </li>";
                           echo" </ul>";
                           echo"     <div class='bk'>";
                           echo"         <i class='fa-solid fa-indian-rupee-sign pos'>".$row1['Price']."</i>";
                           echo"     <a href='#'>";
                           echo "<form action='booking.php' method ='POST'>";
                        //    echo "<input type='submit' class='oddbtn' name ='booking' value=".$row['RegNo'].">";
                           echo"         <button class='oddbtn' type='submit' class='oddbtn' name ='booking' value=".$row1['RegNo'].">BOOK NOW</button>";
                           echo "</form>";
                           
                           echo"     </a>";
                           echo"     </div>";
                           echo"</div>";
                           
                     
                           echo" <br>";
                        }

                    }
                }
                else{

                while($row=mysqli_fetch_array($res)){
            
            // echo "<div class='even'  style='display: flex;'>";
            echo "  <div class='list' >";
                
          echo "     <img src='".$row['Car_Image']."'  height='120px'>";
           echo" <ul>";
           echo"     <li>";
           echo "         <h3>".$row['Brand']." ".$row['Car_Type']."</h3>";
           echo"     </li>";
           echo"     <li>";
           echo       $row['Fuel']." . ".$row['Transmission']." . ".$row['Capacity']." Seater";
           echo"     </li>";

           echo"     <li>";
           echo       $row['KM_Driven']." KM Driven";
           echo"     </li>";
           echo" </ul>";
           echo"     <div class='bk'>";
           echo"         <i class='fa-solid fa-indian-rupee-sign pos'>".$row['Price']."</i>";
           echo"     <a href='#'>";
           echo "<form action='booking.php' method ='POST'>";
        //    echo "<input type='submit' class='oddbtn' name ='booking' value=".$row['RegNo'].">";
           echo"         <button class='oddbtn' type='submit' class='oddbtn' name ='booking' value=".$row['RegNo'].">BOOK NOW</button>";
           echo "</form>";
           
           echo"     </a>";
           echo"     </div>";
           echo"</div>";
           
     
           echo" <br>";
        }
    }
}
            // die("NO CARS FOR THIS LOCATION!!!!");
            ?>
            
        </div>
   
    
        <!-- <div class="even" style="display: flex;">
            <div class="list" >
               <img src="dastun.png" alt="" height="120px">
            <ul>
                <li>
                    <h3>Datsun Go Plus</h3>
                </li>
                <li>
                    Manual . Petrol . 7 Seater
                </li>

                <li>
                    29k kms Driven
                </li>
            </ul>
           </div>
                <div class="bk">
                    <i class="fa-solid fa-indian-rupee-sign pos">3304</i>
                <a href="#">
                    <button class="evenbtn"> BOOK NOW</button>
                </a>
                </div>
     
        </div>
     
       
        <div class="odd" style="display: flex;">
            <div class="list" >
               <img src="baleno.png" alt="" height="120px">
            <ul>
                <li>
                    <h3>Maruti Baleno Diesel</h3>
                </li>
                <li>
                    Manual . Diesel . 5 Seater
                </li>

                <li>
                    12k kms Driven
                </li>
            </ul>
           </div>
                <div class="bk">
                    <i class="fa-solid fa-indian-rupee-sign pos">2901</i>
                <a href="#">
                    <button class="oddbtn"> BOOK NOW</button>
                </a>
                </div>
     
        </div>
     
       
        <div class="even" style="display: flex;">
            <div class="list" >
               <img src="triber.png" alt="" height="120px">
            <ul>
                <li>
                    <h3>Renault Triber</h3>
                </li>
                <li>
                    Manual . Petrol . 7 Seater
                </li>

                <li>
                    26k kms Driven
                </li>
            </ul>
           </div>
                <div class="bk">
                    <i class="fa-solid fa-indian-rupee-sign pos">3514</i>
                <a href="#">
                    <button class="evenbtn"> BOOK NOW</button>
                </a>
                </div>
     
        </div>
     
       
        <div class="odd" style="display: flex;">
            <div class="list" >
               <img src="innova.png" alt="" height="120px">
            <ul>
                <li>
                    <h3>Toyota Innova</h3>
                </li>
                <li>
                    Manual . Diesel . 7 Seater
                </li>

                <li>
                    49k kms Driven
                </li>
            </ul>
           </div>
                <div class="bk">
                    <i class="fa-solid fa-indian-rupee-sign pos">3981</i>
                <a href="#">
                    <button class="oddbtn"> BOOK NOW</button>
                </a>
                </div>
     
        </div>
     
       
        <div class="even" style="display: flex;">
            <div class="list" >
               <img src="tuv.png" alt="" height="120px">
            <ul>
                <li>
                    <h3>Mahindra TUV 300</h3>
                </li>
                <li>
                    Manual . Petrol . 7 Seater
                </li>

                <li>
                    32k kms Driven
                </li>
            </ul>
           </div>
                <div class="bk">
                    <i class="fa-solid fa-indian-rupee-sign pos">2298</i>
                <a href="#">
                    <button class="evenbtn"> BOOK NOW</button>
                </a>
                </div>
     
        </div>
     
       
        <div class="odd" style="display: flex;">
            <div class="list" >
               <img src="zest.png" alt="" height="120px">
            <ul>
                <li>
                    <h3>Tata Zest</h3>
                </li>
                <li>
                    Manual . Petrol . 5 Seater
                </li>

                <li>
                    38k kms Driven
                </li>
            </ul>
           </div>
                <div class="bk">
                    <i class="fa-solid fa-indian-rupee-sign pos">2764</i>
                <a href="#">
                    <button class="oddbtn"> BOOK NOW</button>
                </a>
                </div>
     
        </div>
      -->
       
      
        
    </section>

    <footer class="foot" id="foot">
        <span class="logo2">Z</span>
        <span class="title2">ZEUS RENTALS</span>
        <a href="http://facebook.com" style="color: black; "class="favicon"><i class="fa-brands fa-facebook" ></i></a>
        <a href="http://twitter.com" style="color: black; "class="favicon"><i class="fa-brands fa-twitter" ></i></a>
        <a href="http://instagram.com" style="color: black; "class="favicon"><i class="fa-brands fa-instagram" ></i></a>
        <span class="qkl">
            Quick Links
        </span>
            <div class="link1">
                <a href="">Terms and Conditions</a>
            </div>
            <div class="link2">
                <a href="">Privacy Policy</a>
            </div>
        
         <span class="cnt">
            Contact US
        </span>
        <div>
            <span class="add">
                SP Road <br> Delhi India,<br> 479158
            </span>
            <span class="sls">
               <b>Sales:</b> <br>
                sales@mysite.con
            </span>

        </div>
          <div>
            <span class="gnl">
                General Inquiries: <br>
                    923-456-7890
            </span>
          
            <span class="cc">
               <b>Customer care:</b> <br> customercare@mysite.com
            </span>

          </div>
    </footer>

</body>
</html>