<?php
include_once'connection.php';

session_start();
if($_SESSION['admin']=='')
{
  header("location:logout.php");
}
$email=$_SESSION['admin']['email'];
$sql=mysqli_query($conn,"select * from admin_register where email='$email'");
$row=mysqli_fetch_array($sql);

include('header.php');
?>

<?php

if(isset($_REQUEST['sub']))
{
        $id=$_POST['id'];
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
        

        $up=mysqli_query($conn,"update admin_register set name='$name', email='$email', pass='$pass',image='$file' where id=$id");
 
        if($up)
        {    
          $success="Record uploaded successfully";
        }
        else
        {
           $danger="failed to upload Record";
        }
}
}
}

?>

<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/form.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 12:06:53 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Bootstrap Admin Theme : Master - WebThemez</title>
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
  
    <link href="assets/css/select2.min.css" rel="stylesheet" >
  <link href="assets/css/checkbox3.min.css" rel="stylesheet" >
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


   <script> 
    function validateform()
{  
    var id=document.myform.id.value;
    var name=document.myform.name.value;
    var email=document.myform.email.value;
    var password=document.myform.pass.value;  
  

   if (name==null || id=="")
    {  
            alert("Please Enter Your ID");  
            return false;  
    }
    else if (name==null || name=="")
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
            alert("Password length between 8 and 12  Characters.");  
            return false;  
    }  
}
</script>
</head>
<body>

<?php
include_once'header.php';
?>
     <div class="header"> 
          <br><br>

            <ol class="breadcrumb">
              
            <h2 style="text-align:center;">Profile</h2>


          </ol> 
                  
    </div>
    
            <div id="page-inner"> 
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
                      
                              <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
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
                                    
                                </div>
                                <div class="panel-body">
                                    <form method="post" onsubmit="return validateform()" name="myform"  enctype="multipart/form-data">
                                       <div class="form-group">
                                           
                                            <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Name</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">Password</label>
                                            <input type="password" name="pass" class="form-control" value="<?php echo $row['pass']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="tFile">Image</label>
                                             <input type="file" name="file-input" id="exampleInputFile">  
                                         </div>
                                         <div>
                                           "<?php echo $row['image']?>"
                                         </div><br>

                                        
                                        <button type="submit" name="sub" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <style type="text/css">

            .alert-success{
                color:#fff;
                background-color:#56c827;
            }
            .alert-danger {
                color: #fff;
                background-color:#ec1e19;
            }

        </style>
                    
                    
               
      
      </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
  <script src="assets/js/select2.full.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $(".selectbox").select2();
  });
  </script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
  
    
   
</body>

<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 12:06:55 GMT -->
</html>