<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PetBook</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="frontPage.css">
<script src="https://kit.fontawesome.com/0844be89ea.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar">
        <ul class="nav-links">
            <li class="active"><a href="" target="_self">Home</a></li>
            <li><a href="#pet">Pets</a></li>
            <li><a href="#about">About us</a></li>
            <button class="login-btn">Login</button>
        </ul>
        <h1 class="logo">
            <img src="" style="width:50px; height: 50px">
        </h1>
    </nav>
    <div class="header">
        <div class="header-content-top">
            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore quisquam quae fugit nostrum laborum tempora provident veritatis cupiditate, iure.</h2>
        </div>

        <div class="header-content-left">
            <h1></h1>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto repudiandae voluptatum, aperiam deleniti consequuntur non repellat pariatur eaque nam rerum ipsa. Nihil rerum sequi tenetur tempora consequatur eaque nobis corrupti!</h2>
        </div>
        <div class="header-content-center">
            <h1></h1>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto repudiandae voluptatum, aperiam deleniti consequuntur non repellat pariatur eaque nam rerum ipsa. Nihil rerum sequi tenetur tempora consequatur eaque nobis corrupti!</h2>
        </div>
        <div class="header-content-right">
            <h1></h1>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eligendi, odit explicabo numquam voluptate eos in dicta autem ut doloribus alias voluptatum perspiciatis tempora laboriosam, saepe ipsam minus, voluptatem tempore.</h2>
        </div>

        <div class="wrapper">

<span class="icon-close">
    <a href="#">
        <i class="fas fa-close"></i>
    </a>
</span>

<div class="form-box login">
    <h2>Login</h2>
    <form action="includes./login.inc.php" method="post">
        <div class="input-box">
            <span class="icon">
                <a href="#">
                    <i class="fas fa-envelope"></i>
                </a>
            </span>
            <input type="username" name="uid" placeholder="username" required>
            <label>Email</label>
        </div>
        <div class="input-box">
            <span class="icon">
                <a href="#">
                    <i class="fas fa-lock"></i>
                </a>
            </span>
            <input type="password" name="pwd" placeholder="password" required>
            <label>Password</label>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="">Forgot password?</a>
        </div>
        <button type="submit" class="submit-btn">Login</button>
        <div class="login-register">
            <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
        </div>
    </form>
</div>

    <section class="pet-content">
        <div class="pet-title">
            <h1>TOP PETS IN THE PHILIPPINES</h1>
        </div>

        <div class="pet-section">
        <input type="radio" id="all" name="button" checked>
        <input type="radio" id="dogs" name="button">
        <input type="radio" id="cats" name="button">
        <input type="radio" id="birds" name="button">

        <label class="tag all" for="all">all</label>
        <label class="tag tag1" for="dogs">Dogs</label>
        <label class="tag tag2" for="cats">Cats</label>
        <label class="tag tag3" for="birds">Birds</label>
        <br>
        </div>

        <div class="images">

            <img src="C:\xampp\htdocs\forProgrammingProject\image\p1.jpg"  class="dogs">
            <img src="image\p2.jpg"  class="dogs">
            <img src="image\p3.jpg"  class="dogs">
            <img src="image\p4.jpg"  class="dogs">
            <img src="image\p5.jpg"  class="dogs">
            <img src="image\p6.jpg"  class="dogs">



            <img src="image\p7.jpg"  class="cats">
            <img src="image\p8.jpg"  class="cats">
            <img src="image\p9.jpeg"  class="cats">
            <img src="image\p10.jpg"  class="cats">
            <img src="image\p11.jpg"  class="cats">
            <img src="image\p12.jpg"  class="cats">



            <img src="image\p13.jpg"  class="birds">
            <img src="image\p14.jpg"  class="birds">
            <img src="image\p15.jpg"  class="birds">

    </div>
    </section>

    <section>
        <div class="row">
          <h1>Our Team</h1>
        </div>
        <div class="row">
          <!-- Column 1-->
          <div class="column-1">
            <div class="card">
              <div class="img-container">
                <img src="image\p19.JPG" />
              </div>
              <h3>Harold Cabuntog</h3>
              <p>founder ng picture</p>
              <div class="icons">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- Column 2-->
          <div class="column-2">
            <div class="card">
              <div class="img-container">
                <img src="image\p17.jpg" />
              </div>
              <h3>Beatrice Ydelle Martinez</h3>
              <p>2nd founder</p>
              <div class="icons">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="row">
          <!-- Column 1-->
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="image\p16.jpg" />
              </div>
              <h3>Donald Eltagunde</h3>
              <p>pogi sa picture</p>
              <div class="icons">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- Column 2-->
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="image\p18.JPG" />
              </div>
              <h3>Paula Bolivia</h3>
              <p>3rd founder</p>
              <div class="icons">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- Column 3-->
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="image\p20.JPG" />
              </div>
              <h3>Jerico Arzadon</h3>
              <p>taga hawak ng cam</p>
              <div class="icons">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="frontPage.js"></script>
</body>
</html>
