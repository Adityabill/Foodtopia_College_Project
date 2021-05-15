<?php


include('Shop_logged_display.php');

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['submit'])){
      $subject = $_POST['subject'];
      $desc = $_POST['desc'];

      $sql ="insert into contact_us_shop(Name, Email, Shop_Name, Shop_ID, Subject, Description)
             values('$shop_username', '$shop_email', '$shop_name', '$shop_id', '$subject', '$desc') ";

             if(mysqli_query($conn, $sql)){
                header('Location:Contact_us_swad_snacks_bar_submit_success.php');
            } 
            else{
                echo 'Error: '. mysqli_error($conn);    
            }        
    
         
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - (<?php echo htmlspecialchars($shop_name); ?>)</title>
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

.query-box-border{
    border-radius: 21px;
    border: 10px solid #640095;
}

h3{
    font-weight: bold;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.btn-spacing{
    margin: 5%;
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
        <a href="Arsalan_Biriyani_inside.php"><img class="foodtopia-logo" src="static/Images/Foodtopia Logo.jpg" width="150px" height="150px" ></a>
    
    <div class="white right user_name_display">
    <p class="user_name_display_text"><img src="static\Images\User Symbol.jpg" height="50px" weight="50px"><?php echo htmlspecialchars($shop_username); ?>(<?php echo htmlspecialchars($shop_id); ?>)
    (<a href="Shop_user_page.php?logout" class="logout_text">Logout</a>)<br></p>
    <p id="ct"></p>
    </div>  
    </header>

    <!--Navigation Bar-->
    <nav class="red">
        <a class="link-nav link-nav-hover" href="Arsalan_Biriyani_inside.php">Home</a>
        <a class="link-nav link-nav-hover" href="Shop_orders_Arsalan_Biriyani.php">Orders</a>
        <a class="link-nav link-nav-hover" href="Shop_Menu_Arsalan_Biriyani.php">Your Menu</a>
        <a class="link-nav link-nav-hover" href="Shop_user_profile_Arsalan_Biriyani.php">Your Profile</a>
        <a class="link-nav link-nav-hover" href="Contact_us_arsalan_biriyani.php">Contact Us</a>
    </nav>
     
     
    
    <section class="container white query-box-border">
    <h3 class="center">Query</h3>
        <form class="" action="Contact_us_arsalan_biriyani.php" method="POST">
        <label>Subject 
        <input type="text" name="subject" placeholder="Max. 30 characters">
        </label>

        <label>Description
        <input text="text" name="desc" min=0 max=30  min=0 max=200 placeholder="Max. 200 characters">
        </label>
        
        <div class="center">
        <input type="submit" name="submit" class="btn btn-spacing">
        </div>
        </form>

    </section>
    

    <?php include('Footer.php'); ?>


</body>



</html>