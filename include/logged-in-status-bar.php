<marquee><b>Announcements:</b>
 1. Abstract submission open. &nbsp;&nbsp;
 2. Payment started.  &nbsp;&nbsp;
  3. Early Bird Registration, Till October 15th.&nbsp;&nbsp;
 4. Travel Award Bursaries, to be announced shortly.</p>
 </marquee>

<?php
               include("include/connection.php");
               
               if(!isset($_SESSION["user_login"])){
                //nothing
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
                    }
?>

<section class="section page-heading animate-onscroll" style="background-color:green; color:#ffffff;padding:5px 105px; margin:0 -105px; ">
        <div class="row">
        
          <div class="col-lg-11 col-md-11 col-sm-11">
      
				welcome
				<a style="color:#ffffff;" href="dashboard"><b><?php echo $initials.' '.$fname.' '.$mname.' '.$lname; ?></b></a>
      	
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1">
				
				<b ><a href="logout" style="color:#ffffff">Logout</a></b>
      	
			</div>
    </div>

				
			</section>
			<?php } ?>