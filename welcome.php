<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/58a644721f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="Stylee.css">

    <title>Home Page</title>

    <style>

body
{ 
    background: rgb(203 173 154 / 62%);
    
}
/
    </style>

</head>
<body>

<!-- nav bar start here -->

 <nav class="  navbar sticky-top navbar navbar-expand-sm bg-dark navbar-dark  cursor: pointer">

<a class="navbar-brand" href="#">i-INTERN</a>
<ul class="navbar-nav">
    <li class="nav-item"   >
        <a class="nav-link" href="#">Home</a>
    </li> 
    <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="Internship.php" id="navbardrop" data-toggle="dropdown">
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
    <a href="logout.php"   style="font-size: 20px;  padding-left:20px;">   Logout</i></a>

    <!-- <a href="logout.php"   target="blank" class="btn btn-outline-danger"  style="font-size: 20px;  padding-left:20px;">   Logout</i></a> -->
    </form>
  </div>
</nav>


<!-- End Navbar -->



<!-- ****HOMEPAGE*** -->
    <div class="bg-image " ></div>

    <div class="bg-text">
        <h1 style="font-size: 60px;">i-INTERN</h1>
        <p style="font-size:30px"> Providing various internship at One Platform</p>
        <!-- <button type="button"   a href="Internship.php" class="btn btn-outline-secondary">  GET STARTED</button> -->
        <a href="Internship.php" target="blank" class="btn btn-dark">GET STARTED !
        </a>
       
    </div>
    </div>
 <hr>
    
<!-- ****HOMEPAGE*** -->



  <!-- START ABOUT PAGE  -->

  <div class="container  mt-4" >
   <h1  style="padding-top: 80px;      font-family: 'Playfair Display';   " 
> WELCOME TO i-INTERN INTERNSHIP PLATFORM </h1><span class="text-muted"   >.Providing Various Internship At One Platform!</span>
 </div>
<br><br>
</div>

  <div class="container-fluid">
    <!-- 1st para -->
  <hr class="featurette-divider mt-4 mb-4 pt-4 pb-4  " >

<div class="row featurette px-4">
  <div class="col-md-7  ">
    <h2 class="featurette-heading">i-INTERN INTERNSHIP <span class="text-muted">PLATFORM</span> </h2>
    <P>College students strive on internships to get a real-life experience of the dreaded ‘office space’. But one can be burdened by the work. The biggest concern for college students is the best internship websites.

As more and more colleges push out skilled students, the internship is diluted. Companies start with selection processes or intake through known connections. This abundance of interns has also annoyed certain companies. Some of them have even stopped their intern programs.

After comparing different internship from different companies Students can apply for internship. However, countless experts saw this as a market issue that needed a solution. And they did just that. Most of them surf the internet to create the best internship websites in NAGPUR.</P>
<br>
<br>
As more and more colleges push out skilled students, the internship is diluted. Companies start with selection processes or intake through known connections. This abundance of interns has also annoyed certain companies. Some of them have even stopped their intern programs.
<br>
<br>
After comparing different internship from different companies 
Students  can apply for internship.
However, countless experts saw this as a market issue that needed a solution. And they did just that. Most of them surf the internet to create the best internship websites in NAGPUR. </P>

  </div>
  <div class="col-md-5 mb-4">

    <img  class="featurette-image img-fluid mx-auto " src="pic3.jpeg" alt="image">
  </div>
</div>
  

<!-- 2nd para -->
<hr class="featurette-divider mt-4 mb-4 pt-4 pb-4 ">

<div class="row featurette px-4">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">WHAT IS AN INTERNSHIPS <span class="text-muted">& HOW CAN YOU GET ONE?</span></h2>
    <p class="lead">TIt is as much of a learning experience as it is work. Ideally, interns spend their time working on relevant projects, learning about the field, making industry connections, and developing both hard and soft skills. Internships sometimes even lead to full-time job offers   <BR>As an intern, you get a chance to work side by side with accomplished industry professionals and get a pretty good idea of what an entry-level role might entail. You’ll not only gain real work experience, but also meet and learn from the pros. And you’ll start to build your own network, from your fellow interns to seasoned leaders.</BR> 
    <br>
    In short, internships can help you figure out what you want to do with your career and then make it easier to land your first full-time job in that industry.
