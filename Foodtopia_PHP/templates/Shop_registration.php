<?php

$conn = mysqli_connect('localhost:8086', 'Bill', 'bill033', 'foodtopia');

if(!$conn){
    echo "Connection error: ". mysqli_connect_error();
}

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $shop_name = $_POST['shop_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    $sql = "insert into shop_registration(Shop_Owner_Name, Shop_Name, Shop_Address, Email, Phone_no, DOB)
            values('$name', '$shop_name', '$address', '$email', '$phone', '$dob')";
    
            if(mysqli_query($conn, $sql)){
                header('Location: Shop_registration_sucessful_page.php');
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

.submit-btn-form{
	margin-top: 50px;
    margin-left:500px;
    margin-bottom: 50px;
	padding-bottom: 10px;
}

.form-border{
    border-radius: 21px;
    border: 10px solid #640095; 
}


</style>

<!DOCTYPE html>
<html lang="en">
<title>Shopkeeper Registration</title>

<?php include('Header.php');  ?>

<section class="white container form-border">
         <h1 class="form-header center">Shop Registration:</h1>
             <form action="Shop_registration.php" method="POST">
                 <p class="form-subheader-text center">Register Here</p>
                 <label class="form-label-text form-label-alignment label-spacing-form">Shop Owner's Name: 
                 <input class="text-box-form text-box-text" name="name"  type="text" placeholder="Your Name" required></label><br>

                 <label class="form-label-text form-label-alignment label-spacing-form">Shop Name: 
                 <input class="text-box-form text-box-text" name="shop_name" type="text" placeholder="Ex. Swad Snack House" required></label><br>

                 <label class="form-label-text form-label-alignment label-spacing-form">Shop Address: 
                 <input class="text-box-form text-box-text" name="address" type="text" placeholder="Ex. 28E, Charu Chandra Avenue" required></label><br>
               
                 <label class="form-label-text form-label-alignment label-spacing-form">Email ID: 
                 <input class="text-box-form text-box-text" name="email" type="email" placeholder="Ex. xyz@example.com" required> </label><br>
                
                 <label class="form-label-text form-label-alignment label-spacing-form">Phone No: 
                 <input class="text-box-form text-box-text" name="phone" type="tel" placeholder="10 digit mobile number" pattern=[0-9]{10} required></label><br>

                 <label class="form-label-text form-label-alignment label-spacing-form">Date of Birth: 
                 <input class="text-box-form text-box-text" name="dob" type="date" required> </label><br>
                 
                 <input class="btn submit-btn-form" value="Register" name="submit" type="submit">

                 <p><?php echo 'Error: '. mysqli_error($conn);  ?>  </p>
             </form>
</section>


<?php include('Footer.php'); ?>



</html>