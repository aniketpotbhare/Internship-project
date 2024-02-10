
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

<a class="navbar-brand" href="#">i-INTERN</a>
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
            <a class="dropdown-item" href="private.php">Private Sector</a>
            <a class="dropdown-item" href="#">Government Sector</a>
            <a class="dropdown-item" href="#">Internship with Stiffened</a>
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

<!-- End Navbar -->




<div class="container text-center pt-4 pb-4 mb-4">

<h1  style="color:brown , font"   > <b>Government Sector Internship's</b></h1>

</div>

<div class="conatiner">
    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"  style="color: red">Government Sector  Internship</h2>
              <H4>NATIONAL ENVIRONMENTAL ENGINEERING RESEARCH INSTITUTE. (NEERI) </H4>
              <p class="card-text" >Internship in AI (Artificial Intilligence) & web development
                <br> <b>ADDRESS</b> - Nehru Marg, vasant nagar ,Nagpur
            </p>
              <a href="https://www.neeri.res.in/#googtrans(en|en)" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
     
            <div class="card-body">
                <h2 class="card-title"  style="color: red" >Government Sector  Internship</h2>
                <H4>ISRO (Indian Space Research Organization)</H4>
              <p class="card-text">Grab your Internship in Android,Linus OS.
                  <br>  <b>ADDRESS</b> - Seminari Hills,Nagpur
              </p>
              <a href="https://www.isro.gov.in/about-isro/isro-centres" class="btn btn-primary">APPLY HERE</a>
            </div>
          </div>
        </div>
      </div>
</div>


<!-- <div class="container">
    hi i am aniket aniket_potbhare
</div> -->



<br>
<br>
<br>
<br>

<br>
<br>

<!-- ***FOOTER*** -->
<div class="container  mb-1 " id="footerstyle">

    <footer class="page-footer font-small special-color-dark pt-4">

        <div class="footer-copyright text-center py-3">© 2022 Copyright:Inc. All Rights Reserved
            <a href="https://www.instagram.com/aniket_potbhare/?hl=en"> i-INTERN Internship Platform</a>
        </div>


    </footer>
<!-- ***FOOTER*** -->
</html>












