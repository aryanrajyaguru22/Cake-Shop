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

$sel=mysqli_query($conn,"select * from comments where c_id=$id");

$row=mysqli_fetch_array($sel);

?>

<?php
include_once'connection.php';

if (isset($_REQUEST['sub']))
{
    $id=$_POST['c_id'];
    $name=$_POST['c_name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];

    $up=mysqli_query($conn,"update comments set c_name='$name',email='$email',comments='$comment' where c_id=$id");

    if($up)
    {
      header("location:commentview.php");
    }
    else
    {
      echo"Record not updated...";  
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
    var c_id=document.myform.c_id.value;
    var c_name=document.myform.c_name.value;
    var email=document.myform.email.value;
    var comment=document.myform.comment.value;
  

    if (name==null || c_id=="")
    {  
              alert("Please Enter Comment ID");  
              return false;  
    }
    else if (name==null || c_name=="")
    {  
            alert("Please Enter Customer Name");  
            return false;  
    }

   else if (name==null || email==/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myform.email.value))
    {  
            alert("Please Enter Your Email");  
            return false;  
    }
    else if (name==null || comment=="")
    {  
            alert("Please Enter Comment");  
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
              
            <h2><center>Comment Update</center></h2>


          </ol> 
                  
    </div>
    
            <div id="page-inner"> 
                      
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
                                           
                                            <input type="hidden" name="c_id" value="<?php echo $row['c_id']?>" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="cname">Customer Name</label>
                                            <input type="text" name="c_name" value="<?php echo $row['c_name']?>" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="Comment">Comment</label>
                                            <input type="text" name="comment" value="<?php echo $row['comments']?>" class="form-control" >
                                        </div>
                                        
                                        <button name="sub" class="btn btn-default"><i class=" fa fa-refresh "></i> Update</button>
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







