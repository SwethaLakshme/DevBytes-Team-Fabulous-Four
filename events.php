<?php 

            $connection=mysqli_connect("localhost:3307","root","","meets");
if(!$connection){ ?>
    <script>window.location.href="Error404.php";</script>
<?php 
}
$f=0;
if(isset($_GET['event']))
{
    $f=1;
    $event=$_GET['event'];
}


?>












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
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    
<!-- header section starts  -->

<header class="header" >

    <a href="#" class="logo"><span>Code</span> Club SSEC</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="index.php#about">About</a>
        <a href="events.php">Events</a>
        <a href="index.php#gallery">Gallery</a>
        <a href="index.php#contact">Contact</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>

<section class="home" id="home" style ="height: 80vh;background-image: url('https://media.nature.com/lw800/magazine-assets/d41586-019-00653-5/d41586-019-00653-5_16459152.jpg');background-size: cover;background-position: top;">

    <div class="content">
        <h3>Events</h3>
        <h3><span> Code Club </span></h3>
        <a href="#eve" class="btn">View More</a>
    </div>



</section>

<!-- home section ends -->

<section class = "events" id="eve">
    
    <div class="container">
        <h1 class="heading"><span>E</span>vents</h1>

<?php 

            $connection=mysqli_connect("localhost:3307","root","","meets");
if(!$connection){ ?>
    <script>window.location.href="Error404.php";</script>
<?php 
}

            $sql = "SELECT * from event";
            $result= $connection-> query($sql);
            $f=0;$sum=0;
            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){ 
                    

                    ?>



        <div class="card">
            <div class="imgBx">
                <img src="uploadedimages/<?php echo $row['image']; ?>">
            </div>
            <div class="description">
                <h3><?php echo $row['name']; ?></h3>
                <p><?php echo $row['description']; ?></p>
                <form action="" method="GET">
                    <input type="hidden" name="product-title" value="Activewear">
                    
                    <div class="row pb-3" style="margin-top: 15px; ">
    
                        <div class="col d-grid">
                    
                            <a  class="btn btn-success btn-lg  add-to-cart" href="https://docs.google.com/forms/d/e/1FAIpQLSfpUwK85m2apyMWQP9PfxjMyqpnTJvLaaPBIKD5E7J1ibl7QA/viewform?vc=0&c=0&w=1&flr=0" data-name="" data-price=""><?php echo $row['register']; ?></a>
    
                            
                        </div>
                        <script >
                            function f(a){
                                window.v=a;
                            
                            document.getElementById('id01').style.display='block';
                        }
                        function g(){
                            window.location.href="events.php?even=" + window.v;
                        }


                        </script>
    
                    
                        
                        
                    </div>
                </form>
            </div>
        </div>
        <?php 
            }
        } 
    ?>
       <!-- <div class="card">
            <div class="imgBx">
                <img src="images/e-2.jpg">
            </div>
            <div class="description">
                <h3>Event 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates totam ab nihil sed? Ipsum illo aspernatur consectetur quia perferendis, vitae odio dignissimos voluptate amet necessitatibus asperiores maiores dicta quae modi velit consequatur minus possimus aperiam ullam rerum qui reprehenderit? Alias repellat in voluptate optio praesentium rem iusto quidem officiis omnis nobis molestias distinctio deserunt unde, veniam laudantium voluptatibus tenetur suscipit, non quasi incidunt, illo eveniet ducimus veritatis quae. Odit sed velit nemo sequi quas suscipit omnis dicta aspernatur molestias quo consectetur eaque in, ea exercitationem reiciendis? Debitis repudiandae consectetur saepe atque quis vero impedit fugiat voluptatibus ullam. Facilis, corporis quos.</p>
                <form action="" method="GET">
                    <input type="hidden" name="product-title" value="Activewear">
                    
                    <div class="row pb-3" style="margin-top: 15px; ">
    
                        <div class="col d-grid">
                    
                            <a  class="btn btn-success btn-lg  add-to-cart" onclick="document.getElementById('id01').style.display='block'" data-name="" data-price="">Register</a>
    
                            
                        </div>
    
                    
                        
                        
                    </div>
                </form>
            </div>
        </div>-->
       <!-- <div class="card">
            <div class="imgBx">
                <img src="images/e-3.jpg">
            </div>
            <div class="description">
                <h3>Event 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates totam ab nihil sed? Ipsum illo aspernatur consectetur quia perferendis, vitae odio dignissimos voluptate amet necessitatibus asperiores maiores dicta quae modi velit consequatur minus possimus aperiam ullam rerum qui reprehenderit? Alias repellat in voluptate optio praesentium rem iusto quidem officiis omnis nobis molestias distinctio deserunt unde, veniam laudantium voluptatibus tenetur suscipit, non quasi incidunt, illo eveniet ducimus veritatis quae. Odit sed velit nemo sequi quas suscipit omnis dicta aspernatur molestias quo consectetur eaque in, ea exercitationem reiciendis? Debitis repudiandae consectetur saepe atque quis vero impedit fugiat voluptatibus ullam. Facilis, corporis quos.</p>
                <form action="" method="GET">
                    <input type="hidden" name="product-title" value="Activewear">
                    
                    <div class="row pb-3" style="margin-top: 15px; ">
    
                        <div class="col d-grid">
                    
                            <a  class="btn btn-success btn-lg  add-to-cart" onclick="document.getElementById('id01').style.display='block'" data-name="" data-price="">Register</a>
    
                            
                        </div>
    
                    
                        
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="images/e-4.jpg">
            </div>
            <div class="description">
                <h3>Event 4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates totam ab nihil sed? Ipsum illo aspernatur consectetur quia perferendis, vitae odio dignissimos voluptate amet necessitatibus asperiores maiores dicta quae modi velit consequatur minus possimus aperiam ullam rerum qui reprehenderit? Alias repellat in voluptate optio praesentium rem iusto quidem officiis omnis nobis molestias distinctio deserunt unde, veniam laudantium voluptatibus tenetur suscipit, non quasi incidunt, illo eveniet ducimus veritatis quae. Odit sed velit nemo sequi quas suscipit omnis dicta aspernatur molestias quo consectetur eaque in, ea exercitationem reiciendis? Debitis repudiandae consectetur saepe atque quis vero impedit fugiat voluptatibus ullam. Facilis, corporis quos.</p>
                <form action="" method="GET">
                    <input type="hidden" name="product-title" value="Activewear">
                    
                    <div class="row pb-3" style="margin-top: 15px; ">
    
                        <div class="col d-grid">
                    
                            <a  class="btn btn-success btn-lg  add-to-cart" onclick="document.getElementById('id01').style.display='block'" data-name="" data-price="">Register</a>
    
                            
                        </div>
    
                    
                        
                        
                    </div>
                </form>
            </div>
            
        </div>-->
    </div>
