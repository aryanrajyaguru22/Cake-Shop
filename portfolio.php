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
        			<h3>Gallery</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="portfolio.php">Gallery</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Portfolio Area Area =================-->
        <section class="portfolio_area p_100">
        	<div class="container">
        		<!--<div class="portfolio_filter">
					<ul class="list_style">
						<li class="active" data-filter="*"><a href="#">All</a></li>
						<li data-filter=".cake"><a href="#">Cakes</a></li>
						<li data-filter=".bakery"><a href="#">Bakery</a></li>
						<li data-filter=".past"><a href="#">Pastries</a></li>
						<li data-filter=".choco"><a href="#">Chocolates</a></li>
						<li data-filter=".bread"><a href="#">Breads</a></li>
						                                
					</ul>
				</div>-->
       			<div class="cake_feature_row row">
                    <?php
                    
                    
                    $sub2=mysqli_query($conn,"select * from subcategory ");
                      while($row2=mysqli_fetch_array($sub2))
                      {
                ?>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="ADMIN PANEL/image/<?php echo $row2["image"]; ?>" alt="">
                            </div>
                            <div class="cake_text">

                                
                                <h3><?php echo $row2["content"]; ?></h3>
                                
                                

                            </div>
                        </div>
                    </div>
                    <?php
                   }
                ?>
                </div>
                </div>
       				
       				
       				
       				
       				
       				</div>
       			</div>
        	</div>
         
        </section>
        <!--================End Portfolio Area Area =================-->
        
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