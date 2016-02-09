<?php
//header("location: abstract-submission/index");
//session_start();
?>
<!DOCTYPE html>

<html>

  

<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Abstract Submission Dashboard | Bio Sangam 2016</title>
    <style type="text/css">
    
    #uploadnew ,#review,#uploadnew1 ,#review1,#uploadnew2 ,#review2{
      margin: 0 10px;
      padding:5px 10px;
      border: 1px solid blue;
      cursor:pointer;

    }
    #uploadnew:hover{
      background-color:green;
      color:#ffffff;
      border: none;
    }
    #review:hover{
      background-color:red;
      color:#ffffff;
      border: none;
    }
    #uploadnew1:hover{
      background-color:green;
      color:#ffffff;
      border: none;
    }
    #review1:hover{
      background-color:red;
      color:#ffffff;
      border: none;
    }
    #uploadnew2:hover{
      background-color:green;
      color:#ffffff;
      border: none;
    }
    #review2:hover{
      background-color:red;
      color:#ffffff;
      border: none;
    }
    </style>
<?php

include("include/header.php");
?>
      
      
      <!-- Header -->
      <header id="header" class="animate-onscroll">

        
        
        
        
        <!-- Lower Header -->
        <div id="lower-header">
          
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
            
              <a href="../home"><i class="icons icon-home"></i></a>
              
            
              
            </li>
            <!-- /Home -->
            
            
            
            
            
            
            <!-- Get Involved -->
            <li >
            
              <span>About us</span>
              
              <ul>
                <li><a href="../institute">Institute</a></li>
                <li><a href="../department-of-biotechnology">Department</a></li>
                <li><a href="../the-sangam-city">The Sangam City</a></li>
                
              </ul>
              
            </li>
            <li >
            
              <span>Committee</span>
              
              <ul>
                <li><a href="../advisory-committee">Advisory Committee</a></li>
                <li><a href="../organising-committee">Organising Committee</a></li>
                
                
              </ul>
              
            </li>
            <li>
            
              <span>Programme</span>
              
              <ul>
                <li><a href="../themes">Themes</a></li>
                <li><a href="../important-dates">Important Dates</a></li>
                <li><a href="../schedule">Schedule</a></li>
                <li><a href="../venue">Venue</a></li>
                
              </ul>
              
            </li>
            <li >
            
              <span>Awards</span>
              
              <ul>
                <li><a href="../awards#young-scientist-award">Young Scientist Award</a></li>
                <li><a href="../awards#best-oral-presentation">Best Oral Presentation</a></li>
                <li><a href="../awards#poster-presentation">Poster Presentation</a></li>
                
                
              </ul>
              
            </li>
            
            <li >
            
              <span>Accomodation & Travel</span>
              
              <ul>
                <li><a href="../accomodation-in-allahabad">Accomodation</a></li>
                <li><a href="../travel-to-allahabad">Travel</a></li>
                <li><a href="../places-in-allahabad">Places to visit</a></li>
                
                
              </ul>
              
            </li>
            
            
            <li >
            
              <span >Registration</span>
              
              <ul>
                <li><a href="../registration-procedure">Registration Procedure</a></li>
                <li><a href="../online-registration">Online Registration</a></li>
                <li><a href="../fees-structure">Fees Structure</a></li>
                <li><a href="../login">Login Here</a></li>
                
                
              </ul>
              
            </li>
            <li>
              <a href="../contact-us">Contact us</a>
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
            
            <div class="col-lg-8 col-md-8 col-sm-8">
              
            
                <!--<h3 class="animate-onscroll no-margin-top">Login Here</h3>-->
                <h1>Your Abstract Submission Details</h1>
                <div class="sidebar-box white animate-onscroll">
              
              <ul class="upcoming-events">
                 <?php
               include("include/connection.php");
               
               if(!isset($_SESSION["user_login"])){
                echo "<script>window.top.location.href = '../login';</script>";
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
            $abstract = $row['abstract_submission'];
            $payment = $row['payment_status'];
            $oral_submission = $row['oral_submission'];
            $poster_submission = $row['poster_submission'];
            $young_submission = $row['young_submission'];
            $oral_url="userdata/$uid/abstracts/$oral_submission";
            $poster_url="userdata/$uid/abstracts/$poster_submission";
            $young_url="userdata/$uid/abstracts/$young_submission";

              }
              /*
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
            
            mysql_query("UPDATE registrations set abstract_submission = '$abstract' WHERE uid='$uid'");
            */
          
                
                
                
                                echo '
                <table>
                <tr><td><strong>S.No.</strong></td><td><strong>Category</strong></td><td><strong>Applied</strong></td><td><strong>Status</strong></td></tr>
                <tr><td>1.</td><td><b>Oral Presentation</b></td><td>'.$oral.'</td><td>';
                if($oral=="nil"){
                  echo "not applicable";
                }
                else{
                  if ($oral_submission == "nil") {
                    ?>
                    <form name="myform1" action="" method="POST" enctype="multipart/form-data" onsubmit="DoSubmit1();">

                    <input type="file" name="oral_submission" /><br />
                    <input type="submit" name="oralfile" value="Submit" />
                    </form>
                    <?php
                  }
                  else{
                    ?>

                    
                     <form name="myform1" id="submitform2" style="display:none;" action="" method="POST" enctype="multipart/form-data" onsubmit="DoSubmit1();">

                    <input class="uploadele" type="file" name="oral_submission" /><br />
                    <input type="submit" name="oralfile" value="Submit" />
                    </form>
                    <a id="review2" target="_blank" href='<?php echo $oral_url;?>'>View</a>
                    
                    <a id="uploadnew2" target="_blank" onClick="changeoptionn()">Upload New</a>
                    
                    <?php
                  }
                  
                }
                echo'</td></tr>
                <tr><td>2.</td><td><b>Poster Presentation</b></td><td>'.$poster.'</td><td>';
                if($poster=="nil"){
                  echo "not applicable";
                }
                else{
                  if ($poster_submission == "nil") {
                    ?>
                    <form name="myform2" action="" method="POST" enctype="multipart/form-data" onsubmit="DoSubmit2();">

                    <input type="file" name="poster_submission" /><br />
                    <input type="submit" name="posterfile" value="Submit" />
                    </form>
                    <?php
                  }
                  else{
                    ?>
                    
                     <form name="myform2" id="submitform1" style="display:none;" action="" method="POST" enctype="multipart/form-data" onsubmit="DoSubmit2();">

                    <input class="uploadele" type="file" name="poster_submission" /><br />
                    <input type="submit" name="posterfile" value="Submit" />
                    </form>
                    <a id="review1" target="_blank" href='<?php echo $poster_url;?>'>View</a>
                    
                    <a id="uploadnew1" target="_blank" onClick="changeoptionnn()">Upload New</a>
                    <?php
                  }
                  
                }
                echo'</td></tr>
                <tr><td>3.</td><td><b>Young Scientist Award</b></td><td>'.$young.'</td><td>';
                if($young=="nil"){
                  echo "not applicable";
                }
                else{
                  if ($young_submission == "nil") {
                    ?>

                    <form name="myform3" action="" method="POST" enctype="multipart/form-data" onsubmit="DoSubmit3();">

                    <input class="uploadele" type="file" name="young_submission" /><br />
                    <input type="submit" name="youngfile" value="Submit" />
                    </form>
                    <?php
                  }
                  else{
                    ?>
                    <form name="myform3" id="submitform" style="display:none;" action="" method="POST" enctype="multipart/form-data" onsubmit="DoSubmit3();">

                    <input class="uploadele" type="file" name="young_submission" /><br />
                    <input type="submit" name="youngfile" value="Submit" />
                    </form>
                    <a id="review" target="_blank" href='<?php echo $young_url;?>'>View</a>
                    
                    <a id="uploadnew" target="_blank" onClick="changeoption()">Upload New</a>
                    
                   
                    <?php
                  }
                  
                }
                echo'</td></tr>
                

                </table>


                ';
              }

                ?>
                
              </ul><br>
              <b>Note:</b><br>
              <p>1. Abstract submission started.<br>
                2. The last submitted abstract will be accepted.<br>
                3. In case you are facing any problem with the online process kindly write to us at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>.</p>
              
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
     <script type="text/javascript">
    
                    function changeoption()
                    { 
                     
                        var elr = document.getElementById('review');
                      elr.style.display = "none";
                      var elp = document.getElementById('uploadnew');
                      elp.style.display = "none";
                      var ele = document.getElementById('submitform');
                      ele.style.display = "block";
                        
                     
                      
                    }
                    function changeoptionn()
                    { 
                     
                        var elr = document.getElementById('review2');
                      elr.style.display = "none";
                      var elp = document.getElementById('uploadnew2');
                      elp.style.display = "none";
                      var ele = document.getElementById('submitform2');
                      ele.style.display = "block";
                        
                     
                      
                    }
                    function changeoptionnn()
                    { 
                     
                        var elr = document.getElementById('review1');
                      elr.style.display = "none";
                      var elp = document.getElementById('uploadnew1');
                      elp.style.display = "none";
                      var ele = document.getElementById('submitform1');
                      ele.style.display = "block";
                        
                     
                      
                    }

    function DoSubmit1(){
  document.myform1.oralfile.value = 'Uploading...';
  return true;
}
function DoSubmit2(){
  document.myform2.posterfile.value = 'Uploading...';
  return true;
}
function DoSubmit3(){
  document.myform3.youngfile.value = 'Uploading...';
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

//oral abstract upload script
if (isset($_FILES['oral_submission'])){

 $allowedExts = array("pdf", "doc", "docx");
$extension = end(explode(".", $_FILES["oral_submission"]["name"]));

if((($_FILES["oral_submission"]["type"]=="application/pdf") || ($_FILES["oral_submission"]["type"]=="application/msword") || ($_FILES["oral_submission"]["type"]=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"))  && in_array($extension, $allowedExts) &&($_FILES["oral_submission"] ["size"] < 3048576)) //3megabyte
{

mkdir("userdata/$reg_id");
$rand_dir_name = "oral_presentation";

mkdir("userdata/$reg_id/abstracts");
mkdir("userdata/$reg_id/abstracts/$rand_dir_name");
if (file_exists("userdata/$reg_id/abstracts/$rand_dir_name/".$_FILES["oral_submission"]["name"]))
{
echo "<script>alert('File already exists. Try uploading by changing file name !!!')</script>;";

}
else{
$que = move_uploaded_file($_FILES["oral_submission"]["tmp_name"], "userdata/$reg_id/abstracts/$rand_dir_name/".$_FILES["oral_submission"]["name"]);
if ($que) {
  $file_name = $_FILES["oral_submission"]["name"];
$file_query = mysql_query("UPDATE registrations SET oral_submission='$rand_dir_name/$file_name' WHERE uid='$uid'");
  echo "<script>alert('uploaded successfully !!!')</script>;";
  echo "<meta http-equiv=\"refresh\" content=\"0; url=abstract-submission\">";
}
else{
    echo "<script>alert('An error occurred during uploading. Please try again !!!')</script>;";
}



}
}
else{
  
  echo "Invalid File! Your file must be no larger than 3Mb and it must be either a .pdf, .doc or .docx";
  }
}


//poster abstract upload script
if (isset($_FILES['poster_submission'])){

 $allowedExts = array("pdf", "doc", "docx");
$extension = end(explode(".", $_FILES["poster_submission"]["name"]));

if((($_FILES["poster_submission"]["type"]=="application/pdf") || ($_FILES["poster_submission"]["type"]=="application/msword") || ($_FILES["poster_submission"]["type"]=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"))  && in_array($extension, $allowedExts) &&($_FILES["poster_submission"] ["size"] < 3048576)) //5megabyte
{
mkdir("userdata/$reg_id");
$rand_dir_name = "poster_presentation";

mkdir("userdata/$reg_id/abstracts");
mkdir("userdata/$reg_id/abstracts/$rand_dir_name");
if (file_exists("userdata/$reg_id/abstracts/$rand_dir_name/".$_FILES["poster_submission"]["name"]))
{
echo "<script>alert('File already exists. Try uploading by changing file name !!!')</script>;";

}
else{
$que = move_uploaded_file($_FILES["poster_submission"]["tmp_name"], "userdata/$reg_id/abstracts/$rand_dir_name/".$_FILES["poster_submission"]["name"]);
if ($que) {
  $file_name = $_FILES["poster_submission"]["name"];
$file_query = mysql_query("UPDATE registrations SET poster_submission='$rand_dir_name/$file_name' WHERE uid='$uid'");
  echo "<script>alert('uploaded successfully !!!')</script>;";
  echo "<meta http-equiv=\"refresh\" content=\"0; url=abstract-submission\">";
}
else{
    echo "<script>alert('An error occurred during uploading. Please try again !!!')</script>;";
}



}
}
else{
  
  echo "Invalid File! Your file must be no larger than 3Mb and it must be either a .pdf, .doc or .docx";
  }
}

//young abstract upload script
if (isset($_FILES['young_submission'])){

 $allowedExts = array("pdf", "doc", "docx");
$extension = end(explode(".", $_FILES["young_submission"]["name"]));

if((($_FILES["young_submission"]["type"]=="application/pdf") || ($_FILES["young_submission"]["type"]=="application/msword") || ($_FILES["young_submission"]["type"]=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"))  && in_array($extension, $allowedExts) &&($_FILES["young_submission"] ["size"] < 3048576)) //3megabyte
{
mkdir("userdata/$reg_id");
$rand_dir_name = "young_sci_award_presentation";

mkdir("userdata/$reg_id/abstracts");
mkdir("userdata/$reg_id/abstracts/$rand_dir_name");
if (file_exists("userdata/$reg_id/abstracts/$rand_dir_name/".$_FILES["young_submission"]["name"]))
{
echo "<script>alert('File already exists. Try uploading by changing file name !!!')</script>;";

}
else{
$que = move_uploaded_file($_FILES["young_submission"]["tmp_name"], "userdata/$reg_id/abstracts/$rand_dir_name/".$_FILES["young_submission"]["name"]);
if ($que) {
  $file_name = $_FILES["young_submission"]["name"];
$file_query = mysql_query("UPDATE registrations SET young_submission='$rand_dir_name/$file_name' WHERE uid='$uid'");
  echo "<script>alert('uploaded successfully !!!')</script>;";
  echo "<meta http-equiv=\"refresh\" content=\"0; url=abstract-submission\">";
}
else{
    echo "<script>alert('An error occurred during uploading. Please try again !!!')</script>;";
}



}
}
else{
  
  echo "<script>alert('Invalid File! Your file must be no larger than 3Mb and it must be either a .pdf, .doc or .docx')</script>;";
  }
}
?>
