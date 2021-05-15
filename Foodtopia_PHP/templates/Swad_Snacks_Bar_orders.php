<?php

include('Shop_logged_display.php');

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
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

.rest-box-border{
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

<!DOCTYPE html>
<html lang="en">

<head>
<title><?php echo $shop_name; ?> - Orders</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body class="background-img" onload=display_ct() background="static/Images/ccu_chicken_biriyani.jfif">

<header class="header-background">
        <a href="Home_Page.php"><img class="foodtopia-logo" src="static/Images/Foodtopia Logo.jpg" width="150px" height="150px" ></a>
    
    <div class="white right user_name_display">
    <p class="user_name_display_text"><?php echo htmlspecialchars($shop_username); ?>(<?php echo htmlspecialchars($shop_id); ?>)
    (<a href="Shop_user_page.php?logout" class="logout_text">Logout</a>)<br></p>
    <p id="ct"></p>
    </div>  
    </header>

    <!--Navigation Bar-->
    <nav class="red">
        <a class="link-nav link-nav-hover" href="">Orders</a>
        <a class="link-nav link-nav-hover" href="">Contact Us</a>
    </nav>

<section class="container white">
        <p class="user_name_display_text">Hello <?php echo htmlspecialchars($shop_username);   ?>,</p>
           <h5 class="center"></h5>
     <div class="rest-box-border">
        
     </div>

     



</section>


<?php include('Footer.php'); ?>


</body>


</html>