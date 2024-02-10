
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>iIntern- Internship Platform</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  

    <style>

body
{ 
    background: rgb(203 173 154 / 62%);
}
    </style>

</head>

<body>


<nav class="  navbar sticky-top navbar navbar-expand-sm bg-dark navbar-dark">

<a class="navbar-brand" href="welcome.php">i-INTERN</a>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="welcome.php">Home</a>
    </li> 
    <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Internship & Services
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Private Sector</a>
            <a class="dropdown-item" href="new_government.php">Government Sector</a>
            <!-- <a class="dropdown-item" href="#">Internship with Stiffened</a> -->
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
    </li>
</ul>

<form class="form-inline my-2 my-lg-0 text-white">
      <?php echo "<h1 style='font-size: 20px; padding-left: 1050px;'>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php" style="font-size: 20px;    padding-left: 20px;">Logout</i></a>
    </form>
  </div>
</nav>

<hr>
<!-- End Navbar -->


<!-- DIVIDED SECOND PAGE FROM HERE  -->


<div class="container text-center pt-4 pb-4 mb-4">
      
    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"  style="color: red">Private Sector  Internship</h2>
              <H4>PSK Technologies Pvt.ltd</H4>
              <p class="card-text" >Internship in web development, Web Hosting, Digital Marketing sales & services
                <br> <b>Address:</b>Development Office:
Lower Ground Fortune Mall, behind Maharashtra bank, Sitabuldi, Nagpur

            </p>
              <a href=":https://www.google.com/url?sa=t&source=web&rct=j&url=https://www.pskitservices.com/&ved=2ahUKEwjeqPT54vP3AhVUSGwGHYAYAHsQ_Bd6BAgBEAQ&usg=AOvVaw0gY2O5XoK0S-zn0nQ37nuD" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">

            <div class="card-body">
                <h2 class="card-title"  style="color: red" >Private Sector  Internship</h2>
                <H4>Alive Tech Services</H4>
              <p class="card-text">Grab your  Certification Cources in PHP and Python Language.
                  <br>  <b>ADDRESS:</b> Plot no. 12 ,Ground floor, Gayatri Nagar, Nagpur, Maharashtra 440022
              </p>
              <a href="#" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
      </div>


      <br>


      
    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"  style="color: red">Private Sector  Internship</h2>
              <H4>Royals Webtech</H4>
              <p class="card-text" >Internship in web development, Python Certification
                <br> <B>ADDRESS:</B>4th Floor, JB Wing, Mangalwari Complex, near Government Polytechnic College, Sadar, Nagpur, Maharashtra 440001

            </p>
              <a href="http://royalswebtechpvtltd.com/" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">

            <div class="card-body">
                <h2 class="card-title"  style="color: red" >Private Sector  Internship</h2>
                <H4>Codeograph Solutions</H4>
              <p class="card-text">Grab your Internship in Android,Graphics designing, Digital marketing
              <br> <B>ADDRESS:The Place 125, Nelco Society, Parsodi, Trimurtee Nagar, Nagpur, Maharashtra 440022</B>
              </p>
              <a href="https://codeographsolutions.com/" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
      </div>



      <br>

      
    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"  style="color: red">Private Sector  Internship</h2>
              <H4>WebGurukul</H4>
              <p class="card-text" >Internship in web development, Android Development ,ML
              <br> <B>ADDRESS:Software training institute in Nagpur, Maharashtra, Nagpur, Maharashtra 440022</B>
              </p>
              <a href="https://webgurukul.co.in/" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">

            <div class="card-body">
                <h2 class="card-title"  style="color: red" >Private Sector  Internship</h2>
                <H4>IT PARK</H4>
              <p class="card-text">Grab your Internship in Android,Linus OS.
                  <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla vitae aliquid blanditiis sed unde eaque quaerat ex quo? khgjh 
              </p>
              <a href="#" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
      </div>


      <br>


      
    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"  style="color: red">Private Sector  Internship</h2>
              <H4>IT PARK</H4>
              <p class="card-text" >Internship in web development
                <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla vitae aliquid blanditiis sed unde eaque quaerat ex quo? khgjh
            </p>
              <a href="#" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">

            <div class="card-body">
                <h2 class="card-title"  style="color: red" >Private Sector  Internship</h2>
                <H4>IT PARK</H4>
              <p class="card-text">Grab your Internship in Android,Linus OS.
                  <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla vitae aliquid blanditiis sed unde eaque quaerat ex quo? khgjh 
              </p>
              <a href="#" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
      </div>
</div>


<br>


<div class="container  pt-4 pb-4 mb-4">
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="private.php">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>

<hr>



<!-- ***FOOTER*** -->
<div class="container  mb-1 " id="footerstyle">

    <footer class="page-footer font-small special-color-dark pt-4">

        <div class="footer-copyright text-center py-3">© 2022 Copyright:Inc. All Rights Reserved
            <a href="https://www.instagram.com/aniket_potbhare/?hl=en"> i-INTERN Internship Platform</a>
        </div>


    </footer>
<!-- ***FOOTER*** -->
</html>












