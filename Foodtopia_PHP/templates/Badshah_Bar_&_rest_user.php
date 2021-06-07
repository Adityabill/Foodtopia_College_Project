<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

include('User_logged_display.php');

if(isset($_POST['submit'])){
   $kolkata_chicken_biriyani = $_POST['no_kolkata_chicken_biriyani'];
   $chicken_fried_rice = $_POST['no_chicken_fried_rice'];
   $chicken_kabiraji = $_POST['no_chicken_kabiraji'];
   $chicken_roll = $_POST['no_chicken_roll'];
   $paneer_fried_rice = $_POST['no_paneer_fried_rice'];
   $veg_fried_rice = $_POST['no_veg_fried_rice'];
   $paneer_pakoda = $_POST['no_paneer_pakoda'];
   $total_price = (120*$kolkata_chicken_biriyani)+(60*$chicken_fried_rice)+(85*$chicken_kabiraji)+(70*$chicken_roll)+(50*$paneer_fried_rice)+(50*$veg_fried_rice)+(45*$paneer_pakoda);

   $sql = "insert into badshah_bar_n_rest
           (Name, Email, Phone_no, Kolkata_Chicken_Biriyani, Chicken_Fried_Rice, Chicken_Kabiraji, Chicken_Roll, Paneer_Fried_Rice, Veg_Fried_Rice, Paneer_Pakoda, Total)
           values('$username','$user_email', '$user_phone_no', '$kolkata_chicken_biriyani', '$chicken_fried_rice', '$chicken_kabiraji', '$chicken_roll', '$paneer_fried_rice', '$veg_fried_rice', '$paneer_pakoda', '$total_price')";

           if(mysqli_query($conn, $sql)){
            header('Location: Order_Sucessful.php');
        } 
        else{
            echo 'Error: '. mysqli_error($conn);    
        }        

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Badshah Bar & Restaurant | Foodtopia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<!--CSS-->
<style type="text/css">
 .link-nav{
    text-decoration: none;
	padding-right: 3px;
	padding-left: 15px;
	color: antiquewhite;
	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

 }
 .link-nav-hover:hover{
    color: aquamarine;
	text-transform: capitalize;

 }
 .foodtopia-logo{
    margin-left: 43%;
 }

 .background-img{
   background-size: 100%;
   background-repeat: repeat-x;
   background-attachment: fixed;
}

.header-background{
	background: white;
}

footer{
	padding-top: 5%;
	padding-bottom: 10%;
	padding-left: 2%;
	margin-top: 9%;
    background-color: blue;
}

.footer-text{
	color: white;
	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.restaurant_section_font{
    padding-bottom: 30px;
    font-size: 30px;
    color: #EC3E07;
    padding-left: 30%;
    
}

.rest_addr{
    padding-left: 30%;
}

.rest_view_btn{
    margin: 10px auto;
    margin-left: 50%;
}

.rest_img{
    margin: 5% auto;
    margin-left: 5%;
}

.rest-box-border{
    border-radius: 21px;
    border: 10px solid #640095;
}

.user_name_display{
    padding-bottom: 1%;
}

.user_name_display_text{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bold;
}

.logout_text:hover{
  text-decoration:;
  color: #0460A6;
}

.veg_non_veg_img{
    padding-left: 0.5%;
}


</style>

<!--JS to display current time-->
<script type="text/javascript"> 
      function display_c(){
      var refresh=1000; // Refresh rate in milli seconds
      mytime=setTimeout('display_ct()',refresh)
     }

       function display_ct() {
       var x = new Date()
       document.getElementById('ct').innerHTML = x;
       display_c();
        }
</script>

<!--JS to calculate total cost-->
<script type="text/javascript">

function total_price(){
    var no_kolkata_chicken_biriyani = document.getElementById("no_kolkata_chicken_biriyani").value;
    var no_chicken_fried_rice = document.getElementById("no_chicken_fried_rice").value;
    var no_chicken_kabiraji = document.getElementById("no_chicken_kabiraji").value;
    var no_chicken_roll = document.getElementById("no_chicken_roll").value;

    var no_paneer_fried_rice = document.getElementById("no_paneer_fried_rice").value;
    var no_veg_fried_rice = document.getElementById("no_veg_fried_rice").value;
    var no_paneer_pakoda = document.getElementById("no_paneer_pakoda").value;

    var total = (120*no_kolkata_chicken_biriyani)+(60*no_chicken_fried_rice)+(85*no_chicken_kabiraji)+(70*no_chicken_roll)+(50*no_paneer_fried_rice)+(50*no_veg_fried_rice)+(45*no_paneer_pakoda);
    document.getElementById("total").innerHTML = total;
}



</script>




<body class="background-img" onload=display_ct() background="static/Images/ccu_chicken_biriyani.jfif">

    <header class="header-background">
        <a href="User_page.php"><img class="foodtopia-logo" src="static/Images/Foodtopia Logo.jpg" width="150px" height="150px" ></a>
    
        <div class="white right user_name_display">
    <p class="user_name_display_text"><img src="static\Images\User Symbol.jpg" height="50px" weight="50px"><?php echo htmlspecialchars($username); ?>(<?php echo htmlspecialchars($user_email); ?>)
    (<a href="User_page.php?logout" class="logout_text">Logout</a>)<br></p>
    <p id="ct"></p>
    </div>  
    
    </header>

    <!--Navigation Bar-->
    <nav class="red">
        <a class="link-nav link-nav-hover" href="User_page.php">Home</a>
        <a class="link-nav link-nav-hover" href="User_orders_page.php">Your Orders</a>
        <a class="link-nav link-nav-hover" href="User_profile.php">Your Profile</a>
        <a class="link-nav link-nav-hover" href="Feedback_&_Griviences_user.php">Feedback & Griviences</a>
    </nav>   
    
    <section class="container white rest-box-border">
        <h3>Menu <img src="static/Images/Food Symbol.png" height=39px width="39px"></h3>

        <!--Non-Veg items-->
        <h5>Non-Veg<img src="static\Images\Non Veg Symbol.jpg" class="veg_non_veg_img" height=30px width=30px></h5>
        <table>
            <tr>
                <th>Food Item</th>
                <th>Price per item or plate</th>
            </tr>
            <tr>
                <td>Kolkata Chicken Biriyani</td>
                <td>Rs. 120</td>
            </tr>
            <tr>
                <td>Chicken Fried Rice</td>
                <td>Rs. 60</td>
            </tr>
            <tr>
                <td>Chicken Kabiraji</td>
                <td>Rs. 85</td>
            </tr>
            <tr>
                <td>Chicken Roll</td>
                <td>Rs. 70</td>
            </tr>
           
        </table>


        <!--Veg items-->
        <h5>Veg<img src="static\Images\Veg Symbol.png" class="veg_non_veg_img" height=30px width=30px></h5>
        <table>
            <tr>
                <th>Food Item</th>
                <th>Price per item or plate</th>
            </tr>
            <tr>
                <td>Paneer Fried Rice</td>
                <td>Rs. 50</td>
            </tr>
            <tr>
                <td>Veg Fried Rice</td>
                <td>Rs. 50</td>
            </tr>
            <tr>
                <td>Paneer Pakoda</td>
                <td>Rs. 45</td>
            </tr>
            
        </table>
        

        <!--Order form-->
        <form action="Badshah_Bar_&_rest_user.php" method="POST">
            <label><h5>Select your items:(If you are not buying a particular item please enter the value as 0)<br></h5> </label>
            <label><h6> -Non Veg<img src="static\Images\Non Veg Symbol.jpg" class="veg_non_veg_img" height=20px width=20px><br> </h6></label>
            
            <label>Kolkata Chicken Biriyani(Maximum 10 allowed): 
            <input type="number" min="0" max="10" id="no_kolkata_chicken_biriyani" name="no_kolkata_chicken_biriyani" required></label>
            <label>Chicken Fried Rice(Maximum 10 allowed): 
            <input type="number" min="0" max="10" id="no_chicken_fried_rice" name="no_chicken_fried_rice" required></label>
            <label>Chicken Kabiraji(Maximum 10 allowed): 
            <input type="number" min="0" max="10" id="no_chicken_kabiraji" name="no_chicken_kabiraji" required></label>
            <label>Chicken Roll(Maximum 10 allowed): 
            <input type="number" min="0" max="10" id="no_chicken_roll" name="no_chicken_roll" required></label>


            <label><h6> -Veg<img src="static\Images\Veg Symbol.png" class="veg_non_veg_img" height=20px width=20px><br></h6></label>
            <label>Paneer Fried Rice(Maximum 10 allowed): 
            <input type="number" min="0" max="10" id="no_paneer_fried_rice" name="no_paneer_fried_rice" required></label>
            <label>Veg Fried Rice(Maximum 10 allowed): 
            <input type="number" min="0" max="10" id="no_veg_fried_rice" name="no_veg_fried_rice" required></label>
            <label>Paneer Pakoda(Maximum 10 allowed): 
            <input type="number" min="0" max="10" id="no_paneer_pakoda" name="no_paneer_pakoda" required></label>

            <div class="center"> 
            <p>Total:<p id="total"></p> </p>
            <input type="button" value="View total price" class="btn" onclick="total_price()">
            <input class="btn" type="submit" name="submit" value="Place Order">
            </div>
	    
	    <div><p><strong>Note: Once order is made cannot be cancelled.</strong></p></div>
        </form>

        <p><?php mysqli_error($conn); ?></p>


    </section>
    

    <?php include('Footer.php'); ?>


</body>



</html>
