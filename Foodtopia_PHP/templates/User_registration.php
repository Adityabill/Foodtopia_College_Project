<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $reg_no = $_POST['reg_no'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $cnfrm_pswd = $_POST['cnfrm_pswd'];
    $phone_no = $_POST['phone_no'];

    $sql = "insert into user_details(Name, Reg_No, Email, Phone_no, DOB, cnfrm_pswd )
            values('$name', '$reg_no', '$email','$phone_no', '$dob', '$cnfrm_pswd')";
    
            if(mysqli_query($conn, $sql)){
                header('Location: User_registration_successful.php');
            } 
            else{
                echo 'Error: '. mysqli_error($conn);    
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

.form-subheader-text{
    font-weight: bold;
    font-size: 33px;
}

.form-label-text{
	font-family:Verdana, Geneva, Tahoma, sans-serif; 
	font-size: 18px;
}

.btn_spacing{
    padding: 40px;
}

.form-border{
    border-radius: 21px;
    border: 10px solid #640095; 
}

</style>



<!DOCTYPE html>
<html lang="en">
    <head>
    <title>User Registration</title>
   <?php include('Header.php');     ?>
   </head>
        
        
        <section class="container white form-border">
         <h1 class="form-header center">User Registration:</h1>
             <form action="User_registration.php" method="POST">
                 <p class="form-subheader-text center">Register Here</p>
                 
                 <label class="form-label-text form-label-alignment label-spacing-form">Name: 
                 <input class="text-box-form text-box-text"  type="text" placeholder="Your Name" name="name" required></label><br>

                 <label class="form-label-text form-label-alignment label-spacing-form">Registration No.: 
                 <input class="text-box-form text-box-text" type="text" placeholder="Ex. RA1911003010376" name="reg_no" required></label><br>

                 <label class="form-label-text form-label-alignment label-spacing-form">Email ID(Only SRMIST mail ID(Ex. something@srmist.edu.in)): 
                 <input class="text-box-form text-box-text" type="email" placeholder="Ex. xyz@srmist.edu.in" pattern="^[a-zA-Z0-9]+@srmist\.edu\.in$" name="email" required> </label><br>

                 <label class="form-label-text form-label-alignment label-spacing-form">Phone No.: 
                 <input class="text-box-form text-box-text" type="tel" placeholder="Your 10 digit mobile no." name="phone_no" pattern="[0-9]{10}" required> </label><br>

                 <label class="form-label-text form-label-alignment label-spacing-form">Date of Birth: 
                 <input class="text-box-form text-box-text" type="date" name="dob" required> </label><br>

                 <label class="form-label-text form-label-alignment label-spacing-form">Enter Password: 
                 <input class="text-box-form text-box-text" type="password" name="cnfrm_pswd" required></label><br>
                 
                 <div class="center btn_spacing">
                 <input class="btn" name="submit" value="Sign Up" type="submit">
                 </div>

                 <p><?php echo 'Error: '. mysqli_error($conn); ?></p>
             </form>
         
        </section>
        <?php include('Footer.php');   ?>

    </body>
</html>
