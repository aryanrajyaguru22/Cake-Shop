<?php
session_start();
if($_SESSION['admin']=='')
{
  header("location:login.php");
}

include_once'connection.php';

if(isset($_REQUEST['sub']))
{
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $que=$_POST['que'];    
        $ans=$_POST['ans'];

        $insert=mysqli_query($conn,"insert into faq (email,subject,que,ans) values ('$email','$subject','$que','$ans')");

        if($insert)
        {
            $success="insert Successfully...!!";
        }
        else
        {
            $danger="not inserted record";
        }
  }
?>
<?php
include_once'header.php';
?>

<div class="header"> 
          <br><br>

            <ol class="breadcrumb">
              
            <h2 style="text-align:left"><center>FAQ</center></h2>


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
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" class="form-control"  placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="que">Question</label>
                                            <input type="text" name="que" class="form-control" placeholder="Question">
                                        </div>
                                        <div class="form-group">
                                            <label for="ans">Answer</label>
                                            <input type="text" name="ans" class="form-control" placeholder="Answer">
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




