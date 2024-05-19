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
$sub_cat_id=$_GET['sub_cat_id'];


	$sql= mysqli_query($conn, "select * from subcategory where sub_cat_id=$sub_cat_id");

    $sql4= mysqli_query($conn, "select * from subcategory where sub_cat_id=$sub_cat_id");
  
	$in2=mysqli_fetch_array($sql);


if(!empty($_POST['CartAdd']))
{
   
    echo $user_id = $_SESSION['user']['u_id'];
    echo $product_id = $sub_cat_id;
    echo $quan = $_POST['quantity'];
    echo $weight =  $_POST['quweikg'];
    echo $price = $_POST['update_product_price_single'];
    echo $total = $_POST['update_product_price'];

    
    $status = 'pending';
    $type = $_POST['type'];
    $s_name = $_POST['s_name'];
    $chkstr = implode(",", $s_name);
    $rqu = "select * from cart where `cart_subcate_id`='$product_id' AND `cart_user_id`='$user_id' AND `status`='Pending'";
    $rqu1 = mysqli_query($conn,$rqu);
    $rqu2 = mysqli_num_rows($rqu1);
    if($rqu2 > 0){
        $danger="This is Already into your cart!!";
    }
    else
    {
        $quer = "insert into cart(`cart_subcate_id`,`cart_user_id`,`quantity`,`weight`,`price`,`total`,`status`,`type`,`s_name`)values('$product_id','$user_id','$quan','$weight','$price','$total','$status','$type','$chkstr')";
        $query1 = mysqli_query($conn,$quer);

        $qu = "select * from cart where `cart_user_id`='$user_id' AND `status`='Pending'";
        $qu1 = mysqli_query($conn,$qu);
        $num = mysqli_num_rows($qu1);
        $_SESSION['totalCart'] = $num;
        if($query1){
             $success="insert Successfully...!!";
         }else{
             $danger="Something Wrong!!";
         }
         header("location:product-details.php?sub_cat_id=$sub_cat_id");
    }
}

if(isset($_POST['sub']))
{				
		$sub_cat_id=$_POST['sub_cat_id'];
        $cname=$_POST['cname'];
        $email=$_POST['email'];   
        $comments=$_POST['comments'];
        $file=$_FILES['file-input']['name'];

        //$fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    
        $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    // Get image file extension
      $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
       //$file_extension=rand(100,10000)."-".$_FILES['file-input']['name'];
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            $danger= "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            $danger= "Upload valiid images. Only PNG and JPEG are allowed."
        );
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            $danger= "Image size exceeds 2MB"
        );
    }    // Validate image file dimension
     else {
        $target = "ADMIN PANEL/image/";

        if (move_uploaded_file($_FILES['file-input']['tmp_name'], $target.$file))
        {
            $response = array(
                "type" => "success",
               //$success= "Image uploaded successfully."
            );


        $insert=mysqli_query($conn,"insert into comments (sub_cat_id,c_name,email,image,comments) values ($sub_cat_id,'$cname','$email','$file','$comments')");
  

        if($insert)
        {
            $success="insert Successfully...!!";
        }
        else
        {
            $danger="not inserted record";
        }
    }
    
  }
}

?>



<style type="text/css">
    .box{
        padding:2px;
        border:1px solid black;
        height: 20px;
        width:20px;
        margin-left: 10px;
        color:white;
    }
    .box:hover{
        border: 2px solid blue;
        color:white;
    }
</style>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area p_100">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Product Details</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="product-details.php">Product Details</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->

        <?php
if(isset($success))
{
?>
<div class="bg-success text-white content-center p-3 mb-2" style="border-radius: 10px;"><?php echo $success; ?> </div>
<?php } ?>

