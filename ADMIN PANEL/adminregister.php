
<?php
include_once'connection.php';

if(isset($_REQUEST['sub']))
{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $file=$_FILES['file-input']['name'];

        //$fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    
        $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    // Get image file extension
      $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
       //$file_extension=rand(100,10000)."-".$_FILES['file-input']['name'];
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            $danger= "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            $danger= "Upload valiid images. Only PNG and JPEG are allowed."
        );
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            $danger= "Image size exceeds 2MB"
        );
    }    // Validate image file dimension
     else {
        $target = "image/";

        if (move_uploaded_file($_FILES['file-input']['tmp_name'], $target.$file))
        {
            $response = array(
                "type" => "success",
               //$success= "Image uploaded successfully."
            );

        $sql=mysqli_query($conn,"select * from admin_register where name='$name'");

        if(mysqli_num_rows($sql)>0)
        {
             $danger= "Username Already Exists";
        } 
        else{    

        $insert=mysqli_query($conn,"insert into admin_register (name,email,pass,image) values ('$name','$email','$pass','$file')");

        if($insert)
        {
            header("location:login.php");
        }
        else
        {
            $danger= "not inserted record";
        }
    }
}
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
    var email=document.myform.email.value;
    var password=document.myform.pass.value;  
  
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
            alert("Please Enter Your Password");  
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
                        <h2 class="form-title">Sign up</h2>
                              

                        <form method="POST" class="register-form" onsubmit="return validateform()" name="myform" id="register-form" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="tFile"><i class="zmdi zmdi-upload"></i></label>
                                <input type="file" name="file-input" id="exampleInputFile">  
                            </div>
                              
                           <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>-->
                            <div class="form-group form-button">
                                <input type="submit" name="sub" id="signup" class="form-submit" value="Register"/>
                            </div>

                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/1.png" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>