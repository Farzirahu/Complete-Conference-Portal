
<!DOCTYPE html>

<html>

  

<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title> User Dashboard | Bio Sangam 2016</title>
    <style type="text/css">
    table{
        font-size: 18px;
        text-align: center;
    }
    table tr>td{
      padding:5px;
    }
    </style>
<?php

include("include/header.php");
?>
</head>
<body>
<?php
 include("include/connection.php");
               if(isset($_GET['showDetail'])){
                        $user_id = mysql_real_escape_string($_GET['showDetail']);
                         $uid = $user_id;
?>
      
      
     
      
      
    <section id="content">  
      
    
      

      
      <!-- Section -->
      <section class="section full-width-bg gray-bg">
        
            
            <div class="col-lg-12 col-md-12 col-sm-12">
              
            
                <!--<h3 class="animate-onscroll no-margin-top">Login Here</h3>-->
                <center><h1><?php echo $uid; ?> Details</h1><span><button onclick="window.print()">Print Page</button></span>
                
              </center><br>
              <ul class="upcoming-events">
                 <?php
              
                     
                          
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
            $oral = $row['oral_presentation'];
            if ($oral == "") {
              $oral="nil";
            }
            $poster = $row['poster_presentation'];
            if ($poster == "") {
              $poster="nil";
            }
            $young = $row['young_scientist_award'];
            if ($young == "") {
              $young="nil";
            }
            if ($oral == "yes") {
              $oral="Applied";
            }
           
            if ($poster == "yes") {
              $poster="Applied";
            }
            
            if ($young == "yes") {
              $young="Applied";
            }
            $abstract = $row['abstract_submission'];
            $payment = $row['payment_status'];
            
              }
          
                
                
                
                                echo '
                <table border>
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
                <tr><td>19.</td><td><b>Oral Presentation</b></td><td>'.$oral.'</td></tr>
                <tr><td>20.</td><td><b>Poster Presentation</b></td><td>'.$poster.'</td></tr>
                <tr><td>21.</td><td><b>Young Scientist Award</b></td><td>'.$young.'</td></tr>
                <tr><td>22.</td><td><b>Abstract Submission</b></td><td>'.$abstract.'&nbsp&nbsp&nbsp<button><a href="abstract-submission-details?user='.$reg_id.'">view</a></button></td></tr>
                <tr id="paymentstatus"><td>23.</td><td><b>Payment Status</b></td><td>'.$payment.'&nbsp&nbsp&nbsp<button><a href="#"
                ';?>
                onClick="editPayment()"
                 <?php echo'>Change</a></button></td></tr>
                 
                 <tr style="visibility:hidden" id="editbox"><td>23.</td><td><b>Edit Payment Status</b></td><td>
                 <form action="" method="POST" name="editpaymentform">
                    <input type="text" name="editpayment" value="'.$payment.'" required>
                    <input type="submit" name="submit" value="Update">
                 
                
                 </td></tr>


                </table>

                ';
                
              }

                ?>

                
              </ul>
              
              <p><b>Instructions:</b><br>
                1. For changing the payment status click change button in the payment box.<br>
                2. Guidelines for changing payment status:<br>
                >> Write <b>paid</b> for successful payments.<br>
                >> Write <b>not paid</b> or <b>nil</b> for unpaid status.<br>
                >> If the user has paid but the payment is unsuccessful due to any reason/error then you can enter the <b>reason/error</b> for these type of unsuccessful payments.

              </p>
            
       
                
                
                
              <br><br><br>
             </div>
              
            <br class="clearfix">
              <br class="clearfix">
            
          
      </section>
      <!-- /Section -->
    
    </section>


        <!-- /Container --> 
  
    <!-- JavaScript -->
    <script type="text/javascript">
    function editPayment () {
        document.getElementById('paymentstatus').style.display="none";
        document.getElementById('editbox').style.visibility="visible";
       
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
if (isset($_POST['submit'])) {
    $newpayment = mysql_real_escape_string($_POST['editpayment']);
    $querypayment = mysql_query("UPDATE registrations set payment_status='$newpayment' WHERE uid='$reg_id' ");
    if ($querypayment) {
       echo "<script>alert('Payment status updated auccessfully!!!')</script>";
       echo "<script>window.top.location.href = 'userdetail?showDetail=";echo $reg_id;echo"';</script>";
    }
    else{
        echo "<script>alert('An error occurred. Try again !')</script>";
    }
}
?>