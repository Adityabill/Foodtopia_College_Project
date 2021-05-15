<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

include('User_logged_display.php');

$sql = "select * from arsalan_biriyani_orders where Email='$user_email'";

$result = mysqli_query($conn, $sql);

$user_orders = mysqli_fetch_all($result, MYSQLI_ASSOC);





mysqli_free_result($result);
    
    
mysqli_close($conn);



?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Your Orders</title>
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

.order-box-border{
    border-radius: 21px;
    border: 10px solid #640095;
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
        <a class="link-nav link-nav-hover" href="Feedback_&_Griviences_user.php">Feedback & Grievience</a>
    </nav>
    
    <section class="white container">
    <h3 class="center">Your Orders(Arsalan Biriyani)</h3>
    <?php foreach($user_orders as $order_data){ ?>
     <div class="order-box-border">
     
     <p><strong>Order ID: <?php echo htmlspecialchars($order_data['S_No']);?><strong> </p>
     <p>Name: <?php echo htmlspecialchars($order_data['Name']);?> </p>
     <p>Email: <?php echo htmlspecialchars($order_data['Email']);?> </p>
     <p>Phone_no: <?php echo htmlspecialchars($order_data['Phone_no']);?> </p>
     <p>Kolkata Chicken Biriyani: <?php echo htmlspecialchars($order_data['Kolkata_Chicken_Biriyani']);?> </p>
     <p>Kolkata Mutton Biriyani: <?php echo htmlspecialchars($order_data['Kolkata_Mutton_Biriyani']);?> </p>
     <p>Chicken Chaap: <?php echo htmlspecialchars($order_data['Chicken_Chaap']);?> </p>
     <p>Paneer Biriyani: <?php echo htmlspecialchars($order_data['Paneer_Biriyani']);?> </p>
     <p>Mixed Vegetable Curry: <?php echo htmlspecialchars($order_data['Mixed_Vegetable_Curry']);?> </p>
     <p>Paneer Pakoda: <?php echo htmlspecialchars($order_data['Paneer_Pakoda']);?> </p>
     <p>Total: Rs. <?php echo htmlspecialchars($order_data['Total']);?> </p>
     <p>Ordered On: <?php echo htmlspecialchars($order_data['Ordered_at']);?> </p>
     
     </div>
    <?php } ?>
    
    
    </section>

    <?php include('Footer.php'); ?>

</body>


</html>