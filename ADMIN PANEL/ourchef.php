<?php
session_start();
if($_SESSION['admin']=='')
{
  header("location:login.php");
}

include_once'connection.php';

if(isset($_REQUEST['sub']))
{
        $ch_name=$_POST['ch_name'];
        $description=$_POST['description'];    
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
                $success= "Image uploaded successfully."
            );

        $insert=mysqli_query($conn,"insert into ourchef (ch_name,description,image) values ('$ch_name','$description','$file')");

        if($insert)
        {
            $success="insert Successfully...!!";
        }
        else
        {
            $danger="not inserted record";
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
    var ch_name=document.myform.ch_name.value;
    var description=document.myform.description.value;
  
    if (name==null || ch_name=="")
    {  
            alert("Please Enter Chef Name");  
            return false;  
    }

   else if (name==null || description=="")
    {  
            alert("Please Enter Description");  
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
              
            <h2><center>Our Chef</center></h2>


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
                      
                    <div class="row">
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
                                    <form method="post" onsubmit="return validateform()" name="myform" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="ch_name">Chef Name</label>
                                            <input type="text" name="ch_name" class="form-control"  placeholder="Chef Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" class="form-control" placeholder="Description">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" name="file-input" id="exampleInputFile">
                                            
                                        </div>
                                        
                                        <button type="submit" name="sub" class="btn btn-default">Submit</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    
                    
                    
               
      
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



