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
    <link rel="stylesheet" href="style.css">

    <style>


    </style>

</head>

<body>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <a class="navbar-brand" href="#">i-INTERN</a>


        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ABOUT.HTML">About Us</a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="internship.html" id="navbardrop" data-toggle="dropdown">
                    Internship & Services
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Private Sector</a>
                    <a class="dropdown-item" href="#">Government Sector</a>
                    <a class="dropdown-item" href="#">Internship with Stiffened</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 text-white">
            <?php echo "<h1 style='font-size: 20px; padding-right: 60px;'>Welcome " . $_SESSION['username'] . "</h1>"; ?>
          <a href="logout.php" style="font-size: 20px;">Logout</i></a>
    </nav>
    
    <br>

    <!-- <div class="container-fluid">
        <h3> Providing various internship in One Platform</h3>
        <p>ANIKET YASHWANT POTBHARE</p>
    </div> -->





    <div class="bg-image"></div>

    <div class="bg-text">
        <h1 style="font-size: 60px;">i-INTERN</h1>
        <p style="font-size:30px"> Providing various internship at One Platform</p>
        <button type="button" class="btn btn-outline-secondary">GET STARTED</button>

    </div>
    </div>
 
    <hr>

 
    <div class="container  mb-1 " id="footerstyle">
    
        <footer class="page-footer font-small special-color-dark pt-4">
    
            <div class="footer-copyright text-center py-3">© 2022 Copyright:Inc. All Rights Reserved
                <a href="https://www.instagram.com/aniket_potbhare/?hl=en"> i-INTERN Internship Platform</a>
            </div>
    
    
        </footer>
</body>

</html>