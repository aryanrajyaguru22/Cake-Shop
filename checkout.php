<?php
ob_start();
session_start();
if($_SESSION['user']=='')
{
  header("location:login.php");
}
include('header.php');
include('ADMIN PANEL/connection.php'); 

if(!empty($_POST['order_placed']))
{
	$name = $_POST['first_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['company_flat'];
    $o_date = $_POST['o_date'];
	$city = $_POST['city'];
	$notes = isset($_POST['message'])?$_POST['message']:'';
	$amount = $_POST['amount_final'];
	$status = 'Pending';
	$paymentType = 'Stripe';
	$cart_ids = implode(',',$_POST['cart_id_record']);
	$product_ids = implode(',',$_POST['sub_cat_id']);
	echo $query = "insert into orders(`order_name`,`order_email`,`order_phone`,`order_address`,`o_date`,`order_city`,`order_notes`,`order_final_amount`,`order_payment_type`,`order_status`,`order_cart_ids`,`order_product_ids`)values('$name','$email','$phone','$address','$o_date','$city','$notes','$amount','$paymentType','$status','$cart_ids','$product_ids')";
	$query1 = mysqli_query($conn,$query);
	$last_id = mysqli_insert_id($conn);

	header("location:payment_gateway/stripe_pay_demo.php?orderId=$last_id");
}


// Array
// (
//     [first_name] => piyush
//     [last_name] => nakarani
//     [email] => piyush0101nakarani@gmail.com
//     [phone] => 939393933
//     [company_flat] => 57, shankar nagar
//     [street_area] => near ruxmani society,
//     [landmark] => puanagam
//     [city] => Surat
//     [message] => remark
//     [cart_id_record] => Array
//         (
//             [0] => 5
//             [1] => 6
//         )

//     [cart_id] => Array
//         (
//             [0] => 5
//             [1] => 6
//         )

//     [sub_cat_id] => Array
//         (
//             [0] => 18
//             [1] => 22
//         )

//     [amount_final] => 7450
//     [order_placed] => submit
?>

	<style type="text/css">
		.form-control{
			color:black !important;
		}
	</style>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area p_100">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Checkout</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="checkout.php">Checkout</a></li>
        			</ul>
        		</div>
        	</div>
        </section>

<!DOCTYPE html>
<html lang="en">
<head>
    

    <script> 
    function validateform()
{  
    var first_name=document.myform.first_name.value;
    var email=document.myform.email.value; 
    var phone=document.myform.phone.value;
    var company_flat=document.myform.company_flat.value; 
    var o_date=document.myform.o_date.value;
    var city=document.myform.city.value;
    
  
    if (name==null || first_name=="")
    {  
            alert("Please Enter Your First Name");  
            return false;  
    }
    
   else if (name==null || email==/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myform.email.value))
    {  
            alert("Please Enter Your Email");  
            return false;  
    }
    else if(name==null || phone=="")
    {  
            alert("Please Enter Your phone number.");  
            return false;  
    }  
    else if(name==null || phone.length<10)
    {  
            alert("Phone number Must Be Atleast 10 Characters .");  
            return false;  
    } 
    else if(name==null || phone.length>10)
    {  
            alert("Phone number Must Be Atleast 10 Characters .");  
            return false;  
    } 
    else if(name==null || company_flat=="")
    {  
            alert("Please Enter Your Building No.");  
            return false;  
    }   
    else if(name==null || o_date=="")
    {  
            alert("Please Select Your Delivery Date.");  
            return false;  
    } 
     else if(name==null || city=="")
    {  
            alert("Please Enter Your City.");  
            return false;  
    }  
    
}
</script>

