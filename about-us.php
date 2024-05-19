<?php
session_start();
if($_SESSION['user']=='')
{
  header("location:login.php");
}
include('header.php');
?>

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
    </head>
    <body>
        
        <!--================Main Header Area =================-->
		<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> + (1800) 456 7890</a>
						<a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@cakebakery.com</a>
					</div>
					<div class="float-right">
						<ul class="h_social list_style">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<ul class="h_search list_style">
							<li class="shop_cart"><a href="#"><i class="lnr lnr-cart"></i></a></li>
							<li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main_menu_area">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php">
						<img src="img/logo.png" alt="">
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
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<ul class="dropdown-menu">
										<li><a href="index.php">Home 1</a></li>
										<li><a href="index-2.php">Home 2</a></li>
										<li><a href="index-3.php">Home 3</a></li>
										<li><a href="index-4.php">Home 4</a></li>
										<li><a href="index-5.php">Home 5</a></li>
									</ul>
								</li>
								<li><a href="cake.php">Our Cakes</a></li>
								<li><a href="menu.php">Menu</a></li>
								<li class="dropdown submenu active">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.php">About Us</a></li>
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
										<li><a href="what-we-make.php">What we make</a></li>
										<li><a href="special.php">Special Recipe</a></li>
										<li><a href="404.php">404 page</a></li>
										<li><a href="comming-soon.php">Coming Soon page</a></li>
									</ul>
								</li>
								
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li><a href="shop.php">Main shop</a></li>
										<li><a href="product-details.php">Product Details</a></li>
										<li><a href="cart.php">Cart Page</a></li>
										<li><a href="checkout.php">Checkout Page</a></li>
									</ul>
								</li>
                                    <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.php">Blog with sidebar</a></li>
                                        <li><a href="blog-2column.php">Blog 2 column</a></li>
                                        <li><a href="single-blog.php">Blog details</a></li>
                                    </ul>
                                </li>
								<li><a href="contact.php">Contact Us</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;My Account </a></li>
                                        <li><a href="changepassword.php"><i class="fas fa-user-cog"></i> Change Password</a></li>
                                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                                    </ul>
                                </li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>About Us</h3>
        			<ul>
        				<li><a href="#">Home</a></li>
        				<li><a href="#">About Us</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Our Bakery Area =================-->
        <section class="our_bakery_area p_100">
        	<div class="container">
        		<div class="our_bakery_text">
        			<h2>Our Bakery Approach </h2>
        			<h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</h6>
        			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem.</p>
        		</div>
        		<div class="row our_bakery_image">
        			<div class="col-md-4 col-6">
        				<img class="img-fluid" src="img/our-bakery/bakery-1.jpg" alt="">
        			</div>
        			<div class="col-md-4 col-6">
        				<img class="img-fluid" src="img/our-bakery/bakery-2.jpg" alt="">
        			</div>
        			<div class="col-md-4 col-6">
        				<img class="img-fluid" src="img/our-bakery/bakery-3.jpg" alt="">
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Our Bakery Area =================-->
        
        <!--================Bakery Video Area =================-->
        <section class="bakery_video_area">
        	<div class="container">
        		<div class="video_inner">
        			<h3>Real Taste</h3>
        			<p>A light, sour wheat dough with roasted walnuts and freshly picked rosemary, thyme, poppy seeds, parsley and sage</p>
        			<div class="media">
        				<div class="d-flex">
        					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="flaticon-play-button"></i></a>
        				</div>
        				<div class="media-body">
        					<h5>Watch intro video <br />about us</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Bakery Video Area =================-->
        
        <!--================Our Mission Area =================-->
        <section class="our_mission_area p_100">
        	<div class="container">
        		<div class="row our_mission_inner">
        			<div class="col-lg-3">
        				<div class="single_m_title">
        					<h2>Our Mission</h2>
        				</div>
        			</div>
        			<div class="col-lg-9">
        				<div class="mission_inner_text">
        					<h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</h6>
        					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</p>
        					<ul class="nav">
        						<li><a href="#">Custom cakes</a></li>
        						<li><a href="#">Birthday cakes</a></li>
        						<li><a href="#">Wedding cakes</a></li>
        						<li><a href="#">European delicacies</a></li>
        					</ul>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Our Mission Area =================-->
        
        <!--================Client Says Area =================-->
        <section class="client_says_area p_100">
        	<div class="container">
        		<div class="client_says_inner">
        			<div class="c_says_title">
        				<h2>What Our Client Says</h2>
        			</div>
        			<div class="client_says_slider owl-carousel">
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="img/client/client-1.png" alt="">
        							<h3>“</h3>
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="img/client/client-1.png" alt="">
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="img/client/client-1.png" alt="">
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Client Says Area =================-->
        
        <!--================End Client Says Area =================-->
        <section class="our_chef_area p_100">
        	<div class="container">
        		<div class="row our_chef_inner">
        			<div class="col-lg-3">
        				<div class="chef_text_item">
        					<div class="main_title">
								<h2>Our Chefs</h2>
								<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion.</p>
							</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="img/chef/chef-1.jpg" alt="">
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="img/chef/chef-2.jpg" alt="">
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="img/chef/chef-3.jpg" alt="">
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Client Says Area =================-->
        
       <?php
            include('footer.php');

       
        ?>
    </body>

</html>