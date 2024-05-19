<?php
session_start();
if($_SESSION['admin'] =='')
{
  header("location:login.php");
}
?>

<?php
include_once'connection.php';



		$sid=$_GET['sid'];
		
		$del=mysqli_query($conn,"delete from slider where sid=$sid");

		if($del)
		{
			echo"Record delete successfully....";
			header("location:sliderview.php");
		}
		else
		{
			echo"Record not deleted...";
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
<form method="post" action=sliderdelete.php>

ID:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sid"><br><br>

<input type="submit" name="sub" value="delete">
</form>
</body>
</html>