<?php
session_start();
if($_SESSION['admin'] =='')
{
  header("location:login.php");
}
include('header.php');
?>

<?php
include_once'connection.php';

if(isset($_POST['submit']))
{
        $check=$_POST['allcheck'];

        for($i=0 ; $i<sizeof($check) ; $i++)
        {
            $a1=$check[$i];
            $del=mysqli_query($conn,"delete from user_register where u_id=$a1"); 
        }
}
?>

<?php
include_once'connection.php';

$sql=mysqli_query($conn,"select * from user_register");

if(isset($_POST['submit_search']))
{
  $u_name=$_POST['search'];
  $sel="select * from user_register where name LIKE '%$u_name%' OR email LIKE '%$u_name%' OR pass LIKE '%$u_name%'";
}
else
{
  $sel="select * from user_register";
}


if(isset($_GET['page']))
{
  $page=$_GET['page'];
}
else
{
  $page=0;
}
$per_page=5;
$page=$per_page * $page;
$sel=mysqli_query($conn,"select * from user_register");
$num=mysqli_num_rows($sel);
$num1=ceil($num/$per_page);

$sql=mysqli_query($conn,"select * from user_register");

if(isset($_POST['submit_search']))
{
  $u_name=$_POST['search'];
  $sql=mysqli_query($conn,"select * from user_register where name LIKE '%$u_name%' OR email LIKE '%$u_name%' OR pass LIKE '%$u_name%' OR phone LIKE '%$u_name%' OR address LIKE '%$u_name%' limit $page,$per_page");

}
else
{
  $sql=mysqli_query($conn,"select * from user_register limit $page,$per_page");
}
?>


        <div class="header"> 
                         
                <h1 class="page-header"><center>User Page</center> </h1>
                              
        </div>    
                
               
        <div class="row">
            
        </div><!--/.row-->
            
        
                <!-- /. ROW  -->

       
                
                
                
                 <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                
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

                                          <form class="example" method="post" style="margin:auto;max-width:300px" >
                                            <input type="text" placeholder="Search.." name="search">
                                            <button type="submit" name="submit_search"><i class="fa fa-search"></i></button>
                                          </form>

                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                  <form method="post">
                                    <table class="table table-striped table-bordered table-hover text-center">
                                        
                                    <tr class="info">
                                      <th class="text-center"><input type="checkbox" name="check" id="checkAll">&nbsp;<input type="submit"  name="submit" class="btn btn-danger" value="All Delete">
                                      <th class="text-center">NAME</th>
                                      <th class="text-center">EMAIL</th>
                                      <th class="text-center">PASSWORD</th>
                                      <th class="text-center">PHONE</th>
                                      <th class="text-center">ADDRESS</th>
                                      <th class="text-center">IMAGE</th>  
                                
                                     <th colspan="2" class="text-center"><font>ACTION</font></th>
                                      
                                      
                                    </tr>
                            

                                     <?php

                                      while ($row=mysqli_fetch_array($sql)) 
                                      {
                                      
                                      ?>

                                      <tr class="warning">
                                        <td><input type="checkbox" name="allcheck[]" value="<?php echo $row["u_id"] ?>"> </td>
                                        <td><?php echo $row["name"] ?> </td>
                                        <td><?php echo $row["email"] ?> </td>
                                        <td><?php echo $row["pass"] ?> </td>
                                        <td><?php echo $row["phone"] ?> </td>
                                        <td><?php echo $row["address"] ?> </td>
                                        <td><img src="image/<?php echo $row["image"] ?>" height=100 width=100></td>
                                        <td><a href="userdelete.php ? id=<?php echo $row['u_id'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>

                                    </tr>

                                      <?php
                                      }
                                      ?>
                                      <tr align="center">
                                        <td colspan="8">
                                          <?php for($i=0 ; $i<$num1 ; $i++) { ?>
                                            <a href="userview.php?page=<?php echo $i; ?>" value="<?php echo $i; ?>">  <?php echo $i+1; ?></a>
                                          <?php } ?>

                                        </td>
                                      </tr>

                                    </table>
                                  </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
                
        
                
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    
    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>
    
     <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 
      <script type="text/javascript" src="fonts/font-awesome/js/fontawesome.min.js"></script>

</body>

</html>
<script type="text/javascript">
  $("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
</script>