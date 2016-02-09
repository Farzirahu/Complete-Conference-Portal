<?php
session_start();
error_reporting(0);
if (isset($_SESSION["user_login"])) {
  echo "<script>window.top.location.href = 'error';</script>";
}
else{
include("include/connection.php");
  $rand_id = mysql_real_escape_string($_GET['rand_id']);
  $email = mysql_real_escape_string($_GET['key']);
  $checkquery = mysql_query("SELECT * FROM registrations WHERE email='$email'");
  while($row=mysql_fetch_assoc($checkquery)){
    
    $otp_database = $row['otp'];
  }
  if ($rand_id == $otp_database) {
    //nothing
  }
  else{
     echo "<script>window.top.location.href = 'error';</script>";
  }

   
}
?>
<!DOCTYPE html>

<html>

  

<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Change Password | Bio Sangam 2016</title>
    
<?php

include("include/header.php");
?>
      
      
      <!-- Header -->
      <header id="header" class="animate-onscroll">
        
              <?php
include("include/mainheader.php");
?>
        
        
        <!-- Lower Header -->
        <div id="lower-header" >
          
          <div class="container">
          
          <div id="menu-button">
            <div>
            <span></span>
            <span></span>
            <span></span>
            </div>
            <span>Menu</span>
          </div>
          
          <ul id="navigation">
            
            <!-- Home -->
            <li class="home-button ">
            
              <a href="home"><i class="icons icon-home"></i></a>
              
            
              
            </li>
            <!-- /Home -->
            
            
            
            
            
            
            <!-- Get Involved -->
            <li >
            
              <span>About us</span>
              
              <ul>
                <li><a href="institute">Institute</a></li>
                <li><a href="department-of-biotechnology">Department</a></li>
                <li><a href="the-sangam-city">The Sangam City</a></li>
                
              </ul>
              
            </li>
            <li >
            
              <span>Committee</span>
              
              <ul>
                <li><a href="advisory-committee">Advisory Committee</a></li>
                <li><a href="organising-committee">Organising Committee</a></li>
                
                
              </ul>
              
            </li>
            <li s>
            
              <span>Programme</span>
              
              <ul>
                <li><a href="themes">Themes</a></li>
                <li><a href="important-dates">Important Dates</a></li>
                <li><a href="schedule">Schedule</a></li>
                <li><a href="venue">Venue</a></li>
                
              </ul>
              
            </li>
            <li >
            
              <span>Awards</span>
              
              <ul>
                <li><a href="awards#young-scientist-award">Young Scientist Award</a></li>
                <li><a href="awards#best-oral-presentation">Best Oral Presentation</a></li>
                <li><a href="awards#poster-presentation">Poster Presentation</a></li>
                
                
              </ul>
              
            </li>
            
            <li >
            
              <span>Accomodation & Travel</span>
              
              <ul>
                <li><a href="accomodation-in-allahabad">Accomodation</a></li>
                <li><a href="travel-to-allahabad">Travel</a></li>
                <li><a href="places-in-allahabad">Places to visit</a></li>
                
                
              </ul>
              
            </li>
            
            
            <li >
            
              <span >Registration</span>
              
              <ul>
                <li><a href="registration-procedure">Registration Procedure</a></li>
                <li><a href="online-registration">Online Registration</a></li>
                <li><a href="fees-structure">Fees Structure</a></li>
                <li><a href="login">Login Here</a></li>
                
                
              </ul>
              
            </li>
            <li>
              <a href="contact-us">Contact us</a>
            </li>
            
          </ul>
          
          </div>
          
        </div>
        <!-- /Lower Header -->
        
        
      </header>
      <!-- /Header -->
      
      
    <section id="content">  
      
      <!-- Page Heading -->
      <?php
      include("include/logged-in-status-bar.php");
      ?>
      <!-- Page Heading -->
      

      
      <!-- Section -->
      <section class="section full-width-bg gray-bg">
        <div class="row">
        
          <div class="col-lg-4 col-md-4 col-sm-4">
      
            
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4">
              
            
                <!--<h3 class="animate-onscroll no-margin-top">Login Here</h3>-->
                
                <div class="sidebar-box white animate-onscroll">
                 
              <h3>Change your password here:</h3>
              
              <ul class="upcoming-events">
              
                <div class="register">
                <form action="" id="registerForm" method="POST" name="registrationForm">
                  
                
                <div>
                 
                  <input class="input" required type="password" name="new_pass" id="new_pass" placeholder="Enter new password atleast 8 character long"><br><br>
                  <input class="input" required type="password" name="new_pass1" id="new_pass1" placeholder="Confirm new password">
                 
                </div>
                
                <div>
              
                </div>
                <div id="btnRegister">
                  <input   type="submit" name="submit" value="Proceed"> 
                  
                </div>
              </form>
              
            </div>
                
                
                
                
                
              </ul>
              
            </div>
       
                
                
                
              
             </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
      
            
            </div>
          </div>
            <br class="clearfix">
              <br class="clearfix">
            
          
            
          
            
            
         
          
          
          
          
          
        
        
      </section>
      <!-- /Section -->
    
    </section>



      
      
      
      <?php
      include("include/footer.php");
      ?>
      
      <!-- Back To Top -->
      <a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>
      
      
      
    
    </div>
    <!-- /Container --> 
  
    <!-- JavaScript -->
    
    <!-- Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <!-- Modernizr -->
    <script type="text/javascript" src="js/modernizr.js"></script>
    
    <!-- Sliders/Carousels -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    
    <!-- Revolution Slider  -->
    <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- Calendar -->
    <script type="text/javascript" src="js/responsive-calendar.min.js"></script>
    
    <!-- Raty -->
    <script type="text/javascript" src="js/jquery.raty.min.js"></script>
    
    <!-- Chosen -->
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
    
    <!-- jFlickrFeed -->
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
    
    <!-- InstaFeed -->
    <script type="text/javascript" src="js/instafeed.min.js"></script>
    
    <!-- Twitter -->
    <script type="text/javascript" src="php/twitter/jquery.tweet.js"></script>
    
    <!-- MixItUp -->
    <script type="text/javascript" src="js/jquery.mixitup.js"></script>
    
    <!-- JackBox -->
    <script type="text/javascript" src="jackbox/js/jackbox-packed.min.js"></script>
    
    <!-- CloudZoom -->
    <script type="text/javascript" src="js/zoomsl-3.0.min.js"></script>
    
    <!-- ColorPicker -->
    <script type="text/javascript" src="js/colorpicker.js"></script>
    
    <!-- Main Script -->
    <script type="text/javascript" src="js/script.js"></script>
    
    
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/jquery.placeholder.js"></script>
      <script type="text/javascript" src="js/script_ie.js"></script>
    <![endif]-->
    
    
  </body>


</html>
<?php

include("include/connection.php");
  
  $email = mysql_real_escape_string($_GET['key']);
if (isset($_POST['submit'])) {
  $new_pass = mysql_real_escape_string($_POST['new_pass']);
  $new_pass1 = mysql_real_escape_string($_POST['new_pass1']);
 
  if ($new_pass1 == $new_pass) {
     $new_pass = sha1($new_pass);
    $pass_lenngth = strlen($new_pass);
    
    if ($pass_lenngth >= 8) {
     $nequery = mysql_query("UPDATE registrations SET password = '$new_pass' WHERE email = '$email'");
     if ($nequery) {
       echo "<script>alert('password changed successfully !!!')</script>";
        echo "<script>window.top.location.href = 'login';</script>";
     }else{
      echo "<script>alert('An error occurred again. Please try again !!!')</script>";
     }
    }
    else{
      echo "<script>alert('passwords should be atleast 8 character long !!!')</script>";
    }
  }
   else{
    echo "<script>alert('passwords doesn't match !!!')</script>";

  }
  }

?>
