<?php

session_start();

if($_SERVER['QUERY_STRING']=='logout'){
    session_unset();
    header('Location: Shop_login.php');
}

$shop_username = $_SESSION['shop_username'];
$shop_email = $_SESSION['shop_email'];
$shop_name = $_SESSION['shop_name'];
$shop_id = $_SESSION['shop_id'];


?>