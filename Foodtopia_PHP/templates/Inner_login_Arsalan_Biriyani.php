<?php

include('Shop_logged_display.php');

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['submit'])){
    $pvt_user_id = $_POST['pvt_user_id'];

    $sql = "select * from inner_login_arsalan_biriyani where Name = '$shop_username' and Email = '$shop_email' and Shop_Name = '$shop_name' 
    and Shop_ID = '$shop_id' and Pvt_user_ID = '$pvt_user_id'";

    $result=mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){
        header('Location: Arsalan_Biriyani_inside.php');
       echo "Correct";
    }
    else{
       /* header('Location: Login_error_shop.php');*/
       echo "Incorrect";
}

}

?>

<!--CSS-->
<style type="text/css">

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

.form-header{
    font-size: 39px;
	font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bold;
}

.btn_spacing{
    padding: 40px;
}

.form-border{
    border-radius: 21px;
    border: 10px solid #640095; 
}

.form-label-text{
	font-family:Verdana, Geneva, Tahoma, sans-serif; 
	font-size: 18px;
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

.user_symbol_img{
    margin-left:45%;
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
<title>Inner Login-Arsalan Biriyani </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body class="background-img" onload=display_ct() background="static/Images/ccu_chicken_biriyani.jfif">

<header class="header-background">
        <a href="Home_Page.php"><img class="foodtopia-logo" src="static/Images/Foodtopia Logo.jpg" width="150px" height="150px" ></a>
    
    <div class="white right user_name_display">
    <p class="user_name_display_text"><img src="static\Images\User Symbol.jpg" height="50px" weight="50px"><?php echo htmlspecialchars($shop_username); ?>(<?php echo htmlspecialchars($shop_id); ?>)
    (<a href="Shop_user_page.php?logout" class="logout_text">Logout</a>)<br></p>
    <p id="ct"></p>
    </div>  
    </header>

<section class="white container form-border">
<img class ="center user_symbol_img" src="static\Images\User Symbol.jpg" height="81px" weight="81px">
         <h1 class="form-header center">Shop Login(Arsalan Biriyani)</h1>
             <form action="Inner_login_Arsalan_Biriyani.php" method="POST">

                 <label class="form-label-text">Private User ID: 
                 <input class="" type="password" name="pvt_user_id" required></label><br>
                 
                 <div class="center btn_spacing">
                 <input class="btn" name="submit" value="Login" type="submit">
                 </div>
                 
             </form>
         

        </section>


        <?php include('Footer.php'); ?>


</body>



</html>