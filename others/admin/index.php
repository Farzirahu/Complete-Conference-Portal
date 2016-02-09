<?php
session_start();
error_reporting(0);
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
		.wrap{
			height: 100%;
		}
		#footer{
			display: none;
			border-top: 1px solid #000000;
			 clear: both;
			    position: relative;
			    z-index: 10;
			    height: 1em;
			    margin-top: -2em;
			
			bottom: 0px;
		}
		.instructions{
			font-size: 15px;
		}
		.update{
			width: 500px;
			margin: 0px auto;
		}
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
        var mywindow = window.open('', 'my div', 'height=500,width=1000');
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
	<section class="wrap">
<section class="section full-width-bg gray-bg">
<div class=" header col-lg-12 col-md-12 col-sm-12">
      <center><h1>Admin Panel Biosangam 2016</h1></center>
            <p style="float:right;">Designed by:<a target="_blank" href="http://rahulkushwaha.in/">Rahul Kushwaha</a></p>
            </div>
</section>
<section class="data section full-width-bg">

	<div class="row">
        
          <center><div  class=" menu col-lg-12 col-md-12 col-sm-12">
      
      <a ><div class="user">Hello, <?php echo $login_name; ?></div></a>
      <a href="index"><div class="up item">Home</div></a>
      <a href="index?category=registrations"><div class="item">Registrations</div></a>
      <a href="index?category=newNupdates"><div class="item">News & Updates</div></a>
      <a href="index?category=announcements"><div class="item">Announcements</div></a>
      <a href="index?category=notifications"><div class="item">Notify Users</div></a>
      <a href="index?category=changePassword"><div class="item">Change Password</div></a>
      
      <div class="search_box">
<form action="index" method="GET" id="search">
<input autocomplete="off" type="text" name="search" size="27" autofocus="autofocus" Placeholder="Search for registrations here..."/>
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
            		?>
            		<?php include("registrations.php"); ?>
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

	<td><?php echo $news; ?></td>
</tr>
<tr>

<td align="center" colspan="6"><a href="#" onClick="showeditnews()"><button>Edit</button></a></td>


</tr>

</table>
</div>
<br>
<div style="display:none;" id="editnews" class="update">
 
 <?php include("edit_news.php"); ?>
 <div class="instructions">
  <b>Instructions:</b>
 <p>1. Use <b> &lt;br&gt;&lt;br&gt;</b> tags to separate one news from another.</p>
 <p>2. Use can also use other HTML tags to make links, change fonts etc. in the news and CSS to design it.</p>
 </div>

</div>
<script type="text/javascript">
function showeditnews(){
	document.getElementById('viewnews').style.display="none";
	document.getElementById('editnews').style.display="block";

}
</script>
</center>
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

	<td><?php echo $announce; ?></td>
</tr>
<tr>

<td align="center" colspan="6"><a href="#" onClick="showeditannounce()"><button>Edit</button></a></td>


</tr>

</table>

</div>
<br>
<div style="display:none;" id="editannounce" class="update">
 
 <?php include("edit_announce.php"); ?>
 <div class="instructions">
 <b>Instructions:</b>
 <p>1. Use <b>&lt;br&gt;&lt;br&gt;</b> tags to separate one announcement from another.</p>
 <p>2. Use can also use other HTML tags to make links, change fonts etc. in the announcements and CSS to design it.</p>
</div>
</div>
<script type="text/javascript">
function showeditannounce(){
	document.getElementById('viewannounce').style.display="none";
	document.getElementById('editannounce').style.display="block";

}
</script>
</center><?php
            	}
            	if ($item == "notifications") {
            		?>
            		<?php include("notifications.php"); ?>
            		 <?php
            		 
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
            		 <?php
            		 if($item == "" && $search_menu == ""){
            			?>

<center><h1>Welcome, Guest</h1>
<p><h3>This is your admin panel, where you can manage your website, files and content.</h3></p>
 </center>           			
	
<?php } ?>
            </div>
            
        </div>
</section>
</section>
<footer id="footer"><center><p>Designed with love by: <a href="http://rahulkushwaha.in">Rahul Kushwaha</a></p></center></footer>
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