<?php
$conn=mysqli_connect("localhost","root","","cakeshop");
if(!$conn)
{
	echo"connection fail...".mysqli_error();
}
?>