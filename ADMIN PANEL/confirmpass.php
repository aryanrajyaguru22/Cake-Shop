<?php
session_start();
include_once'connection.php';

//$otp=$_SESSION['otp'];
$email=$_SESSION['email'];
if (isset($_REQUEST['sub']))
{

 $new=$_POST['newpass'];
 $confirm=$_POST['conpass'];


  if($new == $confirm)
  {
    $sql=mysqli_query($conn,"update admin_register set pass='$new' where email='$email'" );
    if($sql)
    {
    header("location:logout.php");
}
  }
  else
  {
   $danger="Your Password Not Match";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<script> 
    function validateform()
{  
    var newpass=document.myform.newpass.value;  
    var conpass=document.myform.conpass.value;  
  
    if (name==null || newpass=="")
    {  
            alert("Please Enter Your New Password");  
            return false;  
    }
    else if(name==null || newpass.length<8)
    {  
            alert("Password Must Be Atleast 8 Characters Long.");  
            return false;  
    }  
    else if(name==null || newpass.length>12)
    {  
            alert("Password length between 8 and 12  Characters.");  
            return false;  
    }  
    else if(name==null || conpass=="")
    {  
            alert("Please Enter Your Confirm Password.");  
            return false;  
    }
    else if(name==null || conpass.length<8)
    {  
            alert("Password Must Be Atleast 8 Characters Long.");  
            return false;  
    }  
    else if(name==null || conpass.length>12)
    {  
            alert("Password length between 8 and 12  Characters.");  
            return false;  
    }  
     
}
</script>

</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.png" alt="sign up image"></figure>
                        
                    </div>

                    <div class="signin-form">
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
                        <h2 class="form-title">Reset Password</h2>
                        <form method="post" action="confirmpass.php" class="register-form" onsubmit="return validateform()" name="myform" id="login-form" action="login.php">
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="Password" name="newpass" id="newpass" placeholder="Enter New Password"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="Password" name="conpass" id="oldpass" placeholder="Enter Confirm Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="sub" id="signin" class="form-submit" value="Submit"/>
                            </div>
                            
                        </form>
                        <div class="social-login">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
             .form-submit
             {
                width :100%;
             }

        </style>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>