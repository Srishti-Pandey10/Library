<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Velvet</title>
<!-- 
Cafe House Template
http://www.templatemo.com/tm-466-cafe-house
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
  <link href="login_style.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://img.icons8.com/fluent/48/ffffff/reading.png" type="image/x-icon" />
  <style>
    .error{
      color: red;
    }
  </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
                <img src="https://img.icons8.com/fluent/48/ffffff/reading.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Book Velvet</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
              <li><a href="index.html" >Home</a></li>
              <li><a href="collection.html" >Collection</a></li>
              <li><a href="register.php" class="active">Join us</a></li>
              <li><a href="contactus.html">Contact us</a></li>
              
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
    <?php
    $nameErr = $passwordErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["username"])) {
        $nameErr = "UserName is required";
      }
      if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
      }
    }
    ?>
    <div class="overlay">
        <!-- LOGN IN FORM by Omar Dsoky -->
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

           <!--   con = Container  for items in the form-->
           <div class="con">
           <!--     Start  header Content  -->
           <header class="head-form">
            <h1 class="tm-site-name2 tm-handwriting-font" style="font-size: 50px;">Login</h1>
              <!--     A welcome message or an explanation of the login form -->
              <p>login here using your username and password</p>
              <p><span class="error">* required field</span></p>
           </header>
           <!--     End  header Content  -->
           <br>
           <div class="field-set">
             
              <!--   user name -->
                 <span class="input-item">
                    <i class="fa fa-user" aria-hidden="true"></i>
                 </span>
                <!--   user name Input-->
                 <input class="form-input" id="txt-input" type="text" name = "username" placeholder="@UserName" >
                 <span class="error">* <?php echo $nameErr;?></span>
             
              <br>
             
                   <!--   Password -->
             
              <span class="input-item">
                <i class="fa fa-key"></i>
               </span>
              <!--   Password Input-->
              <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" >
              
             
        <!--      Show/hide password  -->
             <span>
                <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
                
             </span>
             <br>
             <span class="error">* <?php echo $passwordErr;?></span>
             
              <br>
        <!--        buttons -->
        <!--      button LogIn -->
              <button class="log-in"> Log In </button>
           </div>
          
        <!--   other buttons -->
           <div class="other">
        <!--      Forgot Password button-->
              <button class="btn submits frgt-pass">Forgot Password</button>
        <!--     Sign Up button -->
              <button  class="btn submits sign-up"><a href="register.php" class="signup" target="_blank">Sign Up 
        <!--         Sign Up font icon -->
              <i class="fa fa-user-plus" aria-hidden="true"></i></a>
              </button>
        <!--      End Other the Division -->
           </div>
             
        <!--   End Conrainer  -->
          </div>
          
          <!-- End Form -->
        </form>
        </div>
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="Students.xml">Disclaimer</a></li>
              <li><a href="collection.html">Our Collections</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15">BOOK VELVET features a variety of digital books and resources that are available to download. With a diversity of titles and authors to choose from, there is bound to be something for everyone to enjoy.  It is built to provide support for all academic levels including researchers and life-long learners, all disciplines, all popular forms of access devices and differently-abled learners. It is designed to enable people to learn and prepare from best practices from all over the world and to facilitate researchers to perform inter-linked exploration from multiple sources.</p>
              <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
              <div class="tm-social-icons-container">
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>       
          <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Book Velvet</p>
            
        </div>  
        
      </div>      
      
           
   </footer> <!-- Footer content-->  
   <!-- JS -->
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
   <script src="login.js"></script>
 </body>
 </html>