<?php
session_start();
if($_SESSION['admin']=='')
{
  header("location:login.php");
}
include('header.php');
?>

<?php
include_once'connection.php';

$sql=mysqli_query($conn,"select * from registration");
?>


            
                
        <div class="row">
            
        </div><!--/.row-->
            
        
                <!-- /. ROW  -->

       
                
                
                
                <div class="row">
                    
                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Responsive Table
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        
                                    <tr>
                                      <th>NAME</th>
                                      <th>EMAIL</th>
                                      <th>PASSWORD</th>
                                      <th>CONFIRM PASSWORD</th>
                                      <th>IMAGE</th>
                                      <th bgcolor="green"><font color="#fff">EDIT</font></th>
                                      <th bgcolor="red"><font color="#fff">DELETE</font></th>
                                      
                                      
                                    </tr>
                            

                                     <?php

                                      while ($row=mysqli_fetch_array($sql)) 
                                      {
                                      
                                      ?>

                                      <tr>
                                        <td><?php echo $row["name"] ?> </td>
                                        <td><?php echo $row["email"] ?> </td>
                                        <td><?php echo $row["pass"] ?> </td>
                                        <td><?php echo $row["re_pass"] ?> </td>
                                        <td><img src="image/<?php echo $row["filename"] ?>" height=100 width=100></td>

                                        <td><a href="update.php ? id=<?php echo $row['id'];?>" style="color:green">Update</a></td>
                                        <td><a href="delete.php ? id=<?php echo $row['id'];?>" style="color:red">Delete</a></td>
                                    </tr>

                                      <?php
                                      }
                                      ?>


                                    </table>
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

</body>

</html>