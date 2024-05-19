<?php

	$conn=mysqli_connect("localhost","root","","cakeshop");
	if(!$conn)
	{
		echo "connection error...".mysql_error();
	}

?>