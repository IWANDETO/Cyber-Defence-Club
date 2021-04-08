<?php
include_once('db.php');
if(isset($_POST['submit']))
{
   $email=$_POST['email']; 
  if(empty($email)){
      alert('Please input your email address');
  }else{  
    $sql="INSERT INTO subscription(email)
        VALUES('$email')";
    mysqli_query($con,$sql);
    //echo"user registration successful";
  }
   echo "<script>alert('Email successfully registered!');window.location.href='index.php';</script>"; 
   
}
?>

<!DOCTYPE html>
<html>
<head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="cyber security, cyber defence club, swift intellect, cyber space, cyber space kenya" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/b73ebcbd52.js" crossorigin="anonymous"></script>

<style>
body {

  background: url('bgimage3.jpg') no-repeat center center fixed;
  -webkit-background-size:cover;
  -moz-background-size:cover;
  -o-background-size:cover;
  background-size: cover;
}

 #main{
 margin: auto;
  float: left;
  color: white;
  padding: 20px;
}
#sidebar{
/*  float: right;
*/ 
  margin-top: 20px;
  padding: 20px;
  background: #666;
}
.newletter{
  color: white;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #2F4F4F;
  border: none;
  color: #35FBFB;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
  
.clr{
  clear: both;
} 
h4{
  color: #ff3300;
}

h2{
  color: #ccad00;
}
hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 2px;

} 
.navbar-nav a {
  font-size: 18px;
}
.navbar-light .navbar-brand {
  color:#35FBFB;
  font-size: 25px;
  letter-spacing: 2px;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
  color: #FF4500;
}
.navbar-light .navbar-nav .nav-link {
  color: #35FBFB;
}
.navbar-nav {
  text-align: center;
}
.nav-link {
  padding: .2rem 1rem;
}
.nav-link.active, .nav-link:focus {
  color: #fff;
}
.navbar-toggler {
  padding: 1px 5px;
  font-size: 18px;
  line-height: 0.3;
  background: #fff;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
  color: #fff;
}
.w-100 {
  height: 100vh;
}
@media only screen and (max-width: 767px) {
  .navbar-nav.ml-auto {
    background: rgba(0, 0, 0, 0.5);
  }
  .navbar-nav a {
    font-size: 14px;
    font-weight: normal;
  }
}
.list-unstyled a{
  color: white; 
  text-decoration: none;
}

</style>
<title>Cyber Defence Club</title>
</head>
<body>
  
 
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="Images/Logo.jpg" alt="Logo" width="80" height="110"></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cyberspace.php">CyberSpace</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12" id="main">
    <p>CyDC is a program by<a href="http://www.cyberspace.co.ke/" target="blank"></a> CYBER SPACE KENYA whose objective is to introduce & build capacity in early STEM education in Kenyan high schools Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
      <div id="sidebar">
      <h2>Cyber Space Kenya</h2>
      <p>CyberSpace Kenya is proudly powered by Swift Intellect. Swift Intellect is a cyber-security and software development firm registered in Kenya.As an organization, we do acknowledge that to be able to sustain our cyber-resilience, different sectors and stakeholders must work together. Cyber criminals do not sleep. They are actively looking for a single vulnerability that they can use to compromise your system.</p>

          <br>
    
          <a class="button btn-sm" styele="vertical-align:middle" href="cyberspace.php" role="button"><span>Read More </span></a>
        </div>
      </div>
  </div>
</div>


<div class="clr"></div>

<hr>

<div class="container">
<!-- Section: Form -->
    <section class="newletter">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <center>
              <h5><i>Never miss latest updates from Cyber Defence Club and upcoming events. Sign up to our Newsletter and be the first to get updates from us!</i></h5>
              <strong><h4>Sign up for our Newsletter!</h4></strong>
              </center>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" placeholder="Email Address" />
             
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

  </div>


<hr>
 
 
<section class="">
  <!-- Footer -->
  <footer class="bg-secondary text-white text-center">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>

          <p>
            CyberSpace Kenya is proudly powered by Swift Intellect. Swift Intellect is a cyber-security and software development firm registered in Kenya. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="index.php" class="link-info">Home</a>
            </li>
            <li>
              <a href="cyberspace.php" class="link-info">CyberSpace</a>
            </li>
            <li>
              <a href="about.php" class="link-info">About</a>
            </li>
            <li>
              <a href="contact.php" class="link-info">Contact</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/SwiftIntellect/" role="button" target="blank" 
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/swiftintellect?lang=en" role="button" target="blank"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/search?client=firefox-b-d&q=swiftintellect" role="button" target="blank"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/swiftintellect" role="button" target="blank"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     Copyright &copy;:
    <a class="text-white" href="https://swiftintellect.org/" target="blank">SwiftIntellect.org</a> 2021 All Rights Reserved

  </div>
  <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>


</body>
</html>
