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





$name = $_POST['Name'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$ContactNo = $_POST['ContactNo'];
$LandArea = $_POST['LandArea'];
$LandLocation = $_POST['LandLocation'];
$PastRecord = $_POST['PastRecord'];
$Bio = $_POST['Bio'];



echo($name);
echo($Email);
echo($Address);
echo($ContactNo);
echo($LandArea);
echo($LandLocation);
echo($Bio);





$sql = "INSERT INTO farmer".
"(Name, Email, Address, ContactNo, LandArea, LandLocation, PastRecord, Bio )".
"VALUES ('$name','$Email','$Address','$ContactNo','$LandArea','$LandLocation','$PastRecord','$Bio')";


mysql_select_db('robokath');


$retval = mysql_query( $sql, $conn );

if(! $retval ) {
die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";










?>