</section>
<section class="footer">

    <div class="box-container">


        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> About </a>
            <a href="events.html"> <i class="fas fa-arrow-right"></i> Events </a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> Gallery </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> Contact </a>
        </div>

        <div class="box">
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

    </div>

    <div class="credit"> &copy; Created by Fabulous Four | All Rights Reserved </div>

</section>

<!-- footer section ends -->


















<script>
let menu = document.querySelector('#menu-bars');
    let navbar = document.querySelector('.navbar');
    
    menu.onclick = () =>{
      menu.classList.toggle('fa-times');
      navbar.classList.toggle('active');
    }</script>

<div id="id01" class="modal container-fluid " >
    <br>
    <span onclick="document.getElementById('id01').style.display='none'" class="close" style="color:white;"title="Close Modal">&times;</span>
    <div class="centre signin-box" >
        <div class="container-1">
            <h1>REGISTER</h1> <br><br>
        <form action="events.php" method="post">
            <div class="data">
                <label for="email"><b style="font-size: 20px;">Name:</b></label><br>
                <input style="text-align: center; font-size: 15px;"  type="text" autocomplete="name" placeholder="Name" maxlength="50" placeholder="Enter Name" name="name" required="">
            </div>
            <div class="data">
                <label for="email"><b style="font-size: 20px;">Email:</b></label>
                <input style="text-align: center;"  type="text" autocomplete="email" placeholder="Email" maxlength="50" placeholder="Enter Email" name="email" required="">
            </div>

            <div class="data">
                <label for="psw"><b style="font-size:20px">Dept/Year/Sec:</b></label><br>
                <!--<input type="password" placeholder="Enter Password" name="psw" required>-->
                <select name="dept" style="padding: 10px 7px;border: 1px solid #ffa93f;">
                    <option>CSE</option>
                    <option>IT</option>
                    <option>ECE</option>
                    <option>MECH</option>
                    <option>EEE</option>
                </select>&nbsp;&nbsp;
                <select name="year" style="padding: 10px 7px;border: 1px solid #ffa93f;">
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                    <option>IV</option>
                </select>&nbsp;&nbsp;
                <select name="sec" style="padding: 10px 7px;border: 1px solid #ffa93f;">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                </select>
            </div><br>
            <div class="data">
                <label for="eventreg"><b style="font-size:20px">College:</b></label><br>
                <select name="college" style="padding: 10px 7px;border: 1px solid #ffa93f;">
                    <option>SSEC</option>
                    <option>SSIT</option>
                    
                </select>
            </div><br>
            <div class="data">
                <label for="email"><b style="font-size:20px">Phone Number:</b></label>
                <input style="text-align: center;"  type="text" autocomplete="email" maxlength="50" placeholder="Enter Phone Number" name="pno" required="">
            </div>
                
            
                  
            <div class="clearfix">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><span style="font-size:15px">Cancel</span></button>
              <button name="submit" onclick="g()" type="submit" value="submit" class="signinbtn"><span style="font-size:15px">Register</span></button>
            </div>

            <!--<div class="signin-link">Not a member?  <a href="signup.php?login_status=<?php echo $login_status; ?>">Create a account</a></div> -->
          </form>
        </div>
    </div>
</div>

    <script>
          // Get the modal
          var modal = document.getElementById('id01');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          </script>
          <!--Pop up of Sign IN form ends-->

</body>
</html>
<?php

ob_start();
$connection=mysqli_connect("localhost:3307","root","","meets");
if(!$connection){ ?>
    <script>window.location.href="Error404.php";</script>
<?php 
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $year=$_POST['year'];
    $sec=$_POST['sec'];
    $college=$_POST['college'];
    $pno=$_POST['pno'];
    $details="INSERT INTO register(name,email,dept,year,sec,college,pno) VALUES ('$name','$email','$dept','$year','$sec','$college','$pno')";
    $query=mysqli_query($connection,$details);
    if($query){
        echo '<script>alert("Your have Registered Successfully for this event.")</script>';
        header("Refresh:0;url=events.php");
    }
}
?>
    



