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
  
$sql=mysqli_query($conn,"select * from faq");

if(isset($_REQUEST['sub']))
{    
        $email=$_POST['email'];   
        $subject=$_POST['subject'];
        $que=$_POST['que'];
        $ans=$_POST['ans'];

        $insert=mysqli_query($conn,"insert into faq (email,subject,que,ans) values ('$email','$subject','$que','$ans')");
  

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
        			<h3>Faq</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="faq.php">Faq</a></li>
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
        <!--================Faq Area =================-->
        <section class="faq_area p_100 pb-0">
        	<div class="container">
        		<div class="main_title">
					<h2>Frequently Ask Questions</h2>
					<!--<p>Discover you question from underneath or present your inquiry fromt the submit box.</p>-->
				</div>
       			<!--<div class="input-group search_form">
				  <input type="text" class="form-control" placeholder="Search Your Answer" aria-label="Recipient's username">
				  <div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button"><i class="lnr lnr-magnifier"></i></button>
				  </div>
				</div>-->
       			<div class="row faq_collaps">
       				<div class="col-lg-6">


                                     <?php

                                      while ($row=mysqli_fetch_array($sql)) 
                                      {
                                      
                                      ?>

       					<div class="left_side_collaps">
							<div id="accordion">
								<div class="card">
									<div class="card-header" id="headingOne">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i>+</i>
										<i>-</i>
									<?php echo $row["que"] ?>
										</button>
									</div>
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
										<div class="card-body">
										<?php echo $row["ans"] ?>
										</div>
									</div>
								</div>
							
						
									
								
								</div>
							</div>
						<?php } ?>
       					</div>
       				</div>
       				
        </section>
        <!--================End Faq Area =================-->
        
        <!--================Faq Form Area =================-->
        <section class="faq_form_area">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-9">
        				<div class="faq_left_form">
        					<div class="faq_title">
        						<h3>Didn’t find your answer? Submit your question</h3>
        					</div>
        					<form class="row contact_us_form" action="faq.php" method="post" onsubmit="return validateform()" name="myform" id="contactForm" novalidate="novalidate">
								<div class="form-group col-md-12">
									<input type="text" class="form-control"  name="email" placeholder="Email Address*">
								</div>
								<div class="form-group col-md-12">
									<input type="email" class="form-control"  name="subject" placeholder="Subject*">
								</div>
								<div class="form-group col-md-12">
									<textarea class="form-control" name="que"  rows="1" placeholder="Your Question*"></textarea>
								</div>
								<div class="form-group col-md-12">
									<button type="submit" value="submit" name="sub" class="btn pest_btn form-control">Submit now</button>
								</div>
							</form>
        				</div>
        			</div>
        			<div class="col-md-3"></div>
        		</div>
        	</div>
        </section>
        <!--================End Faq Form Area =================-->
        <!DOCTYPE html>
        <html>
        <head>
            <script> 
    function validateform()
{  
   
    var email=document.myform.email.value;
    var subject=document.myform.subject.value; 
    var que=document.myform.que.value; 
  
    

   if (name==null || email==/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myform.email.value))
    {  
            alert("Please Enter Your Email");  
            return false;  
    }

    else if(name==null || subject=="")
    {  
            alert("Please Enter Your subject");  
            return false;  
    } 

    else if(name==null || que=="")
    {  
            alert("Please Enter Your Question");  
            return false;  
    } 
   
   
}
</script>
        </head>
        <body>
        
        </body>
        </html>
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