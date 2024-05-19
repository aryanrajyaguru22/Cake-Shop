<?php
ob_start();
session_start();


if(@$_SESSION['user']['u_id']=='')
{
  header("location:login.php");
}
include('header.php');

?>

 <section class="banner_area">
            <div class="container">
                <div class="banner_text">
                    <h3>Past Order</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="pastorder.php">Past Order</a></li>
                    </ul>
                </div>
            </div>
        </section>
 <section class="cart_table_area p_100">

<?php
$user_id = $_SESSION['user']['u_id'];

//$sql2 = mysqli_query($conn, "select * from cart where cart_user_id ='$user_id' AND `status`='success'");

$sql4 = mysqli_query($conn, "select * from cart JOIN subcategory ON cart.cart_subcate_id = subcategory.sub_cat_id where cart.cart_user_id='$user_id' AND cart.status='success'");
?>



<div class="table-responsive">
    <table class="table">

                    <thead>
                            <tr>
                               
                                <th scope="col">Preview</th>
                                <th scope="col">Product</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Type</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Services</th>
                                <th scope="col">Total</th>
                                
                            </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <?php while($row2=mysqli_fetch_array($sql4)){ ?>
                                <td>
                                        <img src="Admin panel/image/<?php echo $row2['image']; ?>" height="120" width="120" alt="">
                                    </td>
                                <td><?php echo $row2['content']; ?></td>
                                <td><?php echo $row2['weight'];?></td>
                                <td> <?php echo $row2['type'];?></td>
                                <td><?php echo $row2['quantity'];?></td>
                                <td><?php echo $row2['s_name'];?></td>
                                 <td><?php echo $row2['total'];?></td>
                            </tr>
    
<?php } ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                
                            </tr>
</tbody>
</table>
</div>
</section>

<?php
            include('footer.php');

       
        ?>