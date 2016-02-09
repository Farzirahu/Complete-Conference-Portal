
<?php

if ($search_menu) {
include("include/connection.php");
if(isset($_GET['search'])){
	
 $search_id = mysql_real_escape_string ($_GET['search']);
 

$search_query="select * from registrations where uid like '%$search_id%' OR firstname like '%$search_id%' OR middlename like '%$search_id%' OR lastname like '%$search_id%' OR email like '%$search_id%' OR organisation like '%$search_id%' OR institute like '%$search_id%' OR country like '%$search_id%' OR category like '%$search_id%' OR gender like '%$search_id%' OR city like '%$search_id%' OR state like '%$search_id%' OR payment_status like '%$search_id%'"; 
$run_query=mysql_query($search_query) or die(mysql_error());
$i=1;

$count = mysql_num_rows($run_query);
if ($count == 1) {
	echo'

            		 <center><h3> Only '.$count.' result found.</h3>';?>
            		 	 <input class="print" type="button" value="Print" onclick="PrintElem('#mydiv')" />
            		 	<?php echo '</center><br>
            		 <table align="center" border>
            		 <tr><td><b>S.No.</b></td><td><b>Registration ID</b></td><td><b>Category</b></td><td><b>Full Name</b></td><td><b>Gender</b></td><td><b>Email & DOB(yyyy-mm-dd)</b></td><td><b>Academic Info</b></td><td><b>Full Address</b></td><td><b>Presentation Details</b></td><td><b>Payment Status</b></td><td><b>Abstract status</b></td></tr>
            		         ';
}
if ($count > 1) {
	echo'

            		 <center><h3> Total '.$count.' results found.</h3>';?>
            		 	 <input class="print" type="button" value="Print" onclick="PrintElem('#mydiv')" />
            		 	<?php echo '</center><br>
            		 <table align="center" border>
            		 <tr><td><b>S.No.</b></td><td><b>Registration ID</b></td><td><b>Category</b></td><td><b>Full Name</b></td><td><b>Gender</b></td><td><b>Email & DOB(yyyy-mm-dd)</b></td><td><b>Academic Info</b></td><td><b>Full Address</b></td><td><b>Presentation Details</b></td><td><b>Payment Status</b></td><td><b>Abstract status</b></td></tr>
            		         ';
}
if ($count == 0) {
	echo'

            		 <center><h3> No results found.</h3></center>
            		 <div class="nosearchres">
            		 <p><h2>You can search using following keywords only:</h2>
            		 <ul>
            		 <li>Regsitration ID</li>
            		 <li>First Name</li>
            		 <li>Middle Name</li>
            		 <li>Last Name</li>
            		 <li>Category(e.g. student, academia, industry)</li>
            		 <li>Gender(e.g. male, female)</li>
            		 <li>Email</li>
            		 <li>Organisation/Institution</li>
            		 <li>Institute</li>
            		 <li>City</li>
            		 <li>State</li>
            		 <li>Country</li>
            		 <li>Payment Status(e.g. paid, not paid)</li>
            		 
            		 </ul>

            		 </p></div>';
            		 	
            		         
}
            		

            		         if(isset($_GET['del'])){
            		         $del = mysql_real_escape_string($_GET['del']);
            		     $delquery = mysql_query("DELETE FROM registrations WHERE uid='$del'") ;
            		     if ($delquery) {
            		        	echo '<script>alert("Deleted !!!")</script>';
            		        	echo "<script>window.top.location.href = 'index?search=$search_id';</script>";
            		        }   
            		         } 
			            while($row = mysql_fetch_array($run_query)){
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
            		  	<td><a href="JavaScript:newPopup('userdetail?showDetail=<?php echo $reg_id; ?>');"><?php echo $reg_id; ?></a></td>
            		  	<td><?php echo $category; ?></td>
            		  	<td><?php echo $initials.' '.$fname.' '.$mname.' '.$lname; ?></td>
            		  	<td><?php echo $gender; ?></td>
            		  	
            		  	<td><?php echo $email.'<br>'.$dob; ?></td>
            		  	<td><?php echo $designation.' at '.$organisation.' and '.$qualification.' from '.$institute; ?></td>
            		  	
            		  	<td><?php echo $address.', '.$city.', '.$state.', '.$country.' - '.$zip.'<br>'.$telephone.', '.$mobile; ?></td>
            		  	<td><?php echo $oral.', '.$poster.', '.$young; ?></td>
            		  	<td><?php echo $payment; ?></td>
            		  	<!--<td><a onClick="return confirm('Are you sure you want to delete this user !!!')" href="index?search=<?php echo $search_id; ?>&del=<?php echo $reg_id; ?>">Delete</a> </td>
            		  	
            		  	-->
                              <td><?php echo $abstract; ?></td>
            		  

            		
            		<?php $i++; } ?>
            		</table>
            		<?php }}
/* if ($search_menu == "") {
	echo'

            		 <center><h3> Please enter a search string.</h3></center>
            		 <div class="nosearchres">
            		 <p><h2>You can search using following keywords only:</h2>
            		 <ul>
            		 <li>Regsitration ID</li>
            		 <li>First Name</li>
            		 <li>Middle Name</li>
            		 <li>Last Name</li>
            		 <li>Category(e.g. student, academia, industry)</li>
            		 <li>Gender(e.g. male, female)</li>
            		 <li>Email</li>
            		 <li>Organisation/Institution</li>
            		 <li>Institute</li>
            		 <li>City</li>
            		 <li>State</li>
            		 <li>Country</li>
            		 
            		 
            		 </ul>

            		 </p></div>';
} */
            		
?>
