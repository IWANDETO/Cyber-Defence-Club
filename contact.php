<?php
include_once('db.php');
if(isset($_POST['submit']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message']; 
  if(empty($first_name)||empty($last_name)||empty($address)||empty($email)||empty($phone)){
      alert('Please input all details');
  }else{  
    $sql="INSERT INTO contact(first_name,last_name,address,email,phone,message)
        VALUES('$first_name','$last_name','$address','$email','$phone','$message')"
        ;
    mysqli_query($con,$sql);
    //echo"contact registration successful";
  }
   echo "<script>alert('Details successfully registered!');window.location.href='index.php';</script>"; 
   
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

h1{
  color: #ccad00;
}
h3{
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

#contact{
  color: white;
  padding: 20px;

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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cyberspace.php">CyberSpace</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<hr>
<br>

<div class="container">
  <center>
<h1>CONTACT US</h1>
<br>
<h3><i>For inquiries, comments or suggestions, please use the form below to send us a message.</i></h3>
</center>
<br>
<div id="contact">
<form method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="firstname" class="form-control" name="first_name" required>
        <label class="form-label" for="firstname">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="lastname" class="form-control" name="last_name" required>
        <label class="form-label" for="lastname">Last name</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="address" class="form-control" name="address" required>
    <label class="form-label" for="address">Address</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" class="form-control" name="email" required>
    <label class="form-label" for="email">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="phone" class="form-control" name="phone" required>
    <label class="form-label" for="phone">Phone</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
    <label class="form-label" for="message">Your Message</label>
  </div>


  <!-- Submit button -->
  <center><button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Submit</button></center>
</form>
</div>
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
