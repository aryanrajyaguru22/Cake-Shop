<?php
session_start();
// if($_SESSION['user']=='')
// {
//   header("location:login.php");
// }
include('header.php');
?>

<?php
include('ADMIN PANEL/connection.php');
$sql = mysqli_query($conn, "select * from services");
?>

<!DOCTYPE html>
<html lang="en">

    <body>
        
        <!--================Main Header Area =================-->
		
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Services</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="service.php">Services</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Service Offer Area =================-->
        <section class="service_offer_area p_100">
        	<div class="container">
                    <div class="main_title">
        			<h2>What We Offer</h2>
        			<p></p>
        		</div>
        		<div class="row service_main_item_inner">
                    <?php while($row=mysqli_fetch_array($sql)){ ?>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img src="ADMIN PANEL/image/<?php echo $row['image']; ?>" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4><h4><?php echo $row['s_title']; ?></h4></a>
        					</div>
        				</div>

        			</div>
        	<?php
            } ?>
        		</div>
           
        	</div>
            
        </section>
        <!--================End Service Offer Area =================-->
        
        <!--================Special Recipe Area =================-->
        <!--<section class="special_recipe_area">
        	<div class="container">
        		<div class="special_recipe_slider owl-carousel">
        			<div class="item">
        				<div class="media">
        					<div class="d-flex">
        						<img src="img/recipe/recipe-1.png" alt="">
        					</div>
        					<div class="media-body">
        						<h4>Special Recipe</h4>
        						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
        						<a class="w_view_btn" href="#">View Details</a>
        					</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="media">
        					<div class="d-flex">
        						<img src="img/recipe/recipe-1.png" alt="">
        					</div>
        					<div class="media-body">
        						<h4>Special Recipe</h4>
        						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
        						<a class="w_view_btn" href="#">View Details</a>
        					</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="media">
        					<div class="d-flex">
        						<img src="img/recipe/recipe-1.png" alt="">
        					</div>
        					<div class="media-body">
        						<h4>Special Recipe</h4>
        						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
        						<a class="w_view_btn" href="#">View Details</a>
        					</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="media">
        					<div class="d-flex">
        						<img src="img/recipe/recipe-1.png" alt="">
        					</div>
        					<div class="media-body">
        						<h4>Special Recipe</h4>
        						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
        						<a class="w_view_btn" href="#">View Details</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>-->
        <!--================End Special Recipe Area =================-->
        
        <!--================Discover Menu Area =================-->
        <!--<section class="discover_menu_area service_menu">
        	<div class="discover_menu_inner">
        		<div class="container">
        			<div class="s_dis_title">
        				<div class="float-left">
        					<div class="main_title">
								<h2>Discover Menu</h2>
								<h5>Duis aute irure dolor in reprehenderit voluptate</h5>
							</div>
        				</div>
        				<div class="float-right">
        					<a class="pest_w_btn" href="#">View Full Menu</a>
        				</div>
        			</div>
       				<div class="row">
       					<div class="col-lg-6">
       						<div class="discover_item_inner">
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       						</div>
       					</div>
       					<div class="col-lg-6">
       						<div class="discover_item_inner">
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       						</div>
       					</div>
       				</div>
        		</div>
        	</div>
        </section>-->
        <!--================End Discover Menu Area =================-->
        
        <!--================Bakery Video Area =================-->
       <!-- <section class="bakery_video_area">
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
        </section>-->
        <!--================End Bakery Video Area =================-->
        
        <!--================Newsletter Area =================-->
        <!--<section class="newsletter_area">
        	<div class="container">
        		<div class="row newsletter_inner">
        			<div class="col-lg-6">
        				<div class="news_left_text">
        					<h4>Join our Newsletter list to get all the latest offers, discounts and other benefits</h4>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="newsletter_form">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Enter your email address">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button">Subscribe Now</button>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>-->
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
        <?php
            include('footer.php');

       
        ?>
    </body>

</html>