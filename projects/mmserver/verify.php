<?php
session_start();
/**
 * Created by PhpStorm.
 * User: gonzal99
 * Date: 7/24/2015
 * Time: 1:57 PM
 */
$username = $_POST['username'];
$password = $_POST['password'];
$link = mysqli_connect('localhost','public','XZmMSa7fZHfR5a8C','mmserver') or die("error ". mysqli_error($link));
$query = "SELECT * FROM clients WHERE username='$username'";
$result = $link->query($query) or die("bad data");
$userData = mysqli_fetch_array($result);
$hashedPassword = hash("sha512",$password);
if($userData[3]==$hashedPassword){
    echo "Please wait...";
    $_SESSION['username']=$username;
    echo $_SESSION['username'];
}else{
    echo "Please try again!";
    echo " ".$password." ";
    echo $hashedPassword;
}