<?php
include 'connection.php';

session_start();
$db_pass=$_SESSION['admin']['pass'];
$uname=$_SESSION['admin']['id'];

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
      $sql=mysqli_query($conn,"update admin_register set pass='$new' where id='$uname'");
      header("location:login.php");
    }
    else
    {
      $danger= "New And Confirm Password Not Match..!!";
    }
  }
    else
    {
      $danger= "Current And New Password Are Same..!!";
    }
  }
    else
    {
       $danger= "Current Password Not Match..!!";
    }
  }


?>
<?php
include_once'header.php';
?>

<!DOCTYPE html>
<html>
<head>

   <meta name="viewport" content="width=device-width, initial-scale=1" >
                                          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                          <style>
                                          body {
                                            font-family: Arial;
                                          }

                                          * {
                                            box-sizing: border-box;
                                          }

                                          form.example input[type=text] {
                                            padding: 10px;
                                            font-size: 17px;
                                            border: 1px solid grey;
                                            float: left;
                                            width: 80%;
                                            background: #f1f1f1;
                                          }

                                          form.example button {
                                            float: left;
                                            width: 20%;
                                            padding: 10px;
                                            background: #f36a5a;
                                            color: white;
                                            font-size: 17px;
                                            border: 1px solid grey;
                                            border-left: none;
                                            cursor: pointer;
                                          }

                                          form.example button:hover {
                                            background: #0b7dda;
                                          }

                                          form.example::after {
                                            content: "";
                                            clear: both;
                                            display: table;
                                          }
                                          </style>
                                          </head>
                                          <body>
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
  background-color: #4CAF50;
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
  
 <br> 
<?php
if(isset($success))
{
?>
<div class="alert alert-success"><?php echo $success; ?> </div>
<?php } ?>

<?php
if(isset($danger))
{
?>
<div class="alert alert-danger"><?php echo $danger; ?></div>
<?php } ?>

<br>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Change Password</h2><br><br>

<form action="changepassword.php" method="post" onsubmit="return validateform()" name="myform">
  

  <div class="container">

    <label for="uname"><b>Current Password :</b></label><br>
    <input type="password" placeholder="Enter Current Password" name="old"><br><br>

    <label for="psw"><b>New Password :</b></label><br>
    <input type="password" placeholder="Enter New Password" name="new"><br><br>

     <label for="psw"><b>Confirm Password :</b></label><br>
    <input type="password" placeholder="Enter Confirm Password" name="confirm"><br><br>
        
    <button type="submit" name="sub">SUBMIT</button>
    <button1 type="submit" name="cancel">CANCEL</button1>
 
  </div>

  
  <style type="text/css">
            .alert{
                padding:8px;
                border-radius: 8px;
            }

            .alert-success{
                color:#fff;
                background-color:#56c827;
            }
            .alert-danger {
                color: #fff;
                background-color:#ec1e19;
            }

        </style>
</form>
</body>
</html>

