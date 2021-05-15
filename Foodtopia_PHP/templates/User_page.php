<?php


include('User_logged_display.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Page | Foodtopia</title>
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
     
     
    
    <section class="container">
        <div class="white rest-box-border">
              <h3 class="restaurant_section_font">
                Swad Snacks Bar</h3>
              <p class="rest_addr">Address: Shop No. 23, Java Greens, SRMIST</p> 
              <p class="rest_addr">Phone No.: 9864562349</p>
                <img src="static/Images/Swad snacks bar.webp" width="210px" height="210" class="rest_img"> 
              <a href="Swad_Snacks_Bar_user.php" class="btn rest_view_btn">View</a>  
        </div>

        <div class="white rest-box-border">
            <h3 class="restaurant_section_font">Arsalan Biriyani</h3>
            <p class="rest_addr">Address: Shop No. 27, Java Greens, SRMIST</p> 
            <p class="rest_addr">Phone No.: 9364562250</p>
              <img src="static/Images/kolkata-arsalan-biryani-siliguri.webp" width="210px" height="210" class="rest_img"> 
            <a href="Arsalan_Biriyani_user.php" class="btn rest_view_btn">View</a>  
      </div>

      <div class="white rest-box-border">
        <h3 class="restaurant_section_font">Badshah Bar and Restaurant</h3>
        <p class="rest_addr">Address: Shop No. 35, Java Greens, SRMIST</p> 
        <p class="rest_addr">Phone No.: 8086561150</p>
          <img src="static/Images/Badshah bar and restaurant.jfif" width="210px" height="210" class="rest_img"> 
        <a href="Badshah_Bar_&_rest_user.php" class="btn rest_view_btn">View</a>  
    </div>

    </section>
    

    <?php include('Footer.php'); ?>


</body>



</html>