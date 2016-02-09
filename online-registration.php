<?php
error_reporting(0);
session_start();
session_destroy();
?>
<!DOCTYPE html>

<html>

	

<head>
		
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Title -->
		<title>Online Registration | Bio Sangam 2016</title>
		
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
						<li >
						
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
						
						
						<li class="current-menu-item">
						
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
			
			
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						
						
						
						<div class="row section-row">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
							
								<h3 class="animate-onscroll no-margin-top">Register Here</h3>
								<div class="register">

									 <form name="myform" action="" method="post" class="registration" onsubmit="DoSubmit();">
      <fieldset>
        <legend> <h4>Login Information </h4></legend>
         Email Id <span class="required"> * </span>

         <input type="email" name="email"  id="email" size="50" placeholder="Please enter your Email Id" required/>
           Password <span class="required"> * </span> 
           <input type="password" name="password" id="password" size="30" placeholder="Password must be atleast 8 characters long." required/>
         Confirm Password <span class="required"> * </span>
           <input type="password" name="cpassword" id="cpassword" size="30" placeholder="Confirm Password" required/>
          
      </fieldset>
      <br>
      <fieldset>
        <legend> <h4>Personal Information </h4></legend>
        Name  <span class="required"> * </span> 
            <select name="initials" id="initials" required>
                <option value="Mr.">Mr.</option>
                <option value="Dr.">Dr.</option>
                <option value="Prof.">Prof.</option>
                <option value="Miss">Miss.</option>
                <option value="Mrs.">Mrs.</option>
              </select>
              <input type="text" name="fname"  id="fname" size="20" placeholder="First Name" required/>
              <input type="text" name="mname"  id="mname" size="20" placeholder="Middle Name" />
              <input type="text" name="lname"  id="lname" size="20" placeholder="Last Name" required/>
          Gender <span class="required"> * </span>
            <input type="radio" name="gender" value="Male" checked="checked" required/>
              Male
              <input type="radio" name="gender" value="Female" />
              Female<br>
          Date of Birth (MM/DD/YYYY)
            <input type="date" name="dob" id="datepicker" required/>
          
      </fieldset>
      <br>
      <fieldset>
        <legend> <h4>Academic Information</h4> </legend>
        Designation <span class="required"> * </span>
            <input type="text" name="adesignation" id="adesignation"  size="30"  placeholder="Enter Your Designation" required/>
          Institution / Organisation <span class="required"> * </span>
            <input type="text" name="aorganisation" id="aorganisation"  size="60" placeholder="Enter Your Current Organisation"  required/>
          Highest Qualification <span class="required"> * </span> 
            <select name="aqualification" id="aqualification" required>
            	<option value=""> -- Highest Qualification -- </option>
              
                
                  <option value="B.Sc">B.Sc </option>
                  <option value="B.Tech/B.E">B.Tech/ B.E </option>
                  <option value="M.Sc">M.Sc</option>
                <option value="M.Tech/M.E">M.Tech/ M.E </option>
                <option value="Phd">Phd</option>
                <option value="other">Any Other</option>
              </select>
           Institute  <span class="required"> * </span> 
            <input type="text" name="ainstitute" id="ainstitute"  size="60"   placeholder="Enter Your Highest Qualification Institute" required/>
          
      </fieldset>
      <br>
      <fieldset>
        <legend> <h4>Contact Details </h4></legend>
        Telephone
           <br>
           	<input style=" width:10%;" type="text" name="ctcode" size="2" placeholder="country code" value="+91" id="ctcode">
           	  - 
           	<input style=" width:10%;" type="text" name="ctcitycode" placeholder="city code" size="5" value="532" id="ctcitycode">
           	  - 
           	<input style="width:76%;" type="text" name="ctno"  id="ctno" value=""  size="20" placeholder="Number"  /><br>
           Mobile <span class="required"> * </span> <br>
            <input style=" width:10%;" type="text" name="cmcode" placeholder="" value="+91" id="cmno"  required/>-
            <input style=" width:88%;" type="text" name="cmno" placeholder="Mobile Number" id="cmno"  required/><br>
           FAX
            <input type="text" name="cfax" placeholder="FAX Number" id="cfax" />
           Mailing Address <span class="required"> * </span>
            <textarea name="caddress" rows="3" cols="40" id="caddress" required></textarea>
          City <span class="required"> * </span>
           <input type="text" name="ccity" size="30" placeholder="Enter City" id="ccity" required/>
           State / Province <span class="required"> * </span> 
            <input type="text" name="cstate" size="40" placeholder="Enter State / Province" id="cstate" required/>
          Country  <span class="required"> * </span> 
            <input type="text" name="ccountry" size="40" placeholder="Your Country"  id="ccountry" required/>
          ZIP Code  <span class="required"> * </span>
            <input type="text" name="czip" size="10" placeholder="ZIP Code" id="czip"  required/>
          
      </fieldset>
      <br>
      <fieldset>
        <legend> <h4>Presentation Details</h4> </legend>
         Register As <span class="required"> * </span> 
            <select name="registeras" id="registeras" required>
            <option value=""> -- Register As -- </option>
            <option value="student">Student</option>
            <option value="academia">Academia</option>
             <option value="industry">Industry</option>
            </select>
            
            
            <input type="checkbox" value="yes" name="oral" id="oral" />Oral Presentation<br>
         
            <input type="checkbox" value="yes" name="poster" id="poster" />Poster Presentation <br>
           
            <input type="checkbox" value="yes" name="young" id="young" /> Young Scientist Awards (Details)
          
      </fieldset>
      <br>
								<div style="clear:both;">
								<p>Prove to me that you are not a spambot!<span class="required"> * </span></p>

							<div>
                       <input id="num1" class="sum" type="text" name="num1" value="<?php echo rand(1,4) ?>" readonly="readonly" /> +
                        <input id="num2" class="sum" type="text" name="num2" value="<?php echo rand(5,9) ?>" readonly="readonly" /> =
                        <input id="captcha" class="captcha" type="text" name="captcha" maxlength="2" />
                        </div>
                        <br>
                    	</div>
      
      
      <input id="reg_button" type="submit"  class="btn" name="submit"  value="Register Now"/>
          <input type="reset" name="reset" value="Clear Fields" class="btn" />
        
    </form>

								
						</div>
					</div>




						
						
					
								
								
								
								
								<br class="clearfix">
						
							</div>
						
						</div>
					
						
					
						
						
					
					
					
					
					<div class="col-lg-2 col-md-2 col-sm-2">
					</div>
					
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>



			
			
			
			<?php
			include("include/footer.php");
			?>
			
			<!-- Back To Top -->
			<a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>
			
			
			
		
		</div>
	
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
if(isset($_POST['submit'])){
 
?>

                			

                			<?php

 function captcha_validation($num1, $num2, $total)
    {
        global $error;
        //Captcha check - $num1 + $num = $total
        if( intval($num1) + intval($num2) == intval($total) ) {
            $error = "null";
        }
        else {
            $error = "Captcha value is wrong.<br>";
        }
        return $error;
    }  
     
       $n1= $_POST['num1'];
       $n2= $_POST['num2'];
       $capta= $_POST['captcha'];

       $err = captcha_validation($n1, $n2, $capta);
                        
        if ($err=="null") {
            // great success!        


$registeras = mysql_real_escape_string($_POST['registeras']);
$initials = mysql_real_escape_string($_POST['initials']);
$fname = mysql_real_escape_string($_POST['fname']);
$mname = mysql_real_escape_string($_POST['mname']);
$lname = mysql_real_escape_string($_POST['lname']);
$gender = mysql_real_escape_string($_POST['gender']);
$dob = mysql_real_escape_string($_POST['dob']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$cpassword = mysql_real_escape_string($_POST['cpassword']);
$adesignation = mysql_real_escape_string($_POST['adesignation']);
$aorganisation = mysql_real_escape_string($_POST['aorganisation']);
$aqualification = mysql_real_escape_string($_POST['aqualification']);
$ainstitute = mysql_real_escape_string($_POST['ainstitute']);
//telephone
$ctcode = mysql_real_escape_string($_POST['ctcode']);
$ctcitycode = mysql_real_escape_string($_POST['ctcitycode']);
$ctno = mysql_real_escape_string($_POST['ctno']);
//mobile
$cmcode = mysql_real_escape_string($_POST['cmcode']);
$cmno = mysql_real_escape_string($_POST['cmno']);
$cfax = mysql_real_escape_string($_POST['cfax']);
$caddress = mysql_real_escape_string($_POST['caddress']);
$ccity = mysql_real_escape_string($_POST['ccity']);
$cstate = mysql_real_escape_string($_POST['cstate']);
$ccountry = mysql_real_escape_string($_POST['ccountry']);
$czip = mysql_real_escape_string($_POST['czip']);
$oral = mysql_real_escape_string($_POST['oral']);
$poster = mysql_real_escape_string($_POST['poster']);
$young = mysql_real_escape_string($_POST['young']);
$fulname = $fname." ".$lname;
//concat

$telephone = "$ctcode-$ctcitycode-$ctno";
$mobile = "$cmcode-$cmno";
date_default_timezone_set('Asia/Calcutta');
$reg_date = date('Y/m/d H:i:s');

			$char = "cdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $rand_dir = substr(str_shuffle($char), 0, 15);
            $id = rand(1000, 9999);
            $strn = "BS16";
            $uid = $strn.strtoupper( substr( $fname,0,2 ) ).$id;
            echo $uid;

if ($password == $cpassword) {
	
				$pass_length = strlen($password);
                $query = mysql_query("SELECT * FROM registrations WHERE email ='$email'");
                $count = mysql_num_rows($query);

                if ($count>=1) {
                  echo "<script>alert('email already taken!!!');</script>";
                }
                else{

                	if ($pass_length >= 8) {
                			
							$pwd = $password;
							$pwd = sha1($pwd);
							$query = mysql_query("INSERT INTO registrations (uid,category,initials,firstname,middlename,lastname,gender,dob,email,password,designation,organisation,qualification,institute,telephone,mobile,fax,address,city,state,country,zip,oral_presentation,poster_presentation,young_scientist_award,abstract_submission,payment_status,reg_date)VALUES('$uid','$registeras','$initials','$fname','$mname','$lname','$gender','$dob','$email','$pwd','$adesignation','$aorganisation','$aqualification','$ainstitute','$telephone','$mobile','$cfax','$caddress','$ccity','$cstate','$ccountry','$czip','$oral','$poster','$young','nil','nil','$reg_date')");
									if($query){
										//mail script starts here
										// echo $email;
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
<p><b>'.$fname.' '.$lname.'</b></p>
<p><b>Thank you for registering for BIO SANGAM 2016. <br>
we are pleased to have you at the Conference.</b></p>
<h3>Your registration ID is given below:</h3>
  <h1>'.$uid.'</h1>
  
<p>To get started<br>
you can now login to the portal any time <a href="http://www.biosangam.mnnit.ac.in/login">HERE</a> <br>

you can find your payment options and abstract submission details at your dashboard <a href="http://www.biosangam.mnnit.ac.in/dashboard">HERE</a>. <br>

</p>
  
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
  <p><b>NOTE:</b> If you are seeing this by mistake. Please contact our team immediately
   at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>.</p><hr>
  <p><b>Regards,<br>Team Biosangam 2016</b></p>
  
</div>
</body>
</html>

';
            
  ?>
<?php include("online-registration-mail.php"); 
//mail script ends here...
?>
<?php

										session_start();
										$_SESSION["user_login"] = $uid;
										echo "<script>alert('you have successfully registered !!!')</script>";
										echo "<script>window.top.location.href = 'thanking-you?ref=bio_sangam_16&key=$uid&personType=$registeras&ref_id=$rand_dir&processType=reg_2016&script=allow';</script>";
									}
									else{
										echo "<script>alert('An error occurred please try again !!!')</script>";
										header("location: online-registration");
									}
						}
						else{
							 echo "<script>alert('password should be atleast 8 character long !!!');</script>";
						}
			}
}
else{
	echo "<script>alert('Passwords doesn't match !!!)</script>";
}

}
else {
   // echo $err;
	   echo "<script>alert('CAPTCHA entries are incorrect')</script>";
		header("location:online-registration");
            // CAPTCHA entries are incorrect
        }

}
?>
