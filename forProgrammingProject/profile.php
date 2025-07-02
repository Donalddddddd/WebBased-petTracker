<?php

session_start();
include_once("header.php");
include_once("aside.php");

include "dbh.classes.php";
include "profile.classes.php";
include "login.classes.php";
include "profile.contr.classes.php";
include "profile.view.classes.php";

$profileInfo = new profileInfoView();

if(!isset($_SESSION["userid"]))
{

 exit();
}

?>

    <section class="content">
      <form class="" action="profile.inc.php" method="post">
          <h1 class="head-txt">Profile</h1>
          <div class="head-back"><span class="head-front"></span></div>
          <div class="component profile-container">
              <div class="box profile-box">
                  <div class="even-column">
                      <div class="left">

                          <div class="head-back">
                              <span class="head-front"></span>
                          </div>
                      </div>
                      <div class="right">
                          <div class="righter">
                              <h3>Owner Information</h3>
                              <div class="even-column">
                                  <div>
                                      <p><b>Full Name:</b> <?php $profileInfo->fetchFullname($_SESSION['userid']); ?> </p>
                                  </div>
                                  <div>
                                      <p><b>Gender:</b> <?php $profileInfo->fetchGender($_SESSION["userid"]); ?> </p>
                                  </div>
                                  <div>
                                      <p><b>Address:</b> <?php $profileInfo->fetchAddress($_SESSION["userid"]); ?> </p>
                                  </div>
                              </div>
                          </div>
                          <div class="righter">
                              <h3>Personal Information</h3>
                              <div class="even-column">
                                  <div>
                                      <p><b>Email:</b> <?php $profileInfo->fetchEmail($_SESSION["userid"]); ?> </p>
                                  </div>
                                  <div>
                                      <p><b>Phone:</b> <?php $profileInfo->fetchPhone($_SESSION["userid"]); ?> </p>
                                  </div>
                                  <div>
                                      <p><b>Date of birth:</b> <?php $profileInfo->fetchDateOfBirth($_SESSION["userid"]); ?> </p>
                                  </div>
                              </div>
                          </div>
                          <div class="righter">
                              <h3>Dog Information</h3>
                              <div class="even-column">
                                  <div>
                                    <p><b>Pet Breed:</b>  <?php $profileInfo->fetchPetName($_SESSION['userid']); ?></p>

                                  </div>
                                  <div>
                                      <p><b>Pet Breed:</b>  <?php $profileInfo->fetchPetBreed($_SESSION['userid']); ?></p>
                                  </div>
                                  <div>
                                      <p><b>Pet Type:</b> <?php $profileInfo->fetchPetType($_SESSION['userid']); ?> </p>
                                  </div>
                              </div>
                          </div>
                          <div class="righter">
                              <div class="even-column">
                                  <button type="submit" formaction="profileSetting.php">Profile Setting</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </form>
    </section>
</body>
</html>
