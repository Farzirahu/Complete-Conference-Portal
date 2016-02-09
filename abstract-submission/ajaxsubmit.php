<?php
session_start();
 $uid = $_SESSION["user_login"];
if($_POST)
{
	//$to_email   	= "kushwaharesonance@gmail.com"; //Recipient email, Replace with own email here
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		
		$output = json_encode(array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		));
		die($output); //exit script outputting json data
    } 
	
	//Sanitize input data using PHP filter_var().
	
	
	$user_name		= $_POST["user_name"];
	$sub_type		= $_POST["user_subtype"];
	$designation		= $_POST["user_designation"];
	$department		= $_POST["user_department"];
	$institute		= $_POST["user_institute"];
	$city		= $_POST["user_city"];
	$state		= $_POST["user_state"];
	$country		= $_POST["user_country"];
	
	$zip	= $_POST["user_zip"];
	
	$presenting		= $_POST["user_presenting"];
	$correspondence		= $_POST["user_correspondence"];
	
	//additional php validation
	/*if(strlen($user_name)<4){ // If length is less than 4 it will output JSON error.
		$output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
		die($output);
	}
	
	if(!filter_var($zip, FILTER_SANITIZE_NUMBER_FLOAT)){ //check for valid numbers in phone number field
		$output = json_encode(array('type'=>'error', 'text' => 'Enter only digits in ZIP code'));
		die($output);
	}
	/*if(strlen($subject)<3){ //check emtpy subject
		$output = json_encode(array('type'=>'error', 'text' => 'Subject is required'));
		die($output);
	}
	if(strlen($message)<3){ //check emtpy message
		$output = json_encode(array('type'=>'error', 'text' => 'Too short message! Please enter something.'));
		die($output);
	}*/
	
	//$connection = mysql_connect("localhost", "root", "toor"); // Establishing Connection with Server..
//$db = mysql_select_db("biosangam", $connection); // Selecting Database
	include("include/connection.php");
$query = mysql_query("insert into $sub_type (uid, name, designation, department, institute, city, state, country, zip, presenting, correspondence) values ('$uid', '$user_name', '$designation', '$department', '$institute', '$city', '$state', '$country', '$zip', '$presenting', '$correspondence')");


if(!$query)
	{
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		$output = json_encode(array('type'=>'error', 'text' => 'Unable to add! Please try after some time or contact admin.'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => 'Author '.$user_name .' added successfully<br><br><input type="button" id="display" value="Add more author" onClick="addInput(&quot;mydiv&quot;);">'));
		die($output);
	}
}
?>
