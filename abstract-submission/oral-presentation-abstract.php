<?php
session_start();
if(!isset($_SESSION["user_login"])){
                echo "<script>window.top.location.href = '../login';</script>";
              }
              else{
              	include("include/connection.php");
                $uid = $_SESSION["user_login"];
                $oralquery = mysql_query("SELECT * FROM oral_abstract WHERE uid='$uid' AND valid='yes'");
                while($row = mysql_fetch_array($query)){
                	$reg_id = $row['uid'];
			            $category = $row['category'];
			            $initials = $row['initials'];
			            $fname = $row['firstname'];
			            $mname = $row['middlename'];
			            $lname = $row['lastname'];

?>

<html>
<head>
<title>
Oral presentation abstract view | Biosangam 2016
</title>
<style type="text/css">
body{
  font-family: "Times New Roman", Times, serif !important;
    font-size:12px !important;

}
</style>
</head>
<body>


</body>
<html>
<?php } ?>