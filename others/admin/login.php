<?php
session_start();
error_reporting(0);
session_destroy();
if (isset($_SESSION["admin_login"])) {
	echo "<script>window.top.location.href = 'index';</script>";
}
else{
	//do nothing
}
?>

<html>
<head>
<title>
Admin Login Area | Biosangam 2016
</title>
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
<style type="text/css">
body{
	font: 15px/23px 'Open Sans', Segoe UI, Arial, sans-serif;
	color:#ffffff;
	font-size: 20px;
	font-weight: 400;
	background:url("../../img/s4.jpg");
	background-size: cover;
	background-attachment: fixed;
}
#login{
	padding: 10px;
	background: rgba(0, 0, 0, 0.50);
	width: 25%;
	margin: 15% auto;

}
fieldset{
	
	padding: 20px;
}
input{
	border: none;
	color: #ffffff;
	background: rgba(0, 0, 0, 0.70);
	font-size: 18px;
	width: 100%;
	height: 5%;
	display: block;
}
input[type="submit"]{
	font-size: 20px;
	width: 30%;
	margin: 0 auto;
}

</style>
</head>
<body>
	<div id="login">
		<form action="" method="POST">
			<fieldset>
				<legend><h3>Admin Login</h3></legend>
			<input type="text" name="username" placeholder="enter your username here..." autocomplete="off" required><br>
			<input type="password" name="password" placeholder="enter your password here..." autocomplete="off" required><br>
			<input type="submit" name="submit" value="Login">
			</fieldset>
		</form>
	</div>
</body>
</html>
<?php
include("include/connection.php");
if (isset($_POST['submit'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$password = sha1($password);
	$query = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password' ");
	$row = mysql_fetch_assoc($query);
	$count = mysql_num_rows($query);
	date_default_timezone_set('Asia/Calcutta');
$logintime = date('Y/m/d H:i:s');
	if ($count == 1) {
		mysql_query("UPDATE admin SET lastlogin='$logintime' WHERE username='$username'");
		session_start();
    $_SESSION["admin_login"] = $username;
		echo'<script>alert("successfully logged in !!!")</script>';
		echo "<script>window.top.location.href = 'index';</script>";
	}
	else{
		echo'<script>alert("username or password is incorrect !!!")</script>';
	}
}

?>