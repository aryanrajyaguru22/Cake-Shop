<?php
ob_start();
session_start();


if(@$_SESSION['user']['u_id']=='')
{
  header("location:login.php");
}
include('header.php');

if(!empty($_GET['deleteCartData'])){
    $cartId = $_GET['cart_id'];
    $query = "delete from cart where `cart_id`='$cartId' AND `status`='Pending'";
    $query1 = mysqli_query($conn,$query);
    if($query1){
         $success="Delete Successfully...!!";
    }else{
         $danger="Something Wrong!!";
    }
}



if(isset($_POST['submit_cartUpdate']))
{
    // echo "<pre><br><br><br>";
    for($i=0;$i<sizeof($_POST['cart_id_data']);$i++){
         $quan =  $_POST['cart_quantity'][$i];
         $weight = $_POST['cart_weight'][$i];
         $sing_price = $_POST['price_product'][$i];
         $single_pro_total = $_POST['total_data_counting1'][$i];
         $cartId = $_POST['cart_id_data'][$i];
        $qu ="update cart set `quantity`='$quan',`weight`='$weight',`price`='$sing_price',`total`='$single_pro_total' where `cart_id`='$cartId'";
        
         mysqli_query($conn,$qu);
    }
    
    header('location:checkout.php');
}
// exit;
?>

        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Cart</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="cart.php">Cart</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Cart Table Area =================-->
        <section class="cart_table_area p_100">

        	<div class="container">
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


    

				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Preview</th>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Type</th>
								<th scope="col">Quantity</th>
                                <th scope="col">Services</th>
								<th scope="col">Total</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
                         <form method="post">
                            <?php 
                            $user_id = $_SESSION['user']['u_id'];
                            $query = "select * from cart JOIN subcategory ON cart.cart_subcate_id = subcategory.sub_cat_id where cart.cart_user_id='$user_id' AND cart.status='Pending'"; 
                            $query1 = mysqli_query($conn,$query);
                            $total = 0;
                            $count_data = 0;

                            while($query2 = mysqli_fetch_array($query1)) { ++$count_data; ?>
    							 <input type="hidden" name="cart_id_data[]" value="<?php echo $query2['cart_id'];?>">
                                <tr>
    								<td>
    									<img src="Admin panel/image/<?php echo $query2['image']; ?>" height="120" width="120" alt="">
    								</td>
    								<td><?php echo $query2['content']; ?></td>
    								<td><?php echo $query2['price'];?>
                                        <input type="hidden" name="price_product[]" id="price_product<?php echo $count_data; ?>" value="<?php echo $query2['price']; ?>">                        
                                    </td>
                                    <td><?php $ww = $query2['weight'];?>
                                        <select name="cart_weight[]" id="cart_weight<?php echo $count_data; ?>" onchange="return getCartWeightTotal(<?php echo $count_data; ?>)">
                                               <!-- <option value="">--select weight--</option>-->
                                                <option value="0.5" <?php if(!empty($ww)){ if($ww == '0.5'){ echo "selected"; } }?>>0.5 Kg</option>
                                                <option value="1" <?php if(!empty($ww)){ if($ww == '1'){ echo "selected"; } }?>>1 Kg</option>
                                                <option value="2" <?php if(!empty($ww)){ if($ww == '2'){ echo "selected"; } }?>>2 Kg</option>
                                                <option value="3" <?php if(!empty($ww)){ if($ww == '3'){ echo "selected"; } }?>>3 Kg</option>
                                        </select>
                                    </td>
                                    <td><?php echo $query2['type']; ?></td>
    								<td>
                                    <?php  $query2['quantity'];?>
    									<select class="" name="cart_quantity[]" id="cart_quantity<?php echo $count_data; ?>" onchange="return getCartQuantityTotal(<?php echo $count_data; ?>)">
    										<option value="1" <?php if(@$query2['quantity'] == '1') { echo "selected"; } ?>>1</option>
    										<option value="2" <?php if(@$query2['quantity'] == '2') { echo "selected"; } ?>>2</option>
    										<option value="3" <?php if(@$query2['quantity'] == '3') { echo "selected"; } ?>>3</option> 
    										<option value="4" <?php if(@$query2['quantity'] == '4') { echo "selected"; } ?>>4</option>
    										<option value="5" <?php if(@$query2['quantity'] == '5') { echo "selected"; } ?>>5</option>
    									</select> 
    								</td>
                                    <td><?php echo $query2['s_name'];?>
    								<td><span id="total_data<?php echo $count_data; ?>"><?php echo $query2['total'];?></span>
                                        <input type="hidden" name="total_data_counting1[]" id="total_data_counting1<?php echo $count_data; ?>" value="<?php echo $query2['total']; ?>"></td>
    								<td>
                                        <!-- <form method="post" > -->
                                          <!--   <input type="hidden" name="cart_id" value="<?php echo $query2['cart_id']; ?>">
                                            <input type="submit" class="btn btn-primary" name="deleteCartData" value="X" onclick="return secureData();"> -->
                                            <a href="cart.php?deleteCartData=delete&cart_id=<?php echo $query2['cart_id']; ?>" onclick="return secureData()">X</a>
                                        <!-- </form> -->
                                    </td>
    							</tr>    
                            <?php $total = $total + $query2['total'];  } ?>
							<tr>
								<td>
									<!-- <form class="form-inline"> 
										<div class="form-group"> 
											<input type="text" class="form-control" placeholder="Coupon code">
										</div>
										<button type="submit" class="btn"></button>
									</form> -->
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
                                <td></td>
                                <td></td>
                                <td></td>
								<td>
									<!-- <a class="pest_btn" href="#">Add To Cart</a> -->
								</td>
							</tr>
						</tbody>
					</table>
				</div>
                <input type="hidden" name="total_counting" value="<?php echo $count_data; ?>" id="total_counting">
       			<div class="row cart_total_inner">
        			<div class="col-lg-7"></div>
        			<div class="col-lg-5">
        				<div class="cart_total_text">
        					<div class="cart_head">
        						Cart Total
        					</div>
        					<div class="sub_total">
                                <input type="hidden" name="sub_total_text_data" id="sub_total_text_data">
        						<h5>Sub Total <span id="sub_total_data"><?php echo $total; ?></span></h5>
        					</div>
        					<div class="total">
        						<h4>Total <span id="total_final_amount"><?php echo $total; ?></span></h4>
        					</div>
        					<div class="cart_footer">
                                <?php if($total != 0){ ?>
                                    <input type="submit" name="submit_cartUpdate" class="pest_btn" value="Proceed to Checkout">
        						<!-- <a class="pest_btn" href="Checkout.php">Proceed to Checkout</a> -->
                            <?php } ?>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
    </form>
        <!--================End Cart Table Area =================-->
        
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
        				<div class="col-lg-3">
        					<aside class="f_widget f_about_widget">
        						<img src="img/footer-logo.png" alt="">
        						<!--<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>-->
                                <!--<ul class="nav">
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
        	</div>
        </footer>-->
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
        <script>
            function secureData(){
                var conf = confirm("Are You Sure to Delete?");
                if(conf){
                    return true;
                }else{
                    return false;
                }
            }


            function getCartWeightTotal(count){
                var dat = "cart_weight"+count;
                var weightd = $('#'+dat).val();

                var quan = "cart_quantity"+count;
                var quqna = parseInt($('#'+quan).val());
                // alert(quqna);
                var pri = "price_product"+count;
                var price = $('#'+pri).val();
                var total_data = weightd * price * quqna;
                var total = "total_data"+count;
                $('#'+total).html(total_data);

                var couting = $('#total_counting').val();


                $('#total_data_counting1'+count).val(total_data);
                // alert(total_data);
                // alert(price);
                      var count_all = 0;
                for(var i=1; i<=couting; i++){
                        // var cc = $('#')
                        var toddd = parseInt($('#total_data_counting1'+i).val());
                        // alert(toddd);
                        count_all = count_all + toddd;
                } 
                $('#total_final_amount').html(count_all);
                $('#sub_total_data').html(count_all);
                $('#sub_total_text_data').val(count_all);
            }

            function getCartQuantityTotal(count){
                var dat = "cart_weight"+count;
                var weightd = $('#'+dat).val();

                var quan = "cart_quantity"+count;
                var quqna = parseInt($('#'+quan).val());
                // alert(quqna);
                var pri = "price_product"+count;
                var price = $('#'+pri).val();
                var total_data = weightd * price * quqna;
                var total = "total_data"+count;
                $('#'+total).html(total_data);

                 var couting = $('#total_counting').val();


                $('#total_data_counting1'+count).val(total_data);
                // alert(total_data);
                // alert(price);
                      var count_all = 0;
                for(var i=1; i<=couting; i++){
                        // var cc = $('#')
                        var toddd = parseInt($('#total_data_counting1'+i).val());
                        // alert(toddd);
                        count_all = count_all + toddd;
                } 
                $('#total_final_amount').html(count_all);
                $('#sub_total_data').html(count_all);
                $('#sub_total_text_data').val(count_all);



                //  $('#sub_total_text_data').val(total_data);
                // $('#total_final_amount').html(total_data);
                // $('#sub_total_data').html(total_data);
                //  $('#total_data_counting1'+count).val(total_data);
            }
        </script>
    </body>

</html>