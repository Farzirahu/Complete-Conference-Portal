<div class="col-lg-3 col-md-3 col-sm-4 sidebar" >
	<div class="banner-wrapper">
						<center><h2>News and Updates</h2></center>
												 <div class="panel-body" style="border:1px solid grey;">
                             <center><marquee direction="up" onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="1" scrolldelay="1" height="350px;">
  <span style="font-weight:normal;"><br><br>Biosangam 2016 website launched.<a href="" target="_blank"> <font color="blue"></font></a>
 </span>

 <span style="font-weight:normal;"><br><br>Registrations for Biosangam 2016 started.<a href="online-registration" target="_blank"> <font color="blue">(more)</font></a>
 </span>

 
</marquee></center>
              </div>          
                        
						<h1></h1>
										<!-- Upcoming Events -->
										<?php
               include("include/connection.php");
               
               if(isset($_SESSION["user_login"])){
                //nothing
              }
              else{ ?>
						<div class="sidebar-box white animate-onscroll">
							<h3>LOGIN HERE</h3>
							<ul class="upcoming-events">
							
								<div class="register">
								<form action="" id="registerForm" method="POST" name="registrationForm">
									
								
								<div>
									<label for="email">Email:</label> 
									<input class="input" required type="email" name="email" id="email" placeholder="Enter your email address">
								</div>
								<div>
									<label for="pwd">Password:</label> 
									<input class="input" required type="password" name="pwd" id="pwd" placeholder="Type your password">
								</div>
								<div>
							
								</div>
								<div id="btnRegister">
									<input id="sub"  type="submit" name="submit" value="Login"> 
									
								</div>
							</form>
							<a href="forgot-password">Forgot Password?</a>
						</div>
								
								
								
								
								
							</ul>
							
						</div>
						<?php 

if (isset($_POST['submit'])) {
  $email = mysql_real_escape_string($_POST['email']);
  $pwd = mysql_real_escape_string($_POST['pwd']);
  $pwd_hash = sha1($pwd);
  $pwd_hash = substr( $pwd_hash,0,32 );
  $query = mysql_query("SELECT * FROM registrations WHERE email='$email' AND password='$pwd_hash'");
  $char = "cdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $rand_dir = substr(str_shuffle($char), 0, 15);
  while($row=mysql_fetch_assoc($query)){
    $uid = $row['uid'];
    $registeras = $row['category'];
  }
  $count = mysql_num_rows($query);
  
  if ($count == 1) {
    
    session_start();
    $_SESSION["user_login"] = $uid;
    echo "<script>alert('successfully logged in !!!')</script>";
    echo "<script>window.top.location.href = 'dashboard?ref=bio_sangam_16_login&key=$uid&personType=$registeras&login_id=$rand_dir&processType=login_2016&script=allow';</script>";
  }
  else{
echo "<script>alert('username or password is incorrect !!!')</script>";
  }

}




					} ?>

						<div class="sidebar-box white animate-onscroll">
							<h3>Announcements</h3>
							<ul class="upcoming-events">
							
							
							
												 <div class="panel-body" style="border:1px solid grey;">
                             <center><marquee direction="up" onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="1" scrolldelay="1" height="250px;">
  <span style="font-weight:normal;"><br><br>To be announced soon.<a href="" target="_blank"> <font color="blue"></font></a>
 </span>
<span style="font-weight:normal;"><br><br>To be announced soon.<a href="" target="_blank"> <font color="blue"></font></a>
 </span>


 
</marquee></center>
              </div>	
								
							
						
							</ul>
							
						</div>
										<!-- Upcoming Events -->
						<div class="sidebar-box white animate-onscroll">
							<h3>Useful Links</h3>
							<ul class="upcoming-events">
							
							
							<a target="_blank" href="uploads/biosangam-brochure.pdf"><h4><strong>Download Brochure</strong></h4></a>
							<a href="travel-to-allahabad"><h4><strong>Reach Allahabad</strong></h4></a>	
								
							
						
							</ul>
							
						</div>
											
					</div>
					<!-- /Sidebar -->
				
																	
					</div>