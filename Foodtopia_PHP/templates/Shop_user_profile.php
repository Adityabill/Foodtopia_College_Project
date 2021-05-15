<?php

include('Shop_logged_display.php');

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

$sql = "select * from shop_login_credentials where Email='$shop_email'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1){
    
    $user_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

}

else{
    echo "No orders Yet";
}

?>

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

.user-box-border{
    border-radius: 21px;
    border: 10px solid #640095;
}

.user_img{
    margin-left: 45.2%;
}

.user_text{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
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

<!DOCTYPE html>
<html lang="en">

<head>
<title>Shop User Profile</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body class="background-img" onload=display_ct() background="static/Images/ccu_chicken_biriyani.jfif">

<header class="header-background">
        <a href="Swad_Snacks_Bar_inside.php"><img class="foodtopia-logo" src="static/Images/Foodtopia Logo.jpg" width="150px" height="150px" ></a>
    
    <div class="white right user_name_display">
    <p class="user_name_display_text"><img src="static\Images\User Symbol.jpg" height="50px" weight="50px"><?php echo htmlspecialchars($shop_username); ?>(<?php echo htmlspecialchars($shop_id); ?>)
    (<a href="Shop_user_page.php?logout" class="logout_text">Logout</a>)<br></p>
    <p id="ct"></p>
    </div>  
    </header>

    <!--Navigation Bar-->
    <nav class="red">
        <a class="link-nav link-nav-hover" href="Swad_Snacks_Bar_inside.php">Home</a>
        <a class="link-nav link-nav-hover" href="Shop_orders_Swad_Snacks_Bar.php">Orders</a>
        <a class="link-nav link-nav-hover" href="Shop_Menu_Swad_Snacks_Bar.php">Your Menu</a>
        <a class="link-nav link-nav-hover" href="Shop_user_profile.php">Your Profile</a>
        <a class="link-nav link-nav-hover" href="Contact_us_swad_snacks_bar.php">Contact Us</a>
    </nav>

<section class="container white user-box-border">
           <h2 class="center user_text">Your Profile</h2>
     <img class="user_img" src="static\Images\User Symbol.jpg" height="100px" width="100px">
     <p class="center user_text">Name: <?php echo htmlspecialchars($shop_username); ?><br></p>
     <p class="center user_text">Email: <?php echo htmlspecialchars($shop_email); ?><br></p>
     <p class="center user_text">Shop Name: <?php echo htmlspecialchars($shop_name); ?><br></p>
     <p class="center user_text">Shop ID: <?php echo htmlspecialchars($shop_id); ?><br></p>

     <?php foreach($user_data as $u_dt){ ?>
     <p class="center user_text">Created On: <?php echo htmlspecialchars($u_dt['Created_on']); ?></p>
     <?php } ?>



    
</section>


<?php include('Footer.php'); ?>


</body>


</html>