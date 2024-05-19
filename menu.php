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

$sql=mysqli_query($conn,"select * from menu");
?>


        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Menu</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="menu.php">Menu</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Recipe Menu list Area =================-->
        <section class="price_list_area p_100">
        	<div class="container">
        		<div class="price_list_inner">
        			<div class="single_pest_title">
        				<h2>Our Price List</h2>
        				
        			</div>
       				<div class="row">
       					<?php while($row=mysqli_fetch_array($sql))
       					{
       						?>
       					<div class="col-lg-6">
       					
       						<div class="discover_item_inner">
       							<div class="discover_item">
									<h4><?php echo $row['item_name']; ?></h4>
									<p><?php echo $row['ingredient']; ?><span>&#8377;<?php echo $row['price']; ?></span></p>
								</div>
								
       						</div>
       					
       					</div>
       					<?php
       					}
       					?>
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
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <?php
            include('footer.php');

       
        ?>
    </body>

</html>