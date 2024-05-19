<?php
session_start();
 if($_SESSION['user']=='')
 {
   header("location:login.php");
 }
include('header.php');
?>

<?php
include_once'ADMIN PANEL/connection.php';


if(isset($_REQUEST['sub']))
{    
        $ct_name=$_POST['ct_name'];
        $email=$_POST['email'];   
        $ct_subject=$_POST['ct_subject'];
        $ct_message=$_POST['ct_message'];

        $insert=mysqli_query($conn,"insert into contactus (ct_name,email,ct_subject,ct_message) values ('$ct_name','$email','$ct_subject','$ct_message')");
  

      if($insert)
        {
            $success="insert Successfully...!!";
        }
        else
        {
            $danger="not inserted record";
        }
    }
?>

        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Contact Us</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="single-blog.php">Contact Us</a></li>
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
        <!--================Contact Form Area =================-->
        <section class="contact_form_area p_100">
        	<div class="container">
        		<div class="main_title">
					<h2>Get In Touch</h2>
					<h5>Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</h5>
				</div>
       			<div class="row">
       				<div class="col-lg-7">
       					<form class="row contact_us_form" action="contact.php" method="post" onsubmit="return validateform()" name="myform" novalidate="novalidate">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" name="ct_name" placeholder="Your name">
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" name="email" placeholder="Email address">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" name="ct_subject" placeholder="Subject">
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control" name="ct_message" rows="1" placeholder="Write message"></textarea>
							</div>
							<div class="form-group col-md-12">
								<button type="submit" name="sub" value="submit"  class="btn order_s_btn form-control">Submit Now</button>
							</div>
						</form>
       				</div>
       				<div class="col-lg-4 offset-md-1">
       					<div class="contact_details">
       						<div class="contact_d_item">
       							<h3>Address :</h3>
       							<p>Dream World Residency, B-101, Canal Rd, Vesu, Surat, Gujarat 395007
</p>
       						</div>
       						<div class="contact_d_item">
       							<h5>Phone : <a href="tel:01372466790">+91 74287-31210</a></h5>
       							<h5>Email : <a href="mailto:rockybd1995@gmail.com">keyurmodi85@gmail.com</a></h5>
       						</div>
       						<div class="contact_d_item">
       							<h3>Opening Hours :</h3>
       							<p>8:00 AM – 10:00 PM</p>
       							<p>Monday – Sunday</p>
       						</div>
       					</div>
       				</div>
       			</div>
        	</div>
        </section>
        <!--================End Contact Form Area =================-->

        <!--================End Banner Area =================-->
       <!-- <section class="map_area">
            <div id="mapBox" class="mapBox row m0" 
                data-lat="40.701083" 
                data-lon="-74.1522848" 
                data-zoom="13" 
                data-marker="img/map-marker.png" 
                data-info="54B, Tailstoi Town 5238 La city, IA 522364"
                data-mlat="40.701083"
                data-mlon="-74.1522848">
            </div>
        </section>-->
        <!--================End Banner Area =================-->
        
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