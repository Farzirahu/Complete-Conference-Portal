

<?php
$total = 0;
$i=1;
            		$query = mysql_query("SELECT * FROM registrations order by 1 DESC");
            		$count = mysql_num_rows($query);
            		
if ($count >= 1) {
	echo'

            		 <center><h2> Notify all users here</h2>';?>
                              <form action="notify_users" method="POST">
                                    
                                    <textarea name="message" placeholder="enter your message here..." cols="80" rows="5" required></textarea><br>
                             <br> <input type="checkbox" class="print" onClick="toggle(this)" /> Check All
                              
                              &nbsp;&nbsp;&nbsp;
                              &nbsp;&nbsp;&nbsp;
                              
                              <input onClick="return confirm('Are you sure you want to send this message to the users checked !!!')" class="print" name="submit" type="submit" value="Send Message" />
            		 	
            		 	 
            		 	<?php echo '</center><br>
            		 <table align="center" border>
            		 <tr><td><b>S.No.</b></td><td><b>Select</b></td><td><b>Registration ID</b></td><td><b>Category</b></td><td><b>Full Name</b></td><td><b>Gender</b></td><td><b>Email & DOB(yyyy-mm-dd)</b></td><td><b>Academic Info</b></td><td><b>Presentation Details</b></td><td><b>Payment Status</b></td><td><b>Abstract status</b></td></tr>
            		         ';
}
if ($count == 0) {
	echo'

            		 <center><h3> No registrations yet.</h3></center>';
            		 	
            		         
}

            		         if(isset($_GET['del'])){
            		         $del = mysql_real_escape_string($_GET['del']);
            		         if($del == "clearAllRecords"){
            		         	$delquery = mysql_query("DELETE FROM registrations") ;
            		     if ($delquery) {
            		        	echo '<script>alert("All data has been cleared!!!")</script>';
            		        	echo "<script>window.top.location.href = 'index?category=registrations';</script>";
            		         }}
            		         else{
            		     $delquery = mysql_query("DELETE FROM registrations WHERE uid='$del'") ;
            		     if ($delquery) {
            		        	echo '<script>alert("Deleted !!!")</script>';
            		        	echo "<script>window.top.location.href = 'index?category=registrations';</script>";
            		        }   }
            		         } 
			            while($row = mysql_fetch_array($query)){
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
			            if ($oral == "nil") {
			              $oral="";
			            }
			            if ($oral == "yes") {
			              $oral="oral";
			            }
			            $poster = $row['poster_presentation'];
			            if ($poster == "nil") {
			              $poster="";
			            }
			            if ($poster == "yes") {
			              $poster="poster";
			            }
			            $young = $row['young_scientist_award'];
			            if ($young == "nil") {
			              $young="";
			            }
			            if ($young == "yes") {
			              $young="young scientist";
			            }
			            $abstract = $row['abstract_submission'];
			            $payment = $row['payment_status'];
			            
			              
			              ?>
            		  
            		  <tr align="center">
            		  	<td><?php echo $i; ?></td>
                              <td><input type="checkbox" class="check_box" name="<?php echo $i; ?>" value="<?php echo $email; ?>"/></td>
            		  	<td><a href="JavaScript:newPopup('userdetail?showDetail=<?php echo $reg_id; ?>');"><?php echo $reg_id; ?></a></td>
            		  	<td><?php echo $category; ?></td>
            		  	<td><?php echo $initials.' '.$fname.' '.$mname.' '.$lname; ?></td>
            		  	<td><?php echo $gender; ?></td>
            		  	
            		  	<td><?php echo $email.'<br>'.$dob; ?></td>
            		  	<td><?php echo $designation.' at '.$organisation.' and '.$qualification.' from '.$institute; ?></td>
            		  	
            		  	
            		  	<td><?php echo $oral.', '.$poster.', '.$young; ?></td>
            		  	<td><?php echo $payment; ?></td>
            		  	<!--<td><a onClick="return confirm('Are you sure you want to delete this user !!!')" href="index?category=registrations&del=<?php echo $reg_id; ?>">Delete</a> </td>
            		  	-->
                              <td><?php echo $abstract; ?></td>
            		  	
            		  

            		
            		<?php $i++; } ?>
            		</table>
                        <?php
                        $total=$i;
                        ?>
                  </form>
                        <script type="text/javascript">

                        function toggle(source) {
  checkboxes = document.getElementsByClassName('check_box');
  for(var p=0, n=checkboxes.length;p<n;p++) {
    checkboxes[p].checked = source.checked;
    
  }
}

                        </script>
