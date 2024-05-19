<?php
session_start();
if($_SESSION['admin'] =='')
{
  header("location:login.php");
}
?>

<?php
include_once'connection.php';



		$id=$_GET['id'];
		
		$del=mysqli_query($conn,"delete from product where p_id=$id");

		if($del)
		{
			echo"Record delete successfully....";
			header("location:productview.php");
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
<form method="post" action=productdelete.php>

ID:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id"><br><br>

<input type="submit" name="sub" value="delete">
</form>
</body>
</html>