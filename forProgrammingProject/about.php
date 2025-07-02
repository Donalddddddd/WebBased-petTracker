<?php

session_start();
include_once("header.php");
include_once("aside.php");

?>
    <section class="content">
        <h1 class="head-txt">Dashboard</h1>
        <div class="head-back"><span class="head-front"></span></div>
        <section class="component">
            <div class="box personalBox">
                <div class="top">
                    <h2>Welcome</h2>
                    <p>Purrfect!</p>
                    <figure><img src="image\purrfect9.png" alt="user photo"></figure>
                </div>
                <div class="component profile-container">
                    <div class="box profile-box">
                        <div class="even-column">
                            <div class="right">
                                <div class="righter">
                                    <p><b>Contact Information</b></p>
                                    <div class="even-column">
                                        <div>
                                            <p><b>Name:</b> Donald Eltagunde </p>
                                        </div>
                                        <div>
                                            <p><b>Phone:</b> 09876543210 </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="righter">
                                    <div class="even-column">
                                        <div>
                                            <p><b>Address:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="righter">
                                    <div class="even-column">
                                        <div>
                                            <p><b>Email:</b> haroldpogi@gmail.com </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="top">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet,</p>
                </div>
                <input type="text" placeholder="">
                <textarea placeholder="" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="box reminders">
                <div class="head">
                    <h1>Branches:</h1>
                </div>
                <div>
                    <h5>
                        Manila Branch
                    </h5>
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                </div>
                <div>
                    <h5>
                        Malabon Branch
                    </h5>
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                </div>
                <div>
                    <h5>
                        Rizal Branch
                    </h5>
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                </div>
                <div>
                    <h5>
                        Quezon City Branch
                    </h5>
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    </p>
                </div>
            </div>
            <div class="box social-media">
                <div class="head">
                    <h1>Social Media</h1>
                </div>
                <div class="body">
                    <div class="app even-column">
                        <figure><img src="./imgs/twitter.svg" alt="twitter"></figure>
                        <p>90K Followers</p>
                        <button>Follow</button>
                    </div>
                    <div class="app even-column">
                        <figure><img src="./imgs/facebook-f.svg" alt="Facebook"></figure>
                        <p>2M Like</p>
                        <button>Follow</button>
                    </div>
                    <div class="app even-column">
                        <figure><img src="./imgs/youtube.svg" alt="Youtube"></figure>
                        <p>1M Subscirbe</p>
                        <button>Follow</button>
                    </div>
                    <div class="app even-column">
                        <figure><img src="./imgs/linkedin.svg" alt="Linkedin"></figure>
                        <p>90K Followers</p>
                        <button>Follow</button>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>
</html>
