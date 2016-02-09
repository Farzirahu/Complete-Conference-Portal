

<!DOCTYPE html>

<html>

  

<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Payment Details | Bio Sangam 2016</title>
    
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

      <?php
      if(!isset($_SESSION["user_login"])){
                echo "<script>window.top.location.href = 'login';</script>";
              }
      ?>
      <!-- Page Heading -->
      

      
      <!-- Section -->
      <section class="section full-width-bg gray-bg">
        
        <div class="row">
        
          <div class="col-lg-9 col-md-9 col-sm-8">
            
            
            <div class="row">
            
              <div class="col-lg-12 col-md-12 col-sm-12">
            
                <h3 class="animate-onscroll no-margin-top">Submit Your Payment Details Here</h3>
                <h1>Choose Your Payment Method</h1>
                <a  name="online" onClick="func('online')" ><button>Online Transaction</button></a>
                <a  name ="draft" onClick="func('draft')" ><button>Demand Draft</button></a>
                <script type="text/javascript">

                function func(inp)
                {
                  var arr = inp;
                  if(inp=="online")
                    {
                      document.getElementById('online').style.display="block";
                      document.getElementById('draft').style.display="none";
                    }
                    else
                    {
                      document.getElementById('online').style.display="none";
                      document.getElementById('draft').style.display="block";
                    }
                }

                </script>
<div id="online" style="display:none;">
  <br><br>
<h3 class="animate-onscroll no-margin-top">Online Transaction Details</h3>
<form name="" action="" method="post" class="" >
 <table class="" cellspacing="0">
         <tr>
          <tr>
            <td > <strong>Account Holder's Name: </strong></td>
            <td><input type="text" name="accname" id="accname" placeholder="Acount holder's name" required></td>
          </tr>
            <td > <strong>Bank Name: </strong></td>
            <td><select name="bankname" id="bankname" required>  
<?php include("include/banknames.php"); ?>
</select></td>
          </tr>
          <tr>
            <td > <strong>Transaction ID/REFERENCE No.: </strong></td>
            <td><input type="text" name="transactionno" id="transactionno" placeholder="Transaction ID/REFERENCE No." required></td>
          </tr>
          <tr>
            <td > <strong>Transaction Date(MM/DD/YYYY):</strong></td>
             <td><input type="date" name="tdate" id="tdate" placeholder="Transaction Date" required></td>
          </tr>
          <tr>
            <td > <strong>Currency: </strong></td>
            <td><select name="currency" id="currency" required>
                <option value="Rupees">Rupees</option>
                <option value="US Dollars">US Dollars</option>
               
              </select></td>
          </tr>
          <tr>
            <td > <strong>Transaction Amount: </strong></td>
            <td><input type="text" name="tamt" id="tamt" placeholder="Transaction Amount" required></td>
          </tr>

</table>
<input id="onlinepay_button" type="submit"  class="" name="onlinepaymentsubmit"  value="Submit Details"/>
          <input type="reset" name="reset" value="Clear Fields" class="btn" />
        
    </form>
    <br>
    <h4 style="font-color:red;">IT IS ADVISED TO SEND THE SCREENSHOT OF THE TRANSACTION PAGE ALONG WITH YOUR 
      DETAILS(including name, biosangam reg. id, bank name, transaction amount, transaction id etc) at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>
    for quick processing of your payment.</h4>
    <b>Note:</b>
    <p>
    1. In case your bank or currency is not present in the above list please inform us as soon as possible at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>.<br>
    2.It may take upto 24-48 hrs for the payment staus to reflect the changes. In case it does not change in time do write to us at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>.<br>
    3.If you are facing any problem with the portal you can directly write to us at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a></p>

</div>

<div id="draft" style="display:none;">
  <br><br>
               <h3 class="animate-onscroll no-margin-top">Demand Draft Details</h3>
                <form name="" action="" method="post" class="" >
    <table class="" cellspacing="0">
         
          <tr>
            <td > <strong>Draft Number: </strong></td>
            <td><input type="text" name="dnumber" id="dnumber" placeholder="Draft Number" required></td>
          </tr>
          <tr>
            <td > <strong>Draft Date(MM/DD/YYYY):</strong></td>
            <td>

<input type="date" name="ddate" id="datepicker" required/>
</td>
          </tr>
          <tr>
            <td > <strong>Drawee Branch: </strong></td>
            <td><input type="text" name="dbranch" id="dbranch" placeholder="Drawee Branch Name" required></td>
          </tr>
          <tr>
            <td > <strong>Drawee Bank:</strong></td>
            <td><select name="dbank" id="dbank" required>  
