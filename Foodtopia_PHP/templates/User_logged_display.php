<?php

session_start();

if($_SERVER['QUERY_STRING']=='logout'){
    //unset($_SESSION['name']);
    session_unset();
    header('Location: User_Login.php ');
}


$username = $_SESSION['username'];
$user_email = $_SESSION['user_email'];
$user_phone_no = $_SESSION['phone_no'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body></body>



</html>