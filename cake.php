<?php
session_start();
// if($_SESSION['user']=='')
// {
//   header("location:login.php");
// }
include('header.php');
?>

<?php

if(!empty($_GET['catid'])){
    $catId = $_GET['catid'];
    $sub2=mysqli_query($conn,"select * from subcategory where `cat_id`='$catId'");
}else{
    $sub2=mysqli_query($conn,"select * from subcategory");
}

$sql=mysqli_query($conn,"select * from product");
$sql2=mysqli_query($conn,"select * from category");


?>


    <body>
        
        <!--================Main Header Area =================-->
      
        <!--================End Main Header Area =================-->
        <!--================End Main Header Area =================-->
        <section class="banner_area p_100">
            <div class="container">
                <div class="banner_text">
                    <h3>Our Cakes</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="our_cakes_area p_100">
            <div class="container">
                <div class="main_title">
                    <h2>Our Cakes</h2><br>
                    <div class="cake_feature_row row">
                    <?php
                    
                      while($row=mysqli_fetch_array($sub2))
                      {
                ?>
                    <div class="col-lg-3 col-md-4 col-12">
                        
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
                </div>
                </div>

                
                
                    
            </div>
        </section>

       <!-- <section class="bakery_video_area">
            <div class="container">
                <div class="video_inner">
                    <h3>Real Taste</h3>
                    <p>A light, sour wheat dough with roasted walnuts and freshly picked rosemary, thyme, poppy seeds, parsley and sage</p>
                    <div class="media">
                        <div class="d-flex">
                            <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="flaticon-play-button"></i></a>
                        </div>
                        <div class="media-body">
                            <h5>Watch intro video <br />about us</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--================End Blog Main Area =================-->
        
        <!--================Special Recipe Area =================-->
       <!-- <section class="special_recipe_area">
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
        

        
        
    </body>

</html>

<?php
            include('footer.php');

       
        ?>