<?php
if(isset($danger))
{
?>
<div class="bg-danger text-white content-center p-3 mb-2" style="border-radius: 10px;"><?php echo $danger; ?> </div>
<?php } ?>
        
        <!--================Product Details Area =================-->
        <section class="product_details_area p_100 pb-0">

        	<div class="container">
        		<div class="row product_d_price">
        		
        			<div class="col-lg-6">
        				<div class="product_img"><img class="img-fluid" src="ADMIN PANEL/image/<?php echo $in2['image']; ?> " alt=""></div>
        			</div>
                    
            			<div class="col-lg-6">
            				<div class="product_details_text">
            		          <form method="post">
                    			<h4><?php echo @$in2['content']; ?></h4>
            					<p><?php echo @$in2['description']; ?></p><br>
                             
                                    <label for="quantity">Weight : <span id="kgqu">1 Kg</span></label><br>
                                    <input type="hidden" name="quweikg" id="quweikg" value="1">
                                    <a href="javascript:test(0.5)" style="color:black; margin-left:-1px; "class="box">0.5 Kg</a>
                                    <a href="javascript:test(1)" style="color:black;" class="box">1 Kg</a>
                                    <a href="javascript:test(2)" style="color:black;" class="box">2 Kg</a >
                                    <a href="javascript:test(3)" style="color:black;" class="box">3 Kg</a>
                                    <br><br>
                                    <input name="Weight_data" id="Weight_data" type="hidden" value="1">
                                    <label for="quantity">Quantity :</label>
                                    <input type="number" style="width:40px;" placeholder="1" value="1" id="quantity" name="quantity" min="1" onchange="return getQuantity()">

            					<h5><span id="final_price">₹<?php echo @$in2['price']; ?></span></h5>

                                <input type="hidden" id="product_price" name="product_price" value="<?php echo @$in2['price']; ?>">

                                <input type="hidden" id="update_product_price" name="update_product_price" value="<?php echo @$in2['price']; ?>">

                                <input type="hidden" id="update_product_price_single" name="update_product_price_single" value="<?php echo @$in2['price']; ?>">
                                <div>
                                <label for="Category"><b>Category</b></label>
                                        <select name="type" style="height: 30px;">
                                                 <option value="Egg">EGG</option>
                                                <option value="Egg Less">EGG LESS</option>
                                        </select><br>
                                </div>
                                <p><strong>Select Any 3 Services</strong></p>
                                <div>
                                <input class="single-checkbox" type="checkbox" name="s_name[]" value="Balloons" /> 5 Balloons<br />
                                <input class="single-checkbox" type="checkbox" name="s_name[]" value="Candles" /> 5 Candles<br />
                                <input class="single-checkbox" type="checkbox" name="s_name[]" value="Fire Candles" /> 1 Fire Candles<br />
                                <input class="single-checkbox" type="checkbox" name="s_name[]" value="Celebration Cap" /> 3 Celebration Cap<br />
                                <input class="single-checkbox" type="checkbox" name="s_name[]" value="Spary" /> 1 Spary<br />
<hr />
</div>

            			
            						
            					
                                <?php if(empty($_SESSION['user'])) {
                                    $_SESSION['tmp_name'] =  'product-details.php';
                                    $_SESSION['product_id'] =  $sub_cat_id; ?>
            					   <a class="pink_more" href="login.php">Add to Cart</a>
                                <?php }else { unset($_SESSION['tmp_name']); unset($_SESSION['product_id']);?>

                                    <!-- <a class="pink_more" href="cart.php">Add to Cart</a> -->
                                    <input type="submit" name="CartAdd" value="Add to Cart" class="pink_more">
                                <?php } ?>
                                </form>
            				</div>
            			</div>
                </div>
        		<div class="product_tab_area">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descripton</a>
							<!--<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Specification</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Review (0)</a>-->
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <?php
                           

                            $sql3=mysqli_query($conn,"select * from subcategory where sub_cat_id=$sub_cat_id");
                            ?>
<?php
                         while($row3 =mysqli_fetch_array($sql3)){ ?>

							<p><?php echo $row3['description']; ?></p>
                            <?php
                        }
                        ?>
						</div>

						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
					</div>
        		</div>
        		<br>

        <div class="container" style="background-color:lightgray;">

        <?php
      
        $sql2=mysqli_query($conn,"select * from comments where sub_cat_id=$sub_cat_id");
        //$row2=mysqli_fetch_array($sql2);
        $count=mysqli_num_rows($sql2);

        ?>

        <?php while($row2=mysqli_fetch_array($sql2)){ ?>

        <p style="color:#ad0927; font-size: 20px;">Your Name : </p> <p style="color:gray; font-size: 20px;"><?php echo $row2['c_name'];?></p>
        <p style="color:#ad0927; font-size: 20px;">Your email : </p> <p style="color:gray; font-size: 20px;"><?php echo $row2['email'];?></p>
        <p style="color:#ad0927; font-size: 20px;">Your comment : </p> <p style="color:gray; font-size: 20px;"><?php echo $row2['comments'];?></p>
        <p style="color:gray; font-size: 20px;"><?php echo $row2['date'];?></p><br>

    	<?php } ?>

    	<?php
    	echo"Total Comments Are :".$count;
    	?>
        </div>
        </div>
        </section>


        <!--================End Product Details Area =================-->



        <form method="post" action="" enctype="multipart/form-data"> 

