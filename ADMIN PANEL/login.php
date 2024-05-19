<?php
session_start();
include_once'connection.php';


if (isset($_REQUEST['sub']))
{
  $name=$_POST['name'];
  $pass=$_POST['pass'];


  $log=mysqli_query($conn,"select * from admin_register where name='$name'and pass='$pass'");
  $row=mysqli_fetch_array($log);
  $count=mysqli_num_rows($log);


  if($count==1)
  {
    $_SESSION['admin']=$row;
    header("location:index.php");
  }
  else
  {
   $danger="Username and password incorrect";
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
    var name=document.myform.name.value;  
    var password=document.myform.pass.value;  
  
    if (name==null || name=="")
    {  
            alert("Please Enter Your Name");  
            return false;  
    }

    else if(name==null || password=="")
    {  
            alert("Please Enter Your Password.");  
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
                        <a href="adminregister.php" class="signup-image-link">Create an account</a>
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
                        <h2 class="form-title">Log In</h2>
                        <form method="post" class="register-form" onsubmit="return validateform()" name="myform" id="login-form" action="login.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <!--<div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>-->
                            <div class="form-group form-button">
                               <a class="topnav-right" href="forgotpassword.php">Forgot Password?</a></button>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="sub" id="signin" class="form-submit" value="Log in"/>
                            </div>
                            
                        </form>
                       <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="https://www.facebook.com/"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://twitter.com/login?lang=en-gb"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://www.dropbox.com/login"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>-->
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
            .topnav-right
             {
                float: right;
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