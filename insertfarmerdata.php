<?php

 include 'farmer_data_entry.html';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) 
{
die('Could not connect: ' . mysql_error());
}
else
{
	echo('connected');
}

if(isset($_POST['submit'])) 
{

$name = $_POST['name'];
$email = $_POST['emp_address'];

}

echo($name);


?>