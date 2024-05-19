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
$sql=mysqli_query($conn,"select * from slider");

$sql2=mysqli_query($conn,"select * from menu");

$sql3=mysqli_query($conn,"select * from ourchef");

$sql4=mysqli_query($conn,"select * from comments");

$sql5=mysqli_query($conn,"select * from subcategory");


// $row=mysqli_fetch_array($sql);
/*echo "<pre>";
print_r($row);
die;*/
?>
        
        <!--================Main Header Area =================-->

        <!--================End Main Header Area =================-->
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                  <?php
                      while($row=mysqli_fetch_array($sql))
                      {


                      
                  ?>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="ADMIN PANEL/image/<?php echo $row["image"]; ?>"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']" 
                            data-fontsize="['65','65','65','40','30']"
                            data-lineheight="['80','80','80','50','40']"
                            data-width="['800','800','800','500']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']"><?php echo $row["title"]; ?></div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']"  
                                data-fontsize="['20','20','20','20','16']"
                                data-lineheight="['28','28','28','28']"
                                data-width="['640','640','640','640','350']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <?php echo $row["content"]; ?>
                            </div>
                            
                            <div class="tp-caption tp-resizeme slider_button" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <!--<a class="main_btn" href="#">See the recipe</a>-->
                            </div>
                        </div>
                    </li>
                    <?php
                         }
                    ?>
                    
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_bakery_area">
          <div class="container">
            <div class="welcome_bakery_inner p_100">
              <div class="row">
                <div class="col-lg-6">
                  <div class="main_title">
                <h2>Welcome to our Bakery</h2>
                <p>Delicious Cakes are Available for Any Occasions, Pick Your Own Delivery Time. Birthday Cakes, Anniversary Cakes, Pinata Cakes, Order Now. Suitable for Any Occasion. Same Day Delivery. 100% Fresh.</p>
              </div>
                  <div class="welcome_left_text">
                    <p>Our products are produced in a centrally air-conditioned production center conforming to ISO/HACCP norms.Your health is our focus. We are constantly evolving our recipes to better meet your needs and the needs of your loved ones!</p>
                    <!--<a class="pink_btn" href="#">Know more about us</a>-->
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="welcome_img">
                    <img class="img-fluid" src="img/cake-feature/welcome-right.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="cake_feature_inner">
              <div class="main_title">
            <h2>Our Featured Cakes</h2>
            
          </div>
              <div class="cake_feature_slider owl-carousel">
                <?php  
                   
                      while($row=mysqli_fetch_array($sql5))
                      {
                ?>
                <div class="item">
                  <div class="cake_feature_item">
                    <div class="cake_img">
                      <img src="ADMIN PANEL/image/<?php echo $row["image"]; ?>" alt="">
                    </div>
                    <div class="cake_text">
                      <h4 >&#8377;<?php echo $row["price"]; ?></h4>
                      <h3><?php echo $row["content"]; ?></h3>
                     <a class="pest_btn" href="product-details.php?sub_cat_id=<?php echo $row['sub_cat_id']; ?>">
                                Read More</a>
                    </div>
                  </div>

                </div>
                <?php 
                }
                ?>
               <!-- <div class="item">
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
                <div class="item">
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
                <div class="item">
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
                </div>-->
              </div>
            </div>
          </div>
        </section>
        <!--================End Welcome Area =================-->
        
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
        
        <!--================Service Area =================-->
        <section class="service_area">
          <div class="container">
            <div class="single_w_title">
              <h2>Main Cakes We Provide</h2>
            </div>
            <div class="row service_inner">
              <div class="col-lg-4 col-6">
                <div class="service_item">
                  <i class="flaticon-food-1"></i>
                  
                  <h4>Birthday Cakes</h4>
                  <p>A birthday cake is a cake eaten as part of a birthday celebration. Birthday cakes are often layer cakes with frosting served with small lit candles on top representing the celebrant's age.</p>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="service_item">
                  <i class="flaticon-food-2"></i>
                  <h4>Pinata Cakes</h4>
                  <p> The 3-D looking cakes are called Pinata cakes and have taken the internet by a storm for a good reason. They’re incredibly fun to make and can be filled with anything you want- making for a great surprise.</p>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="service_item">
                  <i class="flaticon-food"></i>
                  <h4>Wedding Cakes</h4>
                  <p>In modern Western culture, the cake is usually on display and served to guests at the reception. Traditionally, wedding cakes were made to bring good luck to all guests and the couple. </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Service Area =================-->
        
        <!--================Discover Menu Area =================-->
        <section class="discover_menu_area">
          <div class="discover_menu_inner">
            <div class="container">
              <div class="main_title">
           <center><h2 >Discover Menu</h2></center> 
            
          </div>
              <div class="row">
                <?php while($row=mysqli_fetch_array($sql2))
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
                  </div>
                </div>
              </div>
       
        </section>
        <!--================End Discover Menu Area =================-->
        
        <!--================Client Says Area =================-->
        <section class="client_says_area p_100">
            

          <div class="container">
            <div class="client_says_inner">
              <div class="c_says_title">
                <h2>What Our Client Says</h2>
              </div>
              <div class="client_says_slider owl-carousel">
                <?php while($row=mysqli_fetch_array($sql4))
            {
             ?>
                <div class="item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="ADMIN PANEL/image/<?php echo $row['image']; ?>" alt="">
                      <h3>“</h3>
                    </div>
                    <div class="media-body">
                      <p><?php echo $row['comments']; ?></p>
                       <h5>- <?php echo $row['c_name']; ?></h5>
                    </div>
                  </div>

                </div>
        
          <?php }
        ?>
              </div>
            </div>
                     
        </section>
        <!--================End Client Says Area =================-->
        
        <!--================End Client Says Area =================-->
        <section class="our_chef_area p_100">
          <div class="container">
            <div class="row our_chef_inner">
              <div class="col-lg-3 col-6">
                <div class="chef_text_item">
                  <div class="main_title">
                <h2>Our Chefs</h2>
                <!--<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion.</p>-->
              </div>
                </div>
              </div>
              <div class="row">
                 <?php while($row=mysqli_fetch_array($sql3))
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
           
        </section>
        <!--================End Client Says Area =================-->
        
        <!--================Latest News Area =================-->
       <!-- <section class="latest_news_area p_100">
          <div class="container">
            <div class="main_title">
          <h2>Latest Blog</h2>
          <h5>an turn into your instructor your helper, your </h5>
        </div>
            <div class="row latest_news_inner">
              <div class="col-lg-4 col-md-6">
                <div class="l_news_image">
                  <div class="l_news_img">
                    <img class="img-fluid" src="img/blog/latest-news/l-news-1.jpg" alt="">
                  </div>
                  <div class="l_news_hover">
                    <a href="#"><h5>Oct 15, 2016</h5></a>
                    <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="l_news_item">
                  <div class="l_news_img">
                    <img class="img-fluid" src="img/blog/latest-news/l-news-2.jpg" alt="">
                  </div>
                  <div class="l_news_text">
                    <a href="#"><h5>Oct 15, 2016</h5></a>
                    <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                    <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="l_news_item">
                  <div class="l_news_img">
                    <img class="img-fluid" src="img/blog/latest-news/l-news-3.jpg" alt="">
                  </div>
                  <div class="l_news_text">
                    <a href="#"><h5>Oct 15, 2016</h5></a>
                    <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                    <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>-->
        <!--================End Latest News Area =================-->
        
        <!--================Footer Area =================-->
        <?php
            include('footer.php');

       
        ?>

