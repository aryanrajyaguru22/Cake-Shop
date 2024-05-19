<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>BRILLIANT Free Bootstrap Admin Template - WebThemez</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/fontawesome.min.css"> 
    
</head>

<body>
    
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong><i class="fas fa-birthday-cake"></i>&nbsp; CAKE SHOP</strong></a>
                
        
            </div>
            

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <?php if(!empty($_SESSION['admin'])){ ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i><font color="black">Hello, <?php echo $_SESSION['admin']['name'];?></font><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
                        </li>
                           <li><a href="changepassword.php"><i class="fas fa-user-cog"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                    <?php } ?>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                
           
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                      <li>

                        
                                <a href="adminview.php"><i class="fa fa-table"></i>Admin</a>
                            
                    </li>

                    <li>
                        
                                <a href="userview.php"><i class="fa fa-table"></i>User</a>
                            
                    </li>

                     <li>
                        
                                <a href="sliderview.php"><i class="fa fa-table"></i>Slider</a>
                            
                    </li>


                     <li>
                        
                                <a href="commentview.php"><i class="fa fa-table"></i>Comment</a>
                            
                    </li>

                    <!--<li>
                        
                                <a href="productview.php"><i class="fa fa-table"></i>Product</a>
                            
                    </li>-->

                     <li>
                        
                                <a href="categoryview.php"><i class="fa fa-table"></i>Category</a>
                            
                    </li>

                     <li>
                        
                                <a href="subcategoryview.php"><i class="fa fa-table"></i>SubCategory</a>
                            
                    </li>

                    <li>
                        
                                <a href="contactusview.php"><i class="fa fa-table"></i>ContactUs</a>
                            
                    </li>

                      <li>
                        
                                <a href="ourchefview.php"><i class="fa fa-table"></i>OurChef</a>
                            
                    </li>

                        <li>
                        
                                <a href="menuview.php"><i class="fa fa-table"></i>Menu</a>
                            
                    </li>

                     <li>
                        
                                <a href="faqview.php"><i class="fa fa-table"></i>FAQ</a>
                            
                    </li>

                         <li>
                        
                                <a href="servicesview.php"><i class="fa fa-table"></i>Services</a>
                            
                    </li>

                     <li>
                        
                                <a href="cartview.php"><i class="fa fa-table"></i>Cart</a>
                            
                    </li>

                    <li>
                        
                                <a href="orderview.php"><i class="fa fa-table"></i>Order</a>
                            
                    </li>

                    <li>
                        
                                <a href="paymentview.php"><i class="fa fa-table"></i>Payment</a>
                            
                    </li>


                                </ul>

                            </li>
                        </ul>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
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







      
        <div id="page-wrapper">
          <div class="header"> 
                         
                                    
        </div>