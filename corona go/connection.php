<?php
$username='root';
$password="";
$database="bbms";
$server='localhost';
$conn = mysqli_connect($server,$username,$password,$database);
if($conn)
{
	echo "sucess";
}
else
{
	echo "fail";
}
// Check connection
?>