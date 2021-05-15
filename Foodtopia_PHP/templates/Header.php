<!DOCTYPE html>
<html lang="en">
    <head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>

    <style type='text/css'>
    .background-img{
        background-size: 100%;
        background-repeat: repeat-x;
        background-attachment: fixed;
    }

    .foodtopia-logo{
	margin-left: 43%;
    }

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

    .time_display{
        padding-bottom: 3%;
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
    
    <body class="background-img" background="static/Images/ccu_chicken_biriyani.jfif" onload=display_ct();>
        
        <!--Header-->
        <header class="header-background white">
            <a href="Home_page.php"><img class="foodtopia-logo" src="static/Images/Foodtopia Logo.jpg" width="150px" height="150px" ></a>
            <div class="white right  time_display ">
            <p id="ct"></p>
            </div>
        </header>

        <!--Navigation Bar-->
        <nav>
            <a class="link-nav link-nav-hover" href="Home_Page.php">Home</a>
            <a class="link-nav link-nav-hover" href="About_us.php">About Us</a>
            <a class="link-nav link-nav-hover" href="User_registration.php">User Sign Up</a>
            <a class="link-nav link-nav-hover" href="Shop_registration.php">Shopkeeper Registration</a>
            <a class="link-nav link-nav-hover" href="User_Login.php">User Login</a>
            <a class="link-nav link-nav-hover" href="Shop_Login.php">Shopkeeper Login</a>
            <a class="link-nav link-nav-hover" href="Contact_us.php">Contact Us</a>
        
            
        </nav>

        