</p>
  </div>
  <div class="col-md-5 order-md-1 mb-4">
  <img  class="featurette-image img-fluid mx-auto " src="pic2.jpg" alt="image">

  </div>
</div>


<!-- 
3rd para -->
<hr class="featurette-divider mt-4 mb-4 pt-4 pb-4 ">

<div class="row featurette px-4">
  <div class="col-md-7">
  <h2 class="featurette-heading">WHY ARE INTERNSHIP  <span class="text-muted">IMPORTANT?</span></h2>
    <p class="lead">This type of question scares college students who prep up for internships. Well, for those, I have a reason. The reason to do internships is to experience. To experience not just the workings of the office. But also to experience work-life balancing etc.   <br> <br> It is a trainer for your adult life. I urge every college student to try and do as many internships. Internships are also a great way for students who are unsure about their future to try different industries. <br>
    As an intern, you get a chance to work side by side with accomplished industry professionals and get a pretty good idea of what an entry-level role might entail. You’ll not only gain real work experience, but also meet and learn from the pros. And you’ll start to build your own network, from your fellow interns to seasoned leaders </P>
</p>
  </div>
  <div class="col-md-5 mb-4">
  <img  class="featurette-image img-fluid mx-auto " src="pic1.jpg" alt="image">
  </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->
</div>






    <!-- - ............................................................................ --> -->


    <div class="container  pt-4 pb-4 mb-4  mt-4">
        <H2 style="text-align: center;   padding: 2px; margin-top: 2px;"> <b> OUR TEAM</b> </H2>
        <br>
        <div class="row">
            <div class="col-lg-3   mt-3 text-center ">
                <img class="rounded-circle" src="komalt.jpeg" alt=" image" width="140" height="140">
                <h2>Komal Tibole</h2>
                  <p>  <b>Email:</b> komaltibole@gmail.com</p>
                </p>
                <p><a class="btn btn-secondary" href="https://www.instagram.com/komaltibole/" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-lg-3   mt-3  text-center">
                <img class="rounded-circle" src="ashu1.jpg" alt="image" width="140" height="140">
                <h2>Aniket Potbhare</h2>
                <p><b>Email:</b> aniketpotbhare@gmail.com</p>
                <p><a class="btn btn-secondary" href="https://www.instagram.com/aniket_potbhare/?hl=en" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-lg-3   mt-3 text-center">
                <img class="rounded-circle" src="anshullllllllll.jpeg" alt="image" width="140" height="140">
                <h2>Anshul Thakre</h2>
                <p><b>Email:</b> anshulthakre@gmail.com</p>
                <p><a class="btn btn-secondary" href="https://www.instagram.com/anshulthakre_1901/" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-3   mt-3 text-center">
                <img class="rounded-circle" src="shrutika.jpeg" alt="image" width="140" height="140">
                <h2>Shrutika Shelke</h2>
                <p><b>Email:</b> shrutikashelke@gmail.com</p>
                <p><a class="btn btn-secondary" href="https://www.instagram.com/aniket_potbhare/?hl=en" role="button">View details &raquo;</a></p>
            </div>

        </div> 




        
<br><br>


 <hr>
 

    <!-- form -->
    <div class="container-fluid mt-4 mb-4 pt-4 pb-4  "   id="formstyle">


        <form>
            <H2 style="text-align: center;"  >GET IN TOUCH 📨 </H2>
            <div class="form-group mt-4">
                <label for="exampleInputName">Name:</label>
                <input type="Name" class="form-control" id="exampleInputName" placeholder=" Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputTextArea">Any Query Regarding Finding an INTERNSHIP..?</label>
                <input type="TextArea" class="form-control" id="exampleInputTextArea" placeholder=" Enter any msg here">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            
            <button type="button" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>


<hr>





 <!-- footer -->
    <div class="container  mb-1 " id="footerstyle">
    
        <footer class="page-footer font-small special-color-dark pt-4">
    
            <div class="footer-copyright text-center py-3">© 2022 Copyright:Inc. All Rights Reserved
                <a href="https://www.instagram.com/aniket_potbhare/?hl=en"> i-INTERN Internship Platform</a>
            </div>
    
    
        </footer>
<!-- footer -->


</body>
</html>











