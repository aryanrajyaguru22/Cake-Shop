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
$sql = mysqli_query($conn, "select * from comments");
?>


        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Testimonials</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="service.php">Testimonials</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Testimonials item Area =================-->
        <section class="testimonials_item_area p_100">
            <?php while($row2=mysqli_fetch_array($sql)){ ?>

        	<div class="container">
        		<div class="testi_item_inner">
        			<div class="media">
						<div class="d-flex">
							<img src="ADMIN PANEL/image/<?php echo $row2['image']; ?>" alt="">
							<h3>“</h3>
						</div>
						<div class="media-body">
							<p><?php echo $row2['comments']; ?></p>
							<h5>- <?php echo $row2['c_name']; ?></h5>
						</div>
					</div>
        			
        		
        		</div>
        	</div>
        <?php }
        ?>
        </section>
        <!--================End Testimonials item Area =================-->
        
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
       
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
       <?php
            include('footer.php');

       
        ?>
    </body>

</html>