<section class="main_blog_area p_100 pt-0">
    <div class="container">
 <div class="s_comment_area">
                                <h3 class="cm_title_br">Leave a Comment</h3>
                                <div class="s_comment_inner">
                                    <form class="row contact_us_form" action="http://galaxyanalytics.net/demos/cake/theme/cake-html/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <?php while($row4=mysqli_fetch_array($sql4)){ ?>
                                        <div class="form-group col-md-6">
                                            <input type="hidden" class="form-control" id="id" name="sub_cat_id" value="<?php echo $row4['sub_cat_id'];?>" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="name" name="cname" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="file" name="file-input">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" name="comments" id="comments" rows="4" placeholder="Write message"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" value="submit" name="sub" class="btn order_s_btn form-control">Submit Now</button>
                                        </div>
                                        <?php } ?>
                                    </form>
                                    
                        </div>
                    </div>
                </div>
</section>




</form>
        
        <!--================Similar Product Area =================-->
        <!--<section class="similar_product_area p_100">
        	<div class="container">
        		<div class="main_title">
        			<h2>Similar Products</h2>
        		</div>
        		<div class="row similar_product_inner">
        			<div class="col-lg-3 col-md-4 col-6">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-1.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-6">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-2.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-6">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-3.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-md-4 col-6">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-4.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
        			</div>
        		</div>
        	</div>
        </section>-->
        <!--================End Similar Product Area =================-->
        
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
        <footer class="footer_area">
        	<div class="footer_widgets">
        		<div class="container">
        			<div class="row footer_wd_inner">
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_about_widget">
        						<img src="img/footer-logo.png" alt="">
        						<!--<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
        						<ul class="nav">
        							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        						</ul>-->
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Quick links</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="profile.php">Your Account</a></li>
        							<li><a href="pastorder.php">View Order</a></li>
        							<!--<li><a href="#">Privacy Policy</a></li>
        							<li><a href="#">Terms & Conditionis</a></li>-->
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Work Times</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#"> 8 am - 10 pm</a></li>
                                    <li><a href="#">Monday -  Sunday</a></li>
                                    <!--<li><a href="#">Sun. : Closed</a></li>-->
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
                            <aside class="f_widget f_contact_widget">
                                <div class="f_title">
                                    <h3>Contact Info</h3>
                                </div>
                                <h4>+91 74287-31210</h4>
                                <p>Dream World Residency, B-101, Canal Rd, Vesu, Surat, Gujarat 395007
                                 </p><br>
                                <h5>cakebaker@gmail.com</h5>
                            </aside>
                        </div>
        			</div>
        		</div>
        	</div>
        	<!--<div class="footer_copyright">
        		<div class="container">
        			<div class="copyright_inner">
        				<div class="float-left">
        					<h5><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></h5>
        				</div>
        				<div class="float-right">
        					<a href="#">Purchase Now</a>
        				</div>
        			</div>
        		</div>
        	</div>-->
        </footer>
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
        <!--<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>-->
        <!--================End Search Box Area =================-->
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

</html>

<script>

    function test(kg){
            var price = $('#product_price').val();
            var quantity =  parseInt($('#quantity').val());
            var oldkg = $('#quweikg').val();
            $('#quweikg').val(kg);
               if(kg== 1){
                    if(oldkg == 0.5){
                        ans = kg * price *quantity *2 ;
                    }else{
                        var anns = $('#update_product_price_single').val();
                        ans = kg * anns *quantity ;
                    }
                    $('#kgqu').html(kg+" Kg");
               } 
            else if(kg>1){
                var anns = $('#update_product_price_single').val();
                ans = kg * anns *quantity;
                $('#kgqu').html(kg+" Kg");
            }
            else{
                if(oldkg != kg ){
                    // ans = (price/2) * quantity;
                    var anns = $('#update_product_price_single').val();
                     var ans = anns/2 *quantity;
                    $('#kgqu').html(kg+" Kg");
                }else{
                     var anns = $('#update_product_price_single').val();
                     var ans1 = anns/2 ;
                     ans = ans1;
                }
            }
            // alert(ans)
            $('#update_product_price').val(ans);
            $('#product_price').val(ans);
            var ans = "₹"+ans;
            $('#final_price').html(ans);

    }

    function getQuantity(){
        var quantity =  parseInt($('#quantity').val());
        var price = parseInt($('#product_price').val());
        var total= quantity * price;
        $('#final_price').html(total);
        $('#update_product_price').val(total);
        $('#Weight_data').val(quantity);
    }
</script>

<script>
    $('.single-checkbox').on('change', function() {
   if($('.single-checkbox:checked').length > 3) {
       this.checked = false;
   }
});

</script>