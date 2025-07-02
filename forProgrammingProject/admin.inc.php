<?php


// grabbing the data
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $captcha = htmlspecialchars($_POST["captcha"], ENT_QUOTES, 'UTF-8');
    $captchaRandom = htmlspecialchars($_POST["captchaRandom"], ENT_QUOTES, 'UTF-8');


  


// instantiate signup control class
include "dbh.classes.php";
include "admin.classes.php";
include "admin.controller.classes.php";

$login = new adminLoginContr($uid, $pwd);

// running error handlers and user sign up
$login->loginUser();

// going back to front page
header("location: admin.php?error=none");
}
