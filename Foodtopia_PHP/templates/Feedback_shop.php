<?php

include('Shop_logged_display.php');

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['submit'])){
    $rating = $_POST['rating'];
    $feedback = $_POST['desc'];

    $sql="insert into feedback_shop(Rating, Feedback)
          values('$rating', '$feedback')";

          if(mysqli_query($conn, $sql)){
            header('Location: Feedback_submission_success.php');
        } 
        else{
            echo 'Error: '. mysqli_error($conn);    
        }              
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

.form-feedback-link:hover{
    color: #3806EE
}

.submit-btn-spacing{
    margin: 3%;
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
<title>Feedback Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body class="background-img" onload=display_ct() background="static/Images/ccu_chicken_biriyani.jfif">

<header class="header-background">
        <img class="foodtopia-logo" src="static/Images/Foodtopia Logo.jpg" width="150px" height="150px" >
    
    <div class="white right user_name_display">
    <p id="ct"></p>
    </div>  
    </header>

<section class="container white">
           <h3 class="center">Feedback Form</h3>
     <div class="rest-box-border">
        <form action="Feedback_shop.php" method="POST">
        <label>Rating(Enter values between 0 and 5): 
        <input type="number" min=0 max=5 step=0.1 name="rating" required>
        </label>

        <label>Feedback: 
        <input type="text" name="desc" required>
        </label>

        <div class="center submit-btn-spacing">
        <input type="submit" name="submit" class="btn"> 
        </div>
        </form>
     </div>

     



</section>


<?php include('Footer.php'); ?>


</body>


</html>