<?php include("include/banknames.php"); ?>
</select></td>
          </tr>
          <tr>
            <td > <strong>Currency: </strong></td>
            <td><select name="currency" id="currency" required>
                <option value="Rupees">Rupees</option>
                <option value="US Dollars">US Dollars</option>
               
              </select></td>
          </tr>
          <tr>
            <td > <strong>Draft Amount: </strong></td>
            <td><input type="text" name="damt" id="damt" placeholder="Draft Amount" required></td>
          </tr>
         
        </table>
       <input id="draftpay_button" type="submit"  class="" name="draftpaymentsubmit"  value="Submit Details"/>
          <input type="reset" name="reset" value="Clear Fields" class="btn" />
        
    </form>
 <br>
    <h4 style="font-color:red;">IT IS ADVISED TO SEND THE SCANNED IMAGE OF THE DEMAND DRAFT ALONG WITH YOUR 
      DETAILS(including name, biosangam reg. id, bank name, draft amount, draft number etc) at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>
    for quick processing of your payment.</h4>

    <div>
  <p>After submitting your Demant Draft details.</p>
<p><ul>

 <li>Take a print out of the Dashboard information from <a href="dashboard" style="color:#03F; text-decoration:underline" target="_blank"> Dashboard </a> by clicking the PRINT tab in dashboard page.</li>
  <li>Enclose the DEMAND DRAFT and the Dashboard print out and send it to the below address before the deadline. </li>
  </ul>
  
    <h5><strong>The Conference Secretariat BioSangam -2016
</strong></h5>
    Deprtment of Biotechnology
    <br>
Motilal Nehru National Institute of Technology Allahabad
<br>
 Allahabad-211004, Uttar Pradesh, India<br>
</p>
</div>
<br>
    <b>Note:</b>
    <p>
    1. In case your bank or currency is not present in the above list please inform us as soon as possible at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>.<br>
    2.It may take upto 24-48 hrs for the payment staus to reflect the changes. In case it does not change in time do write to us at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>.<br>
    3.If you are facing any problem with the portal you can directly write to us at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a></p>
               </div> 
                
                
              <br class="clearfix">
              <br class="clearfix">
              </div>
              
            </div>
            
          
            
          
            
            
          </div>
          
          
          
          <!-- Sidebar -->
          <?php
          include("include/sidebar.php");
          ?>
          
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
if(isset($_POST['onlinepaymentsubmit']))
{
$accname = mysql_real_escape_string($_POST['accname']);
$bankname = mysql_real_escape_string($_POST['bankname']);
$transactionno = mysql_real_escape_string($_POST['transactionno']);
$tdate = mysql_real_escape_string($_POST['tdate']);
$currency = mysql_real_escape_string($_POST['currency']);
$tamt = mysql_real_escape_string($_POST['tamt']);

$payquery = mysql_query("INSERT INTO online_payments (regid,accholdername,bank_name,transc_id,transc_date,currency,transc_amt)VALUES('$uid','$accname','$bankname','$transactionno','$tdate','$currency','$tamt')")or die(mysql_error());

if($payquery)
{
 echo "<script>alert('Details Captured Successfully !!!')</script>";
  //header("location:dashboard");
  echo"<script>window.location='dashboard'</script>";
}
else
{
  echo "<script>alert('Failed to submit the details. Please try again !!!')</script>";
  //header("location:enter-payment-details");
  echo"<script>window.location='enter-payment-details'</script>";
}
}

if(isset($_POST['draftpaymentsubmit']))
{
$dnumber = mysql_real_escape_string($_POST['dnumber']);
$ddate = mysql_real_escape_string($_POST['ddate']);
$dbranch = mysql_real_escape_string($_POST['dbranch']);
$dbank = mysql_real_escape_string($_POST['dbank']);
$currency = mysql_real_escape_string($_POST['currency']);
$damt = mysql_real_escape_string($_POST['damt']);

$payquery = mysql_query("INSERT INTO draft_payments (regid,draft_num,draft_date,drawee_branch,drawee_bank,currency,draft_amt)VALUES('$uid','$dnumber','$ddate','$dbranch','$dbank','$currency','$damt')")or die(mysql_error());
if($payquery)
{
  echo "<script>alert('Details Captured Successfully !!!')</script>";
  //header("location:dashboard");
  echo"<script>window.location='dashboard'</script>";
}
else
{
  echo "<script>alert('Failed to submit the details. Please try again !!!')</script>";
  //header("location:enter-payment-details");
  echo"<script>window.location='enter-payment-details'</script>";
}

}


?>
