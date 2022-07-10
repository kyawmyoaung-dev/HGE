<?php  include_once '_header.php'; ?>

 <!-- shopping cart start -->
 <div class="cart_list">
        <div class="container">
            <h3>Shopping Cart</h3>
            <div class="row ">
                <div class="col-12">
                    <div class="cart">
                        <table class="table table-bordered border-secondary text-white">
                            <tr>
                                <!-- <th>Code</th> -->
                                <th></th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Product Type</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th></th>
                            </tr>

                            <?php 
                                $product_list = $_SESSION["item_list"]; 
                                $total_price = 0;
                            ?>
                            <?php foreach($product_list as $key=> $product){  ?>
                                <tr>
                                    <!-- <td><?php echo $product['code']; ?> </td>  -->
                                    <td>
                                        <img width="100px" height="100px" src="<?php echo $product['image_1']; ?>" alt="<?php echo $product['description']; ?> ">
                                    </td>
                                    <td><?php echo $product['description']; ?> </td> 
                                    <td><?php echo $product['category']; ?> </td> 
                                    <td><?php echo $product['product_type']; ?> </td> 
                                    <td><?php echo '$ ' . $product['price']; ?> </td> 
                                    <td><?php echo $product['quantity']; ?> </td> 
                                    <td><?php echo '$ ' . $product['amount']; ?> </td> 
                                    <td>                                        
                                        <form action="remove_cart.php" method="POST">
                                            <input type="hidden" name="key" id="key" value="<?php echo $key; ?>">
                                            <button type="submit" class="btn btn-danger"  name="remove_cart"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php 
                                    $total_price = $product['amount'] + $total_price;
                                ?>
                            <?php } ?>
                            <tr>
                                <td class="text-end text-uppercase" colspan="6">Total Amount</td>
                                <td class="text-start" colspan="2"><?php echo '$ ' . $total_price; ?></td>
                            </tr>             
                        </table>
                    </div>
                </div>
            </div>

            <div class="mb-3 d-flex justify-content-end">
                <form action="payment.php" method="POST">
                    <input type="hidden" name="item_count" id="item_count" value="<?php echo count($product_list); ?>" />
                    <input type="hidden" name="total_amount" id="total_amount" value="<?php echo $total_price; ?>" />
                    <input type="submit" class="btn btn_orange text-uppercase" value="Check out">
                </form>
                
            </div>
        </div>
    </div>
    <!-- shopping cart end -->

    

<?php  include 'footer.php' ?>