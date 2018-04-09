<?php
$localhost = "localhost";
$dbuser = "root";
$password = "";
$dbname = "projectdb";
$conn = mysqli_connect($localhost,$dbuser,$password,$dbname);
if(!$conn)
{
	echo "Error in connection<br>" . mysqli_connect_error();
}
else
{
	echo "Database is connected succesfully.<br>";
}
?>