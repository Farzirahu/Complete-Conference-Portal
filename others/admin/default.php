<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
	echo'<script>window.top.location.href="login"</script>';
}
else{
	$username = $_SESSION['admin_login'];
	include("include/connection.php");
	$login_query = mysql_query("SELECT * FROM admin WHERE username='$username'");
	$login_row = mysql_fetch_assoc($login_query);
	$login_name = $login_row['name'];

?>
<html>
<head>
<title>
Admin Area | Biosangam 2016
</title>
<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="../../img/logo.jpg">
		
		<!-- Stylesheets -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/fontello.css" rel="stylesheet" type="text/css">
		<link href="css/flexslider.css" rel="stylesheet" type="text/css">
		<link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="css/responsive-calendar.css" rel="stylesheet" type="text/css">
		<link href="css/chosen.css" rel="stylesheet" type="text/css">
		<link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
		<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
		<link href="css/colorpicker.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
		<style type="text/css">
		.nosearchres{
			width: 700px;
			margin: 0px auto;
		}

		.nosearchres ul>li{
			font-size: 18px;
		}
		.passbox{
			width: 450px;
			margin:0 auto;
		}
		.pass{
			border:1px solid #000;
			height: 30px;
			width: 200px;
		}
		label{
			display: inline-block;
			width:200px;
			font-size: 16px;
		}
		.header{
			border-bottom: 1px solid #000;
		}
		
		.menu{
			padding-right:0px;
			border-bottom: 1px solid #000;
			

		}
		.item{
			padding:0 5px 0 5px;
			text-align: center;
			border-right: 1px solid #000;
		}
		.up{
			border-left: 1px solid #000;
			
		}
		.menu a{

			float:left;
			text-decoration: none;
			font-size: 20px;
			
			
		}
		.user{
			color:#000;
			margin: 0 10px 0 10px;
		}
		.menu a .item:hover{
			background-color: blue;
			color: #ffffff;
			
		}
		.print{
			font-size: 20px;
			border:1px solid red;
			color: red;
			background-color: #ffffff;
		}
		.print:hover{
			
			color: #ffffff;
			background-color: red;
		}
		 table tr>td{
      padding:5px;
    }
    .search_box{
    	float: left;
    	height: 28px;
    	border-right: 1px solid #000;
    	padding:1px 2px 1px 2px;
    }
    .search_box input{
    	height: 26px;

    }
    
   
#search input[type="text"]{
background: url(../../img/search.png) no-repeat 0px 0px #ffffff; /*#267bb6;*/
outline:none;
color:#000000;

border: 1px solid #000;


padding: 6px 15px 6px 35px;
margin:0px;
text-shadow: none;
-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
-webkit-transition: all 0.7s ease 0s;
-moz-transition: all 0.7s ease 0s;
-o-transition: all 0.7s ease 0s;
transition: all 0.7s ease 0s;
}

		</style>
		<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=600,width=1000');
        mywindow.document.write('<html><head><title>Admin Area Biosangam 2016</title>');
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
</head>
<body>
<section class="section full-width-bg gray-bg">
<div class=" header col-lg-12 col-md-12 col-sm-12">
      <center><h1>Welcome to Admin Panel Biosangam 2016</h1></center>
            
            </div>
</section>
<section class="section full-width-bg">

	<div class="row">
        
          <center><div  class=" menu col-lg-12 col-md-12 col-sm-12">
      
      <a ><div class="user">Hello, <?php echo $login_name; ?></div></a>
      <a href="index"><div class="up item">Home</div></a>
      <a href="index?category=registrations"><div class="item">Registrations</div></a>
      <a href="index?category=newNupdates"><div class="item">News and Updates</div></a>
      <a href="index?category=announcements"><div class="item">Announcements</div></a>
      <a href="index?category=changePassword"><div class="item">Change Password</div></a>
      
      <div class="search_box">
