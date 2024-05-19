<?php include('ADMIN PANEL/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="ADMIN PANEL/fonts/font-awesome/css/all.min.css">
    	<link rel="stylesheet" href="ADMIN PANEL/fonts/font-awesome/css/fontawesome.min.css"> 

    	 <script> 
    function validateform()
{  
    var ct_name=document.myform.ct_name.value;
    var email=document.myform.email.value; 
    var ct_subject=document.myform.ct_subject.value;
    var ct_message=document.myform.ct_message.value; 
   
  
    if (name==null || ct_name=="")
    {  
            alert("Please Enter Your Name");  
            return false;  
    }
    
   else if (name==null || email==/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myform.email.value))
    {  
            alert("Please Enter Your Email");  
            return false;  
    }
    else if(name==null || ct_subject=="")
    {  
            alert("Please Enter Your Subject.");  
            return false;  
    }  
    
    else if(name==null || ct_message=="")
    {  
            alert("Please Enter Your Message.");  
            return false;  
    }   
}
</script>

    </head>
    <body>


<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+91 95000 40040"><i class="fas fa-phone-alt"></i> +91 74287-30894</a>
						<a href="mainto:info@cakebakery.com"><i class="fa fa-envelope" aria-hidden="true"></i> cakebaker@gmail.com</a>
					</div>
					<div class="float-right">
						<ul class="h_social list_style">
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/login?lang=en-gb"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.dropbox.com/login"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<ul class="h_search list_style">
							<li class="shop_cart"><a href="cart.php"><span class="lnr lnr-cart"><?php echo @$_SESSION['totalCart']; ?></span></a></li>
							<!--<li><a class="popup-with-zoom-anim" href=""><i class="fa fa-search"></i></a></li>-->
						</ul>
					</div>
				</div>
			</div>
			<div class="main_menu_area">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php">
						<img src="img/Logo3.jpg" alt="">
						<img src="img/logo-2.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="dropdown submenu active">
									<a class="dropdown-toggle"  href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<!--<ul class="dropdown-menu">
										<li><a href="index.php">Home 1</a></li>
										<li><a href="index-2.php">Home 2</a></li>
										<li><a href="index-3.php">Home 3</a></li>
										<li><a href="index-4.php">Home 4</a></li>
										<li><a href="index-5.php">Home 5</a></li>
									</ul>-->
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cakes</a>
									<ul class="dropdown-menu">
										 <?php 
										 $sql2 = mysqli_query($conn,"select * from category");
										 while($row2 = mysqli_fetch_array($sql2)) { ?>
                                        <li><a href="cake.php?catid=<?php echo $row2['cat_id'];?>" ><?php echo $row2['title']; ?></a></li>
                                        <?php } ?>

									</ul>
								</li>

								<li><a href="menu.php">Menu</a></li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<!--<li><a href="about-us.php">About Us</a></li>-->
										<li><a href="our-team.php">Our Chefs</a></li>
										<li><a href="testimonials.php">Testimonials</a></li>
									</ul>
								</li>
							</ul>
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li><a href="service.php">Services</a></li>
										<li class="dropdown submenu">
											<li><a href="portfolio.php">Gallery</a></li>
											<!--<ul class="dropdown-menu">
												<li><a href="portfolio.php">-  Gallery Classic</a></li>
												<li><a href="portfolio-full-width.php">-  Gallery Full width</a></li>
											</ul>-->
										</li>
										<li><a href="faq.php">Faq</a></li>
									<!--<li><a href="what-we-make.php">What we make</a></li>
										<li><a href="special.php">Special Recipe</a></li>
										<li><a href="404.php">404 page</a></li>
										<li><a href="comming-soon.php">Coming Soon page</a></li>-->
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
											<!--<li><a href="shop.php">Main shop</a></li>
										<li><a href="product-details.php">Product Details</a></li>-->
										<li><a href="pastorder.php">Past Order</a></li>
									<li><a href="cart.php">Cart Page</a></li>
										<li><a href="checkout.php">Checkout Page</a></li>
									</ul>
								</li> 
										<!--<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li><a href="blog.php">Blog with sidebar</a></li>
										<li><a href="blog-2column.php">Blog 2 column</a></li>
										<li><a href="single-blog.php">Blog details</a></li>
									</ul>
								</li>-->
								<li><a href="contact.php">Contact Us</a></li>

								<?php if(!empty($_SESSION['user'])){ ?>
									<li class="dropdown submenu">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $_SESSION['user']['name'];?>
										<ul class="dropdown-menu">
											<li><a href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;My Account </a></li>
											<li><a href="changepassword.php"><i class="fas fa-user-cog"></i> Change Password</a></li>
											<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
										</ul>
									</li>
								<?php } else { ?>
									<li class="dropdown submenu">
										<a href="login.php">Login</a>
										
									</li>
								<?php } ?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>