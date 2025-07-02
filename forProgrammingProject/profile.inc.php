<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $id = $_SESSION["userid"];
  $uid = $_SESSION["useruid"];
  $fullname = htmlspecialchars($_POST["fullname"], ENT_QUOTES, 'UTF-8');
  $gender = htmlspecialchars($_POST["gender"], ENT_QUOTES, 'UTF-8');
  $address = htmlspecialchars($_POST["address"], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
  $phone = htmlspecialchars($_POST["phone"], ENT_QUOTES, 'UTF-8');
  $petName = htmlspecialchars($_POST["petname"], ENT_QUOTES, 'UTF-8');
  $petType = htmlspecialchars($_POST["pettype"], ENT_QUOTES, 'UTF-8');
  $dateOfBirth = htmlspecialchars($_POST["dateofbirth"], ENT_QUOTES, 'UTF-8');
  $petBreed = htmlspecialchars($_POST["petbreed"], ENT_QUOTES, 'UTF-8');

  include "dbh.classes.php";
  include "profile.classes.php";
  include "profile.contr.classes.php";
  $profileInfo = new profileInfoContr($id, $uid);

  $profileInfo->updateProfileInfo($fullname, $gender, $address, $phone,  $petType, $petBreed, $petName, $email, $dateOfBirth);

  header("location: profile.php?error=none");
}
