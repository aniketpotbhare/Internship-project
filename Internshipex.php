
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

/* new css style */
* {
  box-sizing: border-box;
}

body {
  margin: 2px;
  font-family: Arial;
  font-size: 17px;
 
}

#myVideo {
  margin: 4px;
  top: 0;
  left: 0;
  bottom: 40px;
  min-width: 100%; 
  min-height: 80%;
 
  position: absolute;
  opacity: 0.5;
  /* top: 0;
  left: 0;
  width: 100%;
  width: 100%; */

}


.content {
  top: 0;
  bottom: 8px;
  color: black;
  padding: 20px;
  position: relative;
  width: 100%;
  height: 100%;
  /* display: flex; 
  align-items: center;
  justify-content: center;
   /* overflow: hidden;  */
}


.content h1 {
  text-align: center;
  font-size: 4rem;
  font-family: "Cookie";
  padding: 270px;
  margin: 160px;
  z-index: 1;
  opacity: 0.7;
}

/* 
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

/* additional button  */
/* #myBtn1 {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
} */ */

#myBtn:hover {
  background: #ddd;
  color: black;
}



#letsgraburinternship{
padding-top: 50px;
padding-bottom: 50px;
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


<!-- End Navbar -->

<div class=   "content" >
<div class="container-fluid">

  <h1>  FOLLOW YOURS DREAM ,THEY KNOW,
    THE WAY !</h1>
  <!-- <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p> -->
  <!-- <button id="myBtn" onclick="myFunction()">Pause</button> -->
  <!-- <button id="myBtn1" >Exlpore Internship</button> -->
</div>



<div class="container-fluid     mt-2"  >
<video autoplay  loop id="myVideo"  controls autoplay>
  <source src="introvideo.mp4" type="video/mp4">
 BE IN GOOOOOD NETWORK
</video>
</div>
</div>
<!-- <div class="content">
  <h1>  FOLLOW YOURS DREAM ,THEY KNOW, THE WAY </h1> -->
  <!-- <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p> -->
  <!-- <button id="myBtn" onclick="myFunction()">Pause</button> -->
  <!-- <button id="myBtn1" >Exlpore Internship</button>
</div> -->

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>


<br><br>

<!-- code after Video -->

 <div class="container  text-center " id="letsgraburinternship"  >
   <h2 >  Let's Grab Your <B>INTERNSHIP !</B></h2>

<!-- 

   <a href="private.php" target="blank" class="btn btn-outline-danger"> Private Sector
        </a>

   <a href="new_government.php" target="blank" class="btn btn-outline-danger"> Government Sector
        </a> -->
          
</div>



<div class="container   text-center ">


<!-- USE MODEL 1 as PRIVATE INTERNSHIP -->
 

  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal">
  Private Sector
  </button>


  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
    
        <div class="modal-header">
          <h4 class="modal-title">  Here We Provided Private Sector Internship's in NAGPUR</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
   
        <div class="modal-body">
        <a href="private.php" target="blank" class="btn btn-outline-danger"> Apply Here!
        </a>
        </div>
        
      
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  





<!-- USE MODEL 2 as GOVERNMENT INTERNSHIP -->
  
  <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#myModal1">
  Government Sector
  </button>

  
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
   
        <div class="modal-header">
          <h4 class="modal-title">  Here We Provided Government Sector Internship's in NAGPUR</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
    
        <div class="modal-body">
        <a href="new_government.php" target="blank" class="btn btn-outline-danger"> Apply Here!
        </a> 
       
        
      
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- ***FOOTER*** -->
 <div class="container  mb-1 mt-4  " id="footerstyle">

    <footer class="page-footer font-small special-color-dark pt-4">

        <div class="footer-copyright text-center py-3">© 2022 Copyright:Inc. All Rights Reserved
            <a href="https://www.instagram.com/aniket_potbhare/?hl=en"> i-INTERN Internship Platform</a>
        </div>


    </footer>
<!-- ***FOOTER*** -->
</html>












