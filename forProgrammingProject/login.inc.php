<?php


// grabbing the data
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');



// instantiate signup control class
include "dbh.classes.php";
include "login.classes.php";
include "login.controller.classes.php";

$login = new loginContr($uid, $pwd);

// running error handlers and user sign up
$login->loginUser();

// going back to front page
header("location: profile.php?error=none");
}
