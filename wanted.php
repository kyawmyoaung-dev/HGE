<?php  
    include_once '_header.php'; 
?>

  <!-- wanted page start -->
  <div class="wanted">
        <div class="container">
            <h3 class="text-center title">Second hand gym equipment</h3>
            <form  action="wanted.php" method="get">
                <div class="search row">
                
                    <div class="col-lg-4 col-md-4 col-sm-12 d-flex p-0">
                        <input type="text" id="search" name="search" placeholder="Search Products..." class="form-control search_input me-2">
                        <input type="submit" class="btn search_button" value="Search">
                    </div>
                    <?php if(isset($_GET['search']) && $_GET['search'] != "") {?>
                    <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center align-items-center">
                        <p class="search_text mb-0">Searching for ... <?php echo $_GET['search']; ?></p>                        
                    </div>
                    <?php } ?>                      
                </div>
            </form>       
            <div class="row mb-3">
                <?php 
                     include 'configs/db_connect.php';

                     $query = "";

                     if(isset($_GET['search'])){
                        $search = $_GET['search'];
                        $query =   "SELECT products.id,products.code,products.description,products.selling_price,products.quantity,products.image_1,products.image_2,products.image_3,producttypes.description as product_type, categories.code as category_code
                        FROM `products` 
                        INNER JOIN producttypes ON products.producttype_id = producttypes.id 
                        INNER JOIN categories ON products.category_id = categories.id
                        WHERE producttypes.code = 'SECOND HAND' AND ( products.code LIKE '%$search%' OR products.description LIKE '%$search%' )";
                     }else{
                        $query =   "SELECT products.id,products.code,products.description,products.selling_price,products.quantity,products.image_1,products.image_2,products.image_3,producttypes.description as product_type, categories.code as category_code
                        FROM `products` 
                        INNER JOIN producttypes ON products.producttype_id = producttypes.id 
                        INNER JOIN categories ON products.category_id = categories.id
                        WHERE producttypes.code = 'SECOND HAND'";
                     }
                    
                 
                     $result = mysqli_query($db_connect,$query);
                     
                     while($product = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                            <div class="product_container">
                                <div class="product_img">
                                    <span class="product_type"><?php echo $product['product_type'] ?></span>
                                    <img class="img-thumbnail" src="<?php echo $product['image_1'] ?>" alt="">
                                </div>
                            <h3 class="product_description"><?php echo $product['description'] ?></h3>
                            <span class="product_price">Price : <?php echo '$'. $product['selling_price'] ?></span>
                            <span class="product_code">item code : <?php echo $product['code'] ?></span>
                            <span class="product_category">category : <?php echo $product['category_code'] ?></span>
                            <form action="addtocard.php"  method="POST">
                                <input type="hidden" id="id" name="id" value="<?php echo $product['id']; ?>">
                                <input type="hidden" id="image_1" name="image_1" value="<?php echo $product['image_1']; ?>">
                                <input type="hidden" id="code" name="code" value="<?php echo $product['code']; ?>">
                                <input type="hidden" id="description" name="description" value="<?php echo $product['description']; ?>">
                                <input type="hidden" id="price" name="price" value="<?php echo $product['selling_price']; ?>">
                                <input type="hidden" id="product_type" name="product_type" value="<?php echo $product['product_type']; ?>">
                                <input type="hidden" id="category" name="category" value="<?php echo $product['category_code']; ?>">
                                <input type="submit"  name="add_to_cart_wanted" class="btn btn_orange" value="add to cart">
                            </form>
                            
                            </div>
                        </div>
                 <?php    } ?>
            </div>
        </div>
    </div>
    <!-- wanted page end -->
<?php  include 'footer.php' ?>