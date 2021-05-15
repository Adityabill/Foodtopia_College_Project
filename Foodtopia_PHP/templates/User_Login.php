<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $pswd = $_POST['pswd'];
    $phone_no = $_POST['phone_no'];
    
    $sql = "select * from user_details where Name = '$name' and Phone_no = '$phone_no' and Email = '$email' and cnfrm_pswd = '$pswd'";

    $result=mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['username'] = $_POST['name'];
        $_SESSION['user_email'] = $_POST['email'];
        $_SESSION['phone_no'] = $_POST['phone_no'];
        header('Location: User_page.php');
    }
    else{
        header('Location: Login_error_user.php');
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
<title>User Login</title>
<?php include('Header.php'); ?>
</head>


<section class="white container form-border">
<img class ="center user_symbol_img" src="static\Images\User Symbol.jpg" height="81px" weight="81px">
         <h1 class="form-header  center">User Login</h1>
             <form action="User_Login.php" method="POST">
                 <label class="form-label-text">Name: 
                     <input class="" name="name" type="text" placeholder="Your Name" required></label><br>

                 <label class="form-label-text">Email ID: 
                     <input class="" name="email" type="email" placeholder="Ex. xyz@example.com" required> </label><br>

                 <label class="form-label-text">Registered Phone no.: 
                     <input class="" name="phone_no" type="tel" placeholder="10 digit mobile no." pattern="[0-9]{10}" required> </label><br>    
                
                 <label class="form-label-text">Password: 
                     <input class="form-label-text form-label-alignment label-spacing-form" name="pswd" type="password" required></label><br>
                 
                <div class="center btn_spacing">
                 <input type="submit" name="submit" value="Login" class="btn">
                 </div>
             </form>
         
        </section>


<?php include('Footer.php'); ?>

</html>