<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
      :root{
    --main-color:#3867d6;
}

      * {
        box-sizing: border-box;
      }
      
.header{
    position: fixed;
    top:0; left: 0; right: 0;
    z-index: 10000;
    background: #333;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:1.5rem 9%;
}

.header .logo{
    font-weight: bolder;
    color:#fff;
    font-size: 2.5rem;
}

.header .logo span{
    color:var(--main-color);
}

.header .navbar a{
    font-size: 0.7rem;
    color:#fff;
    margin-left: 2rem;
}

.header .navbar a:hover{
    color:var(--main-color);
}
#menu-bars{
    font-size: 3rem;
    color:#fff;
    cursor: pointer;
    display: none;
}
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }
      
      label {
        padding: 12px 12px 12px 0;
        display: inline-block;
      }
      
      input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
      }
      
      input[type=submit]:hover {
        background-color: #45a049;
      }
      
      .upd .container {
        border-radius: 10px;
        background-color: #f2f2f2;
        padding: 20px;
        border-style: double;
        width: 40%;
      }
      
      .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        font-weight: bolder;
      }
      
      .col-75 {
        float: left;
        width: 55%;
        margin-top: 6px;
      }
      
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      body{
        background-image: url('upcoming-event.jpg');
        background-size: 100% 100%; 
        background-repeat: no-repeat; 
        background-position: center;
        background-attachment: fixed;
      }
      /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
          width: 100%;
          margin-top: 0;
        }
      }
      </style>
  </head>
  <body>
    
<header class="header" >

  <a href="#" class="logo" style="text-decoration: none;"><span>Code</span> Club SSEC</a>

  <!-- <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="events.html">Events</a>
      <a href="#gallery">Gallery</a>
      <a href="#contact">Contact</a>
  </nav> -->

  <div id="menu-bars" class="fas fa-bars"></div>

</header><br>
<br>
<br>
<br>
<br>
<br>
<section class="upd">
  <h1 style="margin-left: 510px;">EVENT UPDATION</h1>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-25">
          <label for="fname">Name:</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="name" placeholder="Name of the event" required="">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Time:</label>
        </div>
        <div class="col-75">
          <input type="time" id="lname" name="time">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Date:</label>
        </div>
        <div class="col-75">
          <input type="date" id="lname" name="date">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Link:</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="link" placeholder="Event's link">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Description:</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="description" placeholder="Write something.." style="height:150px" required=""></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Poster:</label>
        </div>
        <div class="col-75">
          <input type="file" id="lname" name="poster" placeholder="Your email..">
        </div>
      </div>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="inputGroupFile01"
            aria-describedby="inputGroupFileAddon01" name="files">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="submit" name="submit" >
      </div>
      
    </form>
    
  </div>
 
        
</section>  
      
  
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php 

ob_start();
$connection=mysqli_connect("localhost:3307","root","","meets");
if(!$connection){ ?>
    <script>window.location.href="Error404.php";</script>
<?php 
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $link=$_POST['link'];
    $description=$_POST['description'];
    $filename=$_FILES['poster']['name'];
    $source=$_FILES['poster']['tmp_name'];
    $destination="uploadedimages/".$filename;
    move_uploaded_file($source, $destination);
    $register="Register";
    $details="INSERT INTO event(name,date,time,image,description,link,register) VALUES ('$name','$date','$time','$filename','$description','$link','$register')";
    $query=mysqli_query($connection,$details);
    if($query and isset($_POST['submit'])){
      echo '<script>alert("Data Added Successfully")</script>'; ?>
      <script>window.location.href="admin.php";</script>
    <?php }


  }
?>