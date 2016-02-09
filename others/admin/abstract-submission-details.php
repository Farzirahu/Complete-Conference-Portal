
<!DOCTYPE html>

<html>

  

<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>User Abstract Submission Details | Bio Sangam 2016</title>
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

    table{
        font-size: 20px;
        text-align: center;
    }
    table tr>td{
      padding:5px;
    }
    
    </style>
<?php

include("include/header.php");
include("include/connection.php");
               
                if(isset($_GET['user'])){
                        $user_id = mysql_real_escape_string($_GET['user']);
                         $uid = $user_id;
?>
      
      
     
      
    <section id="content">  
      
      

      
      <!-- Section -->
      <section class="section full-width-bg gray-bg">
        <div class="row">
        
          <div class="col-lg-2 col-md-2 col-sm-2">
      
            
            </div>
            
            <div class="col-lg-8 col-md-8 col-sm-8">
              
            
                <!--<h3 class="animate-onscroll no-margin-top">Login Here</h3>-->
               <center> <h1><?php echo $uid; ?> Abstract Submission Details</h1><button onclick="window.print()">Print Page</button></center><br>
                <div class="sidebar-box white animate-onscroll">
              
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
            $abstract = $row['abstract_submission'];
            $payment = $row['payment_status'];
            $oral_submission = $row['oral_submission'];
            $poster_submission = $row['poster_submission'];
            $young_submission = $row['young_submission'];
            $oral_url="../../userdata/$uid/abstracts/$oral_submission";
            $poster_url="../../userdata/$uid/abstracts/$poster_submission";
            $young_url="../../userdata/$uid/abstracts/$young_submission";

            
              }
          
                
                
                
                                echo '
                <table border>
                <tr><td><strong>S.No.</strong></td><td><strong>Category</strong></td><td><strong>Applied</strong></td><td><strong>Status</strong></td></tr>
                <tr><td>1.</td><td><b>Oral Presentation</b></td><td>'.$oral.'</td><td>';
                if($oral=="nil"){
                  echo "not applicable";
                }
                else{
                  if ($oral_submission == "nil") {
                    echo "not submitted yet.";
                  }
                  else{
                    ?>

                    
                     <form id="submitform2" style="display:none;" action="" method="POST" enctype="multipart/form-data">

                    <input class="uploadele" type="file" name="oral_submission" /><br />
                    <input type="submit" name="oralfile" value="Submit" />
                    </form>
                    <a id="review2" target="_blank" href='<?php echo $oral_url;?>'>View</a>
                    
                    <!--<a id="uploadnew2" target="_blank" onClick="changeoptionn()">Upload New</a>-->
                    
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
                     echo "not submitted yet.";
                  }
                  else{
                    ?>
                    
                     <form id="submitform1" style="display:none;" action="" method="POST" enctype="multipart/form-data">

                    <input class="uploadele" type="file" name="poster_submission" /><br />
                    <input type="submit" name="posterfile" value="Submit" />
                    </form>
                    <a id="review1" target="_blank" href='<?php echo $poster_url;?>'>View</a>
                    
                    <!--<a id="uploadnew1" target="_blank" onClick="changeoptionnn()">Upload New</a>-->
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
                     echo "not submitted yet.";
                  }
                  else{
                    ?>
                    <form id="submitform" style="display:none;" action="" method="POST" enctype="multipart/form-data">

                    <input class="uploadele" type="file" name="young_submission" /><br />
                    <input type="submit" name="youngfile" value="Submit" />
                    </form>
                    <a id="review" target="_blank" href='<?php echo $young_url;?>'>View</a>
                    
                    <!--<a id="uploadnew" target="_blank" onClick="changeoption()">Upload New</a>-->
                    
                   
                    <?php
                  }
                  
                }
                echo'</td></tr>
                

                </table>


                ';
              }

                ?>
                
              </ul><br>
              
              
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
  echo "<script>alert('uploaded successfully !!!')</script>;";
  echo "<meta http-equiv=\"refresh\" content=\"0; url=abstract-submission\">";
}
else{
    echo "<script>alert('An error occurred during uploading. Please try again !!!')</script>;";
}
$file_name = $_FILES["oral_submission"]["name"];
$file_query = mysql_query("UPDATE registrations SET oral_submission='$rand_dir_name/$file_name' WHERE uid='$uid'");


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
  echo "<script>alert('uploaded successfully !!!')</script>;";
  echo "<meta http-equiv=\"refresh\" content=\"0; url=abstract-submission\">";
}
else{
    echo "<script>alert('An error occurred during uploading. Please try again !!!')</script>;";
}
$file_name = $_FILES["poster_submission"]["name"];
$file_query = mysql_query("UPDATE registrations SET poster_submission='$rand_dir_name/$file_name' WHERE uid='$uid'");


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
  echo "<script>alert('uploaded successfully !!!')</script>;";
  echo "<meta http-equiv=\"refresh\" content=\"0; url=abstract-submission\">";
}
else{
    echo "<script>alert('An error occurred during uploading. Please try again !!!')</script>;";
}
$file_name = $_FILES["young_submission"]["name"];
$file_query = mysql_query("UPDATE registrations SET young_submission='$rand_dir_name/$file_name' WHERE uid='$uid'");


}
}
else{
  
  echo "<script>alert('Invalid File! Your file must be no larger than 3Mb and it must be either a .pdf, .doc or .docx')</script>;";
  }
}
?>
