<?php
session_start();
 $uid = $_SESSION["user_login"];
  include("include/connection.php");
if (isset($_POST['submit'])) {
  $abstitle = mysql_real_escape_string($_POST['abstitle']);
  $abstract = mysql_real_escape_string($_POST['abstract']);
  $subtheme = mysql_real_escape_string($_POST['subtheme']);
  $abstract_id = mysql_real_escape_string($_POST['abstract_id']);
  $keywords='';
  foreach($_POST['keys'] as $val){
   $keywords.= $val.", ";
}
  $updatequery = mysql_query("UPDATE poster_abstract set title='$abstitle', abstract='$abstract', keywords='$keywords', valid='yes', subtheme='$subtheme', abstract_id='$abstract_id' WHERE uid='$uid'");
  if ($updatequery) {
    $updatequery = mysql_query("UPDATE registrations set poster_submission='submitted' WHERE uid='$uid'");
    echo"<script>alert('submitted successfully');</script>";
    echo "<script>window.top.location.href = 'abstract-dashboard';</script>";
  }
  else{
    echo"<script>alert('An error occurred during submission. please try later or contact admin.');</script>";
    echo "<script>window.top.location.href = 'abstract-dashboard';</script>";
  }
}


?>