<?php
include_once('ADMIN PANEL/connection.php');
session_start();
if($_SESSION['user']=='')
{
  header("location:logout.php");
}
$email=$_SESSION['user']['email'];
$sql=mysqli_query($conn,"select * from user_register where email='$email'");
$row=mysqli_fetch_array($sql);
?>

<?php

if(isset($_REQUEST['sub']))
{
        $uid=$_POST['u_id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];    
        $phone=$_POST['phone'];
        $address=$_POST['address'];


        $up=mysqli_query($conn,"update user_register set name='$name',email='$email',pass='$pass',phone='$phone',address='$address' where u_id=$uid ");

        if($up)
        {
            $success="Record updated...";
        }
        else
        {
            $danger="Record not updated...";    
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
    var name=document.myform.name.value;
    var email=document.myform.email.value;
    var password=document.myform.pass.value; 
    var phone=document.myform.phone.value;
    var address=document.myform.address.value; 
  
    if (name==null || name=="")
    {  
            alert("Please Enter Your Name");  
            return false;  
    }

   else if (name==null || email==/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myform.email.value))
    {  
            alert("Please Enter Your Email");  
            return false;  
    }
    else if(name==null || password=="")
    {  
            alert("Please Enter Your Password.");  
            return false;  
    }  

    else if(name==null || password.length<8)
    {  
            alert("Password Must Be Atleast 8 Characters Long.");  
            return false;  
    } 
    else if(name==null || password.length>12)
    {  
            alert("Password length between 8 and 12  Characters .");  
            return false;  
    }
    else if(name==null || phone=="")
    {  
            alert("Please Enter Your phone number.");  
            return false;  
    }  
    else if(name==null || phone.length<10)
    {  
            alert("Phone number Must Be Atleast 10 Characters Long.");  
            return false;  
    } 
    else if(name==null || phone.length>10)
    {  
            alert("Phone number Must Be Atleast 10 Characters Long.");  
            return false;  
    } 

    else if(name==null || address=="")
    {  
            alert("Please Enter Your Address.");  
            return false;  
    }  
}
</script>

</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
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
                        <h2 class="form-title">Profile</h2>
                        <form method="POST" class="register-form"  id="register-form" onsubmit="return validateform()" name="myform" >
                            <div class="form-group">
                                <label for="id"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="hidden" name="u_id" id="id" value="<?php echo $row['u_id']; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" value="<?php echo $row['pass']; ?>"/>
                            </div>
                             <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>"/>
                            </div>
                             <div class="form-group">
                                <label for="address"></label>
                                <input type="text" name="address" id="address" style="width: 350px; height:100px; " value="<?php echo $row['address']; ?>"/>
                            </div>


                            <!--<div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>-->
                            <div class="form-group form-button">
                                <input type="submit" name="sub" id="signup" class="form-submit" value="UPDATE"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/1.png" alt="sing up image"></figure>
                        
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

    <!-- JS -->
    <script src="ADMIN PANEL/vendor/jquery/jquery.min.js"></script>
    <script src="ADMIN PANEL/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>