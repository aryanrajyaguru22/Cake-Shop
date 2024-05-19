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

$sel=mysqli_query($conn,"select * from user_register where u_id=$id");

$row=mysqli_fetch_array($sel);

?>


<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<h3>Register page</h3>
<form method="post" action="userupdate.php">

ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="u_id" value="<?php echo $row['u_id']?>"><br><br>
Name:&nbsp;&nbsp;<input type="text" name="name" value="<?php echo $row['name']?>"><br><br>
E-Mail:&nbsp;&nbsp;<input type="email" name="email" value="<?php echo $row['email']?>"><br><br>
Pass:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="pass"value="<?php echo $row['pass']?>"><br><br>


<input type="submit" name="sub" value="UPDATE">

</form>
</body>
</html>




<?php
include_once'connection.php';

if (isset($_REQUEST['sub']))
{
		$id=$_POST['u_id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];

		$up=mysqli_query($conn,"update user_register set name='$name',email='$email',pass='$pass'
		where u_id=$id");

		if($up)
		{
			header("location:userview.php");
		}
		else
		{
			echo"Record not updated...";	
		}
}
?>