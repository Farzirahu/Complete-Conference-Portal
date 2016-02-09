<?php
session_start();
error_reporting(0);
if (isset($_SESSION["user_login"])) {
  echo "<script>window.top.location.href = 'error';</script>";
}
else{
   
}
?>
<!DOCTYPE html>

<html>

  

<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Forgot Password | Bio Sangam 2016</title>
    
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
              <h3>Enter your email address here:</h3>
              <ul class="upcoming-events">
              
                <div class="register">
                <form action="" id="registerForm" method="POST" name="myform" onsubmit="DoSubmit();">
                  
                
                <div>
                 
                  <input class="input" required type="email" name="email" id="email" placeholder="Enter your email address">
                </div>
                
                <div>
              
                </div>
                <div id="btnRegister">
                  <input id="sub"  type="submit" name="submit" value="Proceed"> 
                  
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
    <script type="text/javascript">
    function DoSubmit(){
  document.myform.submit.value = 'Processing...';
  return true;
}
    </script>
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
if (isset($_POST['submit'])) {
  $email = mysql_real_escape_string($_POST['email']);
  
  $query = mysql_query("SELECT * FROM registrations WHERE email='$email'");
  $char = "cdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $rand_dir = substr(str_shuffle($char), 0, 5);
   $rand_dirr = substr(str_shuffle($char), 0, 15);
  while($row=mysql_fetch_assoc($query)){
    $fisname = $row['firstname'];
    $lasname = $row['lastname'];
    $uid = $row['uid'];
    $registeras = $row['category'];
    $fulname = $fisname." ".$lasname;
  }
  $count = mysql_num_rows($query);
  
  if ($count == 1) {

            //$body='Hi, <br/> <br/>Your one time password (OTP) ID is <h1>'.$rand_dir.'</h1> <br><br>Enter this one time password (OTP) to continue with your password recovery procedure.   <br/> <br/>--<br>If you are seeing this by mistake. Please ingnore this email.<br> Regards, Security Team Biosangam 2016';
            $messageHTML = '

            <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>biosangam</title>
</head>
<body>

<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 16px;">
<p>Hi,</p>
<h3>Your One Time Password is given below</h3>
  <h1>'.$rand_dir.'</h1>
  <p><b>Enter this one time password (OTP) to continue with your password recovery procedure.</b></p>
<p><h4>You can also enter it <a href="http://biosangam.mnnit.ac.in/enter-your-otp-here?ref=mail_forgot_password_recovery&personType='.$registeras.'&process_id='.$rand_dirr.'&processType=forgot_password_2016&key='.$email.'&script=allow">HERE</a></h4>
<br>
  
  <div align="center">
    <a href="http://biosangam.mnnit.ac.in/">
      <img src="mailer/images/logo.jpg" height="150" width="340" alt="Biosangam 2016"></a>
  <br>
  
  <h3>Follow us on:</h3>
    <a href="https://www.facebook.com/Biosangam">
      <img src="mailer/images/1432827150_facebook.png"  alt="Biosangam Facebook"></a>
      <a href="https://twitter.com/">
      <img src="mailer/images/1432827318_twitter_letter.png"  alt="Biosangam Twitter"></a>
      <a href="https://plus.google.com/">
      <img src="mailer/images/1432827125_google.png"  alt="Biosangam Google"></a>
      <a href="https://www.youtube.com/">
      <img src="mailer/images/1432827362_youtube.png"  alt="Biosangam Youtube"></a>
  </div>
  <p><b>NOTE:</b> If you are seeing this by mistake. Please ignore this mail.</p><hr>
  <p><b>Regards,<br> Security Team Biosangam 2016</b></p>
  
</div>
</body>
</html>

';

            ?>
            
         <?php include("forgot-password-mail.php"); ?>
            <?php
    mysql_query("UPDATE registrations SET otp='$rand_dir' WHERE email='$email'");
    echo "<script>window.top.location.href = 'enter-your-otp-here?ref=forgot_password_recovery&personType=$registeras&process_id=$rand_dirr&processType=forgot_password_2016&key=$email&script=allow';</script>";
  }
  else{
echo "<script>alert('incorrect email address !!!')</script>";
  }

}

?>
