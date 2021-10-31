<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Club SSEC</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="login.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header" >

    <a href="#" class="logo"><span>Code</span> Club SSEC</a>

    <!-- <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="events.html">Events</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
    </nav> -->

    <div id="menu-bars" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home" style ="height: 100vh;background-image: url('https://media.nature.com/lw800/magazine-assets/d41586-019-00653-5/d41586-019-00653-5_16459152.jpg');background-size: cover;background-position: top;">

    <div class="content">
        <h3>Sri Sairam Engineering College</h3>
        <h3><span> Code Club </span></h3>
        <h3>ADMIN PANEL</h3>
        <a href="#adminlogin" class="btn">View More</a>
    </div>



</section>

<!-- home section ends -->


<section class="adminlogin" id="adminlogin" style="background:#f2f2f2;">
    <div class="container">
        <h1 class="heading"><span>ADMIN</span>Login</h1>
        <div class="wrapper">
          <div class="title"><span>Login Form</span></div>
          <form action="" method="post">
            <div class="row">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Username" required>
            </div>
            <div class="row">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
              <input style="color: white;"  name="submit" type="submit" value="submit">
            </div>
          </form>
        </div>
      </div>  
</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

<!-- 
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> About </a>
            <a href="events.html"> <i class="fas fa-arrow-right"></i> Events </a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> Gallery </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> Contact </a>
        </div> -->

        <!-- <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 044 - 2251 2222(8 LINES)</a>
            <a href="#"> <i class="fas fa-phone"></i> FAX : 044 - 2251 2229</a>
            <a href="#"> <i class="fas fa-envelope"></i>sairam@sairam.edu.in</a>
            <a href="#"> <i class="fas fa-envelope"></i>career@sairam.edu.in</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>
                SRI SAI RAM ENGINEERING COLLEGE<br>
                Sai Leo Nagar, West Tambaram,<br>
                Chennai - 600 044.<br>
                Tamil Nadu. India</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com/sairam.codeclub"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="https://instagram.com/sairam_code_club?utm_medium=copy_link"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
            <a href="#"> <i class="fab fa-youtube"></i> Youtube </a>
        </div>

    </div> -->

    <div class="credit"> &copy; Created by Fabulous Four | All Rights Reserved </div>

</section>

<!-- footer section ends -->

<!-- theme toggler  -->

<div class="theme-toggler">

    <div class="toggle-btn">
        <!-- <i class="fas fa-cog"></i> -->
    </div>
<!-- 
    <h3>choose color</h3>

    <div class="buttons">
        <div class="theme-btn" style="background: #3867d6;"></div>
        <div class="theme-btn" style="background: #f7b731;"></div>
        <div class="theme-btn" style="background: #ff0033;"></div>
        <div class="theme-btn" style="background: #20bf6b;"></div>
        <div class="theme-btn" style="background: #fa8231;"></div>
        <div class="theme-btn" style="background: #FC427B;"></div>
    </div> -->

</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>


<?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    if(strtolower($name)=="admin@gmail.com" and strtolower($password)=="admin"){ ?>
        <script>window.location.href="admin.php";</script>


    <?php }else{
        echo '<script>alert("Invalid Details.")</script>';
    }
}
?>
