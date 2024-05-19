<?php
session_start();
//if($_SESSION['user']=='')
//{
  //header("location:login.php");
//}
include('header.php');
?>

<?php
include('ADMIN PANEL/connection.php');
$sql=mysqli_query($conn,"select * from ourchef");

?>


        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Our Chefs</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="our-team.php">Our Chefs</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================End Client Says Area =================-->
        <section class="our_chef_area p_100">
        	<div class="container">
        		<div class="row our_chef_inner">
        			<div class="col-lg-3">
        				<div class="chef_text_item">
        					<div class="main_title">
								<h2>Our Chefs</h2>
								<!--<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion.</p>-->
							</div>
        				</div>
        			</div>
        			<div class="col-lg-7">
                        <div class="row">
                        <?php while($row=mysqli_fetch_array($sql))
                        {
                            ?> 

                            <div class="col-lg-4">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="ADMIN PANEL/image/<?php echo $row["image"]; ?>" alt="">
        						<ul class="list_style">
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-skype"></i></a></li>
        						</ul>
        					</div>
        					<a href="#"><h4><?php echo $row["ch_name"]; ?></h4></a>
        					<h5><?php echo $row["description"]; ?></h5>

        				</div>
                    </div>
                            <?php
            }
            ?>
        			</div>
        		</div>
            </div>
            
        	</div>
        </section>
        <!--================End Client Says Area =================-->
        
        <!--================Newsletter Area =================-->
       <!-- <section class="newsletter_area">
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