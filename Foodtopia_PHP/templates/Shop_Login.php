<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $shop_name = $_POST['shop_name'];
    $shop_id = $_POST['shop_id'];
    $pswd = $_POST['pswd'];
    
    $sql = "select * from shop_login_credentials where Name = '$name' and Email = '$email' and Shop_Name = '$shop_name' 
    and Shop_ID = '$shop_id' and Password = '$pswd'";

    $result=mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['shop_username'] = $_POST['name'];
        $_SESSION['shop_email'] = $_POST['email'];
        $_SESSION['shop_id'] = $_POST['shop_id'];
        $_SESSION['shop_name'] = $_POST['shop_name'];
        header('Location: Shop_user_page.php');
    }
    else{
        header('Location: Login_error_shop.php');
}


}



?>

<!--CSS-->
<style type="text/css">

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

.user_symbol_img{
    margin-left:45%;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Shop Login</title>
</head>

<?php include('Header.php'); ?>

<body>
<section class="white container form-border">
<img class ="center user_symbol_img" src="static\Images\User Symbol.jpg" height="81px" weight="81px">
         <h1 class="form-header center">Shop Login</h1>
             <form action="Shop_Login.php" method="POST">
                 <label class="form-label-text">Name: 
                 <input class=""  type="text" name="name" placeholder="Your Name" required></label><br>

                 <label class="form-label-text">Email ID: 
                 <input class="" type="email" name="email" placeholder="Ex. xyz@example.com" required> </label><br>

                 <label class="form-label-text">Shop Name: 
                 <input class="" type="text" name="shop_name" placeholder="Ex. Roy's Restaurant" required> </label><br>
                
                 <label class="form-label-text">Shop ID: 
                 <input class="" type="text" name="shop_id" placeholder="Ex. WB03" required></label><br>

                 <label class="form-label-text">Password: 
                 <input class="" type="password" name="pswd" required></label><br>
                 
                 <div class="center btn_spacing">
                 <input class="btn" name="submit" value="Login" type="submit">
                 </div>
                 
             </form>
         
        </section>


</body>








<?php include('Footer.php'); ?>
</html>