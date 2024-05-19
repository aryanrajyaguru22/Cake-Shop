<?php
include 'ADMIN PANEL/connection.php';

session_start();
$db_pass=$_SESSION['user']['pass'];
$uname=$_SESSION['user']['u_id'];

if(isset($_POST['sub']))
{
  $old=$_POST['old'];
  $new=$_POST['new'];
  $confirm=$_POST['confirm'];


if($db_pass == $old)
{
  if($old != $new)
  {
    if($new == $confirm)
    {
      $sql=mysqli_query($conn,"update user_register set pass='$new' where u_id='$uname'");

      header("location:login.php");
    }
    else
    {
      $danger= "New And Confirm Password Not Match..!!";
    }
  }
    else
    {
      $danger= "Old And New Password Are Same..!!";
    }
  }
    else
    {
       $danger= "Old Password Not Match..!!";
    }
  }


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button1 {
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<style>
body {
  background-image: url('ADMIN PANEL/image/7.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


</style>
<script> 
    function validateform()
{  
    var old=document.myform.old.value;
    var new1=document.myform.new.value;
    var confirm=document.myform.confirm.value;  
  
    if (name==null || old=="")
    {  
            alert("Please Enter Your Current Password");  
            return false;  
    }

   else if(name==null || new1=="")
    {  
            alert("Please Enter Your New Password");  
            return false;  
    }

    else if(name==null || new1.length<8)
    {  
            alert("Password Must Be Atleast 8 Characters Long.");  
            return false;  
    }
    else if(name==null || new1.length>12)
    {  
            alert("Password length between 8 and 12  Characters .");  
            return false;  
    }

    else if(name==null || confirm=="")
    {  
            alert("Please Enter Your Confirm Password");  
            return false;  
    }    

    else if(name==null || confirm.length<8)
    {  
            alert("Password Must Be Atleast 8 Characters Long.");  
            return false;  
    }  
    else if(name==null || confirm.length>12)
    {  
            alert("Password length between 8 and 12  Characters .");  
            return false;  
    } 
}
</script>
</head>
<body>
      <?php
if(isset($danger))
{
  echo '<div class="p-3 mb-2 bg-danger text-black">';
  echo $danger;
  echo '</div>';
?>
<?php }
?>

 <center><h2 style="color:white">Change Password</h2></center>



<form action="changepassword.php" method="post" onsubmit="return validateform()" name="myform">
  <center>
  <div class="container">

   <!-- <label for="uname"><b style="color:white">Current Password :</b></label><br>-->
   <b style="color:white"> Current Password </b><input type="password" placeholder="Enter Current Password" name="old"><br><br>

   <!-- <label for="psw"><b style="color:white">New Password :</b></label><br>-->
    <b style="color:white">New Password </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Enter New Password" name="new"><br><br>

    <!-- <label for="psw"><b style="color:white">Confirm Password :</b></label><br>-->
    <b style="color:white">Confirm Password </b><input type="password" placeholder="Enter Confirm Password" name="confirm"><br><br>
        
    <button type="submit" name="sub">SUBMIT</button>
    <button1 type="submit" name="cancel">CANCEL</button1>
 
  </div>

  </center>

</form>


</body>

</html>

