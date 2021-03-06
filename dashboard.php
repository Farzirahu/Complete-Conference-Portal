
<!DOCTYPE html>

<html>

  

<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Dashboard | Bio Sangam 2016</title>
    <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=600,width=1000');
        mywindow.document.write('<html><head><title>Dashboard Biosangam 2016</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
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
            <li>
            
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
        
          <div class="col-lg-2 col-md-2 col-sm-2">
      
            
            </div>
            
            <div id="mydiv" class="col-lg-8 col-md-8 col-sm-8">
              
            
                <!--<h3 class="animate-onscroll no-margin-top">Login Here</h3>-->
                <h1>Your Dashboard</h1><input class="print" type="button" value="Print" onclick="PrintElem('#mydiv')" /><br>
                <div class="sidebar-box white animate-onscroll">
              
              <ul class="upcoming-events">
                 <?php
               include("include/connection.php");
               
               if(!isset($_SESSION["user_login"])){
                echo "<script>window.top.location.href = 'error';</script>";
              }
              else{
                          $uid = $_SESSION["user_login"];
                          
                          $query = mysql_query("SELECT * FROM registrations WHERE uid='$uid'");
            while($row = mysql_fetch_assoc($query)){
            $reg_id = $row['uid'];
            $category = $row['category'];
            $initials = $row['initials'];
            $fname = $row['firstname'];
            $mname = $row['middlename'];
            $lname = $row['lastname'];
            
            $gender = $row['gender'];
            $dob = $row['dob'];
            $email = $row['email'];
            $designation = $row['designation'];
            $organisation = $row['organisation'];
            $qualification = $row['qualification'];
            $institute = $row['institute'];
            $telephone = $row['telephone'];
            $mobile = $row['mobile'];
            $fax = $row['fax'];
            $address = $row['address'];
            $city = $row['city'];
            $state = $row['state'];
            $country = $row['country'];
            $zip = $row['zip'];
            $abstract = $row['abstract_submission'];
            $oral = $row['oral_presentation'];
            if ($oral == "") {
              $orald="nil";
            }
            $poster = $row['poster_presentation'];
            if ($poster == "") {
              $posterd="nil";
            }
            $young = $row['young_scientist_award'];
            if ($young == "") {
              $youngd="nil";
            }
           
            if ($oral == "yes") {
              $orald="Applied";
            }
            
            if ($poster == "yes") {
              $posterd="Applied";
            }
            
            if ($young == "yes") {
              $youngd="Applied";
            }
            
            $payment = $row['payment_status'];
            $oral_submission = $row['oral_submission'];
            $poster_submission = $row['poster_submission'];
            $young_submission = $row['young_submission'];
            
            
              }
          $oralcount=0;$postercount=0;$youngcount=0;$oralsubcount=0;$postersubcount=0;$youngsubcount=0;
             if ($oral == "yes") {
              $oralcount=1;
            }
            
            if ($poster == "yes") {
              $postercount=1;
            }
            
            if ($young == "yes") {
              $youngcount=1;
            }
             if ($oral_submission != "nil") {
              $oralsubcount=1;
            }
            
            if ($poster_submission != "nil") {
              $postersubcount=1;
            }
            
            if ($young_submission != "nil") {
              $youngsubcount=1;
            }
            $total_presentation = $oralcount+$postercount+$youngcount;
            $total_submitted = $oralsubcount+$postersubcount+$youngsubcount;
            if ($total_presentation == 0) {
              $abstract ="not applicable";
            }
            if ($total_submitted == 0) {
              $abstract ="all ".$total_presentation." remaining";
            }
            if ($total_presentation > $total_submitted && $total_submitted != 0 ) {
              $abstract = $total_submitted." of ".$total_presentation." submitted";
            }
            if ($total_presentation === $total_submitted && $total_presentation != 0 ) {
              $abstract = "all ".$total_submitted." submitted";
            }
            
            mysql_query("UPDATE registrations set abstract_submission = '$abstract' WHERE uid='$reg_id'");
                
              if ($payment == "nil") {
                 mysql_query("UPDATE registrations set payment_status = 'not paid' WHERE uid='$reg_id'");
                }  
                
                                echo '
                <table>
                <tr><td><strong>S.No.</strong></td><td><strong>Category</strong></td><td><strong>Details</strong></td></tr>
                <tr><td>1.</td><td><b>Registration ID</b></td><td>'.$reg_id.'</td></tr>
                <tr><td>2.</td><td><b>Category</b></td><td>'.$category.'</td></tr>
                <tr><td>3.</td><td><b>Full Name</b></td><td>'.$initials.' '.$fname.' '.$mname.' '.$lname.'</td></tr>
                <tr><td>4.</td><td><b>Gender</b></td><td>'.$gender.'</td></tr>
                <tr><td>5.</td><td><b>Date of Birth</b></td><td>'.$dob.'</td></tr>
                <tr><td>6.</td><td><b>Email</b></td><td>'.$email.'</td></tr>
                <tr><td>7.</td><td><b>Designation</b></td><td>'.$designation.'</td></tr>
                <tr><td>8.</td><td><b>Intitution/Organisation</b></td><td>'.$organisation.'</td></tr>
                <tr><td>9.</td><td><b>Highest Qualification</b></td><td>'.$qualification.'</td></tr>
                <tr><td>10.</td><td><b>Institute</b></td><td>'.$institute.'</td></tr>
                <tr><td>11.</td><td><b>Telephone</b></td><td>'.$telephone.'</td></tr>
                <tr><td>12.</td><td><b>Mobile</b></td><td>'.$mobile.'</td></tr>
                <tr><td>13.</td><td><b>Fax</b></td><td>'.$fax.'</td></tr>
                <tr><td>14.</td><td><b>Address</b></td><td>'.$address.'</td></tr>
                <tr><td>15.</td><td><b>City</b></td><td>'.$city.'</td></tr>
                <tr><td>16.</td><td><b>State</b></td><td>'.$state.'</td></tr>
                <tr><td>17.</td><td><b>Country</b></td><td>'.$country.'</td></tr>
                <tr><td>18.</td><td><b>ZIP</b></td><td>'.$zip.'</td></tr>
                <tr><td>19.</td><td><b>Oral Presentation</b></td><td>'.$orald.'</td></tr>
                <tr><td>20.</td><td><b>Poster Presentation</b></td><td>'.$posterd.'</td></tr>
                <tr><td>21.</td><td><b>Young Scientist Award</b></td><td>'.$youngd.'</td></tr>
                <tr><td>22.</td><td><b>Abstract Submission</b></td><td>'.$abstract.'&nbsp&nbsp&nbsp<a style="border:1px solid blue;padding:5px;" href="abstract-submission/abstract-dashboard">View/Submit</a></td></tr>
                <tr><td>23.</td><td><b>Payment Status</b></td><td>';
                if ($payment == "nil" || $payment == "not paid") {
                  echo'Not Paid&nbsp&nbsp&nbsp
                <a style="border:1px solid blue;padding:5px;" href="enter-payment-details" '; ?><?php echo' >Enter details</a>

                <a style="border:1px solid blue;padding:5px;" target="_blank" href="registration-procedure" >View Procedure</a>
                ';
                }
                else if ($payment == "paid") {
                  echo'Paid&nbsp&nbsp&nbsp
                <a style="border:1px solid blue;padding:5px;" href="print-registration-forms" >Print Forms</a>
                ';
                }
                else{
                  echo $payment;
                  echo '&nbsp&nbsp&nbsp<a style="border:1px solid blue;padding:5px;" href="" '; ?>  onClick="alert('coming soon!')" <?php echo' >Enter details again</a>';
                }
                echo'
                </td></tr>
                </table>

                ';
              }

                ?>

                
              </ul><br>
              <b>Note:</b><br>
              <p>1. Payment Started.<br>
                2. Abstract submission started.<br>
                3. It may take upto 24-48 hrs for the payment staus to reflect the changes. In case it does not change in time do write to us at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>.<br>
                4. In case any of the above information is wrong kindly write to us at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>.</p>
              
            </div>
       
                
                
                
              
             </div>
              <div class="col-lg-2 col-md-2 col-sm-2">
      
            
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
