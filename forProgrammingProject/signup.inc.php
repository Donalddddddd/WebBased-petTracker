<?php


// grabbing the data
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $pwdRepeat = htmlspecialchars($_POST["pwdRepeat"], ENT_QUOTES, 'UTF-8');;
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');



// instantiate signup control class
include "dbh.classes.php";
include "signup.classes.php";
include "signup-controller.classes.php";

$signup = new signupContr($uid, $pwd, $pwdRepeat, $email);

// running error handlers and user sign up
$signup->signupUser();

$userId = $signup->fetchUserId($uid);

// instantiate profileInfoContr class
include "profile.classes.php";
include "profile.contr.classes.php";
$profileInfo = new profileInfoContr($userId, $uid);
$profileInfo->defaultProfileInfo();

// going back to front page
header("location: login2.php?error=none");
}