</head>
<body>
        <!--================End Main Header Area =================-->
        
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
           
                <div class="row">
                	<div class="col-lg-7">
               	    	<div class="main_title">
               	    		<h2>Billing Details</h2>
               	    	</div>
                		<div class="billing_form_area">
                			<!-- <form class="billing_form row" action="http://galaxyanalytics.net/demos/cake/theme/cake-html/contact_process.php" method="post" id="contactForm" novalidate="novalidate"> -->
                			<form class="billing_form row" method="post" onsubmit="return validateform()" name="myform" id="contactForm" novalidate="novalidate">
                                <?php if(!empty($_SESSION['user'])){ ?>
								<div class="form-group col-md-12">
								    <label for="first">First Name *</label>
									<input type="text" class="form-control" id="first" name="first_name" value="<?php echo $_SESSION['user']['name'];?>" placeholder="First Name">
								</div>
								
								<div class="form-group col-md-6">
								    <label for="email">Email Address *</label>
									<input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['user']['email'];?>" placeholder="Email Address">
								</div>
								<div class="form-group col-md-6">
								    <label for="phone">Phone *</label>
									<input type="text" class="form-control" id="phone" name="phone"  value="<?php echo $_SESSION['user']['phone'];?>" placeholder="Select an option">
								</div>

								<div class="form-group col-md-12">
                                    <label for="company">Delivery Address</label>
                                    <input type="text" class="form-control" id="company" name="company_flat" value="<?php echo $_SESSION['user']['address'];?>" placeholder="Company, flat, houst, building no">
                    
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="company">Select Delivery Date</label>
                                    <input type="date" class="form-control" id="company" name="o_date" >
                    
                                </div>

								<div class="form-group col-md-12">
								    <label for="city">Town / City *</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="Town /City" value="Surat">
								</div>
								
								<div class="form-group col-md-12">
									<label for="phone">Order Notes</label>
									<textarea class="form-control" name="message" id="message" rows="1" placeholder="Note about your order. e.g. special note for delivery"></textarea>
								</div>
							<?php } ?>
                		</div>
                	</div>
                	<div class="col-lg-5">
                		<div class="order_box_price">
                			<div class="main_title">
                				<h2>Your Order</h2>
                			</div>
							<div class="payment_list">
								<div class="price_single_cost">
									
									<h5>Product <span>Total</span></h5>
									<?php
									 $user_id = $_SESSION['user']['u_id'];
                            $query = "select * from cart JOIN subcategory ON cart.cart_subcate_id = subcategory.sub_cat_id where cart.cart_user_id='$user_id' AND cart.status='Pending'"; 
                            $query1 = mysqli_query($conn,$query);
                            $total = 0;
                            while($query2 = mysqli_fetch_array($query1)){
                            $total = $total + $query2['total'];  ?>
                              <input type="hidden" name="cart_id_record[]" value="<?php echo $query2['cart_id']; ?>">
								<h5><?php echo $query2['content']; ?>(<?php echo $query2['price'] ?>) X <?php echo $query2['quantity']; ?> X <?php echo $query2['weight']." Kg"; ?> X <?php echo $query2['type']; ?>  <span><?php echo $query2['total']; ?></span>
									
									<input type="hidden" name="sub_cat_id[]" value="<?php echo $query2['sub_cat_id']; ?>" >
							<?php } ?>
									<h4>Subtotal <span><?php echo $total; ?></span></h4>
									<h5>Shipping And Handling<span class="text_f">Free Shipping</span></h5>
									<h3>Total <span><?php echo $total; ?></span></h3>
									<input type="hidden" value="<?php echo $total; ?>" name="amount_final">
								</div>
								<div id="accordion" class="accordion_area">
									<div class="card">
										
									</div>
									
									<div class="card">
										<div class="card-header" id="headingThree">
											<h5 class="mb-0">
												<!--<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Stripe-->
												<img src="img/checkout-card.png" alt="">
												</button>
												<!--<a href="#">What is Stripe?</a>-->
											</h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
											Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
											</div>
										</div>
									</div>
								</div>
								<button type="submit" value="submit" name="order_placed" class="btn pest_btn">Place Order</button>
							</div>
							</form>
						</div>
                	</div>
                </div>
            </div>
        </section>
        <!--================End Billing Details Area =================-->   
        
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
        	</div>-->
        </footer>
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
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