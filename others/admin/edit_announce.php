<?php
include("include/connection.php");


$edit_query = "select * from admin";


$run_edit = mysql_query($edit_query);


$edit_row = mysql_fetch_assoc($run_edit);

$edit_announce = $edit_row['announcements'];


?>

<form method="post" action="" enctype="multipart/form-data">
<table border>


<tr>
<td align="center"  colspan="6"><h1>Edit the announcements here</h1></td>
</tr>
<tr>


<td align="right">Content:</td>
<td><textarea name="content" cols="50" rows="16" ><?php echo $edit_announce; ?></textarea></td>
</tr>
<tr>
<td align="center" colspan="6"><input type="submit" name="submit" value="Update Now"></td>
</tr>
</table>
</form>


<?php
if(isset($_POST['submit'])){


 $post_content1=$_POST['content'];
if(
    $post_content1==''){
	echo "<script>alert('any of the the fields is empty')</script>";
	echo "<script>window.open('index?category=announcements','_self')</script>";
	
	}
	else{
	
$update_query="update admin  set  announcements='$post_content1'";
	
	if(mysql_query($update_query)){
	echo "<script>alert('Announcements has been updated')</script>";
	echo "<script>window.open('index?category=announcements','_self')</script>";
	
	
	}}
	}
	
?>
