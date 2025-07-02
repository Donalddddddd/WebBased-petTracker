<?php

session_start();
include_once("header.php");
include_once("aside.php");

include "dbh.classes.php";
include "profile.classes.php";
include "profile.view.classes.php";
$profileInfo = new profileInfoView();
?>

<section class="content">
      <form action="profile.inc.php" method="post" enctype="multipart/form-data">
        <h1 class="head-txt">Profile</h1>
        <div class="head-back"><span class="head-front"></span></div>
        <div class="component profile-container">
            <div class="box profile-box">
                <div class="even-column">
                    <div class="left">
                      <button type="submit" name="submit" formaction="index.php">Edit profile picture</button>

                    </div>
                    <div class="right">
                        <div class="righter">
                            <p>General Information</p>
                            <div class="even-column">
                                <div>
                                    <input type="text" id="fullname" name="fullname" placeholder="Full Name" value="<?php $profileInfo->fetchFullname($_SESSION["userid"]); ?>">
                                </div>
                                <div>
                                    <input type="text" id="gender" name="gender" placeholder="Gender" value="<?php $profileInfo->fetchGender($_SESSION["userid"]); ?>">
                                </div>
                                <div>
                                    <input type="text" id="address" name="address" placeholder="Address" value="<?php $profileInfo->fetchAddress($_SESSION["userid"]); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="righter">
                            <p>Personal Information</p>
                            <div class="even-column">
                                <div>
                                    <input type="text" id="email" name="email" placeholder="Email" value="<?php $profileInfo->fetchEmail($_SESSION["userid"]); ?>">
                                </div>
                                <div>
                                    <input type="text" id="phone" name="phone" placeholder="Phone" value="<?php $profileInfo->fetchPhone($_SESSION["userid"]); ?>">
                                </div>
                                <div>
                                    <input type="text" id="dateofbirth" name="dateofbirth" placeholder="Date of birth" value="<?php $profileInfo->fetchDateOfBirth($_SESSION["userid"]); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="righter">
                            <p>Personal Information</p>
                            <div class="even-column">
                                <div>
                                  <input type="text" id="petname" name="petname" placeholder="Pet name" value="<?php $profileInfo->fetchPetName($_SESSION["userid"]); ?>">
                                </div>
                                <div>
                                    <input type="text" id="petbreed" name="petbreed" placeholder="Pet Breed" value="<?php $profileInfo->fetchPetBreed($_SESSION["userid"]); ?>">
                                </div>
                                <div>
                                  <input type="text" id="pettype" name="pettype" placeholder="Pet Type" value="<?php $profileInfo->fetchPetType($_SESSION["userid"]); ?>">
                                </div>

                            </div>
                        </div>
                        <div class="righter">

                            <div class="even-column">

                              <button type="submit" name="submit">Submit</button>
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
