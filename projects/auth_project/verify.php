<?php
session_start();
/**
 * Created by PhpStorm.
 * User: gonzal99
 * Date: 7/22/2015
 * Time: 9:12 AM
 */
$uname = $_POST['uname'];
$pw = $_POST['password'];
$correctuname = "roberto";
$correctPassword = "password";
if($uname != $correctuname || $pw != $correctPassword){
    $_SESSION['badUserPassword'] = 1;
    header('Location: login.php?badattempt=1');
}