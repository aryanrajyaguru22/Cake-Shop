<?php
session_start();
include_once'ADMIN PANEL/connection.php';


if (isset($_REQUEST['sub']))
{
  $email=$_POST['email'];
  $_SESSION['email']=$email;


  $log=mysqli_query($conn,"select * from user_register where email='$email'");
  $row=mysqli_fetch_array($log);
  $count=mysqli_num_rows($log);


  if($count==1)
  {
    header("location:email.php");
  }
  else
  {
   $danger="Your E-mail ID Incorrect";
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
    <link rel="stylesheet" href="css1/style.css">
<script> 
    function validateform()
{  
    var email=document.myform.email.value;  
      
  
    if (name==null || email=="")
    {  
            alert("Please Enter Your E-mail");  
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
                        <h2 class="form-title">Verify E-mail</h2>
                        <form method="post" action="forgotpassword1.php" class="register-form" onsubmit="return validateform()" name="myform" id="login-form">
                            
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-comment-text"></i></label>
                                <input type="email" name="email" id="email" placeholder="Enter E-mail"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="sub" id="signin" class="form-submit" value="Send OTP"/>
                            </div>
                            
                        </form>
                        
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