<form action="index" method="GET" id="search">
<input autocomplete="off" type="text" name="search" size="30" autofocus="autofocus" Placeholder="Search for registrations here..."/>
</form>
</div>
<a href="logout"><div class="item">Logout</div></a>
      
            </div></center>
           
            <div id="mydiv"  class=" data col-lg-12 col-md-12 col-sm-12">
            	<?php
            	include("include/connection.php");
            	$item = mysql_real_escape_string($_GET['category']);
            	$search_menu = mysql_real_escape_string($_GET['search']);
            	if ($item == "registrations") {
            		$i=1;
            		$query = mysql_query("SELECT * FROM registrations order by 1 DESC");
            		$count = mysql_num_rows($query);
            		if ($count == 1) {
	echo'

            		 <center><h3> Only '.$count.' registration till date.</h3>';?>
            		 	 <input class="print" type="button" value="Print" onclick="PrintElem('#mydiv')" />
            		 	<a href="index?category=registrations&del=clearAllRecords" onClick="confirm('Are you sure you want to clear all the records uptil now !!!');"><input class="print" type="button" value="Clear all records" /></a>
            		 	
            		 	<?php echo '</center><br>
            		 <table align="center" border>
            		 <tr><td><b>S.No.</b></td><td><b>Registration ID</b></td><td><b>Category</b></td><td><b>Full Name</b></td><td><b>Gender</b></td><td><b>Email & DOB(yyyy-mm-dd)</b></td><td><b>Academic Info</b></td><td><b>Full Address</b></td><td><b>Presentation Details</b></td><td><b>Payment Status</b></td><td><b>Delete</b></td></tr>
            		         ';
}
if ($count > 1) {
	echo'

            		 <center><h3> Total '.$count.' registrations till date.</h3>';?>
            		 	 <input class="print" type="button" value="Print" onclick="PrintElem('#mydiv')" />
            		 	 <a href="index?category=registrations&del=clearAllRecords" onClick="confirm('Are you sure you want to clear all the records uptil now !!!');"><input class="print" type="button" value="Clear all records" /></a>
            		 	<?php echo '</center><br>
            		 <table align="center" border>
            		 <tr><td><b>S.No.</b></td><td><b>Registration ID</b></td><td><b>Category</b></td><td><b>Full Name</b></td><td><b>Gender</b></td><td><b>Email & DOB(yyyy-mm-dd)</b></td><td><b>Academic Info</b></td><td><b>Full Address</b></td><td><b>Presentation Details</b></td><td><b>Payment Status</b></td><td><b>Delete</b></td></tr>
            		         ';
}
if ($count == 0) {
	echo'

            		 <center><h3> No registrations yet.</h3></center>';
            		 	
            		         
}

            		         if(isset($_GET['del'])){
            		         $del = mysql_real_escape_string($_GET['del']);
            		         if($del == "clearAllRecords"){
            		         	$delquery = mysql_query("DELETE * FROM registrations") ;
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
            		  	<td><a href="JavaScript:newPopup('userdetail?showDetail=<?php echo $reg_id; ?>');"><?php echo $reg_id; ?></a></td>
            		  	<td><?php echo $category; ?></td>
            		  	<td><?php echo $initials.' '.$fname.' '.$mname.' '.$lname; ?></td>
            		  	<td><?php echo $gender; ?></td>
            		  	
            		  	<td><?php echo $email.'<br>'.$dob; ?></td>
            		  	<td><?php echo $designation.' at '.$organisation.' and '.$qualification.' from '.$institute; ?></td>
            		  	
            		  	<td><?php echo $address.', '.$city.', '.$state.', '.$country.' - '.$zip.'<br>'.$telephone.', '.$mobile; ?></td>
            		  	<td><?php echo $oral.', '.$poster.', '.$young; ?></td>
            		  	<td><?php echo $payment; ?></td>
            		  	<td><a onClick="confirm('Are you sure you want to delete this user !!!');" href="index?category=registrations&del=<?php echo $reg_id; ?>">Delete</a> </td>
            		  	
            		  	
            		  

            		
            		<?php $i++; } ?>
            		</table>

            		 <?php
            		 
            	}
            	if ($item == "newNupdates") {
            		?>
 

            		<div id="viewnews">
            		 <br>
            		 <center><table border>

<tr>
<td align="center"  colspan="6"><h1>News and Updates</h1></td>
</tr>
<tr>


<td align="right">Content:</td>
<?php

include("include/connection.php");
$query = "select * from admin";
$run=mysql_query($query);

$row=mysql_fetch_assoc($run);
$news = $row['news'];

?>

	<td><textarea name="content" cols="50" rows="19" ><?php echo $news; ?></textarea></td>
</tr>
<tr>

<td align="center" colspan="6"><a href="#" onClick="showeditnews()"><button>Edit</button></a></td>


</tr>

</table>
</div>
<div style="display:none;" id="editnews">
 
 <center><?php include("edit_news.php"); ?></center>
</div>
<script type="text/javascript">
function showeditnews(){
	document.getElementById('viewnews').style.display="none";
	document.getElementById('editnews').style.display="block";

}
</script>
></center>
    <?php        		 
            	}
            	if ($item == "announcements") {
            		?>
            		<div id="viewannounce">
            		 <br>
            		 <center><table border>

<tr>
<td align="center"  colspan="6"><h1>Announcements</h1></td>
</tr>
<tr>


<td align="right">Content:</td>
<?php

include("include/connection.php");
$query = "select * from admin";
$run=mysql_query($query);

$row=mysql_fetch_assoc($run);
$announce = $row['announcements'];

?>

	<td><textarea name="content" cols="50" rows="19" ><?php echo $announce; ?></textarea></td>
</tr>
<tr>

<td align="center" colspan="6"><a href="#" onClick="showeditannounce()"><button>Edit</button></a></td>


</tr>

</table>
</div>
<div style="display:none;" id="editannounce">
 
 <center><?php include("edit_announce.php"); ?></center>
</div>
<script type="text/javascript">
function showeditannounce(){
	document.getElementById('viewannounce').style.display="none";
	document.getElementById('editannounce').style.display="block";

}
</script>
></center><?php
            	}
            	if ($item == "changePassword") {
            		echo'
            		 <center><h3> Change Your Password Here</h3>
            		 ';

            		 ?>
            		 <?php include("change_pass.php"); ?>
            		 <?php
            	}

            	
            		?>

            		<?php
            		 include("search.php");
            		 ?>
            		 
            </div>
            
        </div>
</section>
<script type="text/javascript">
					// Popup window code
					function newPopup(url) {
						popupWindow = window.open(
							url,'popUpWindow',' float="center" height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
					}

					</script>
</body>
</html>
<?php } ?>