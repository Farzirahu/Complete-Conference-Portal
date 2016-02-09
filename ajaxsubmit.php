
<?php
$connection = mysql_connect("localhost", "root", "toor"); // Establishing Connection with Server..
$db = mysql_select_db("biosangam", $connection); // Selecting Database
//Fetching Values from URL
$name2=$_POST['name1'];
$designation2=$_POST['designation1'];
$department2=$_POST['department1'];
$institute2=$_POST['institute1'];
$city2=$_POST['city1'];
$state2=$_POST['state1'];
$country2=$_POST['country1'];
$zip2=$_POST['zip1'];
$presenting2=$_POST['presenting1'];
$correspondence2=$_POST['correspondence1'];
//Insert query
$query = mysql_query("insert into abstract(uid, name, designation, department, institute, city, state, country, zip, presenting, correspondence) values ('rahul',$name2', '$designation2', '$department2','$institute2','$city2','$state2','$country2','$zip2','$presenting2','$correspondence2')");
if ($query) {
	echo "Author Added Succesfully";
}
else{
echo "error occured here";
}

mysql_close($connection); // Connection Closed
?>