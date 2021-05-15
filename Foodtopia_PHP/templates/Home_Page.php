<?php

?>

<!--CSS-->
<style type='text/css'>

.sign-up-login-home{
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	font-weight: 300;
	text-decoration: none;
	color: #0789EC ;
	padding-left: 39%;
	padding-top: 21%;
}

.sign-up-text-home-hover:hover{
    font-weight: 500;
    color: #555555;
}

.sign-up-box-home{
	padding-bottom: 10%;
}

.sign-up-box-home{
	border-radius: 30px;
	height: 175px;
	width: 330px;
    border: 10px solid #640095; 
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page | Foodtopia</title>
<?php include('Header.php');     ?>
</head>





<section>
        <div class="sign-up-box-home container white">
            <h5 class="sign-up-text-home center">Start ordering your food now:-</h5>
            <a  class="sign-up-login-home sign-up-text-home-hover" href="User_registration.php">Sign up</a>
        </div>

        <div class="sign-up-box-home container white">
            <h5 class="sign-up-text-home center">Join us and sell your dishes with great ease:-</h5>
            <a  class="sign-up-login-home sign-up-text-home-hover " href="Shop_registration.php">Sign up</a>
        </div>
</section>


<?php include('Footer.php');   ?>

</html>