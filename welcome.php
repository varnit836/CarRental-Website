<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome | Car Rental</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/welcome.css" />
  </head>
  <body>
    <!------Navbar Start Here-------->

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html"><b>CAR RENTAL PORTAL</b></a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="car_listing.html">Car Listing</a></li>
          <li><a href="about_us.html">About Us</a></li>
          <li><a href="contact_us.html">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="">
              <span class="glyphicon glyphicon-user"> <?php echo $_SESSION["username"]; ?></span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-------Navbar end Here------->

    <!-------Main start here------->
    <main>
        <div>
            <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
            <p>
                <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
            </p>
        </div>
    </main>

    <!--------Main end here-------->

    <!------Footer start here------->

    <footer class="footer-area">
        <div class="footer-content">
          &copy; 2022 Copyright
          <a href="index.html"> CAR RENTAL</a>
        </div>
    </footer>
  
    <!------Footer end here------->
  </body>
</html>