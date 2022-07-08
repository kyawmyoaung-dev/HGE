<?php   include '_header.php'; ?>
<?php   include 'configs/db_connect.php'; ?>

  <!-- gallery page start -->
  <div class="gallery">
        <div class="container">
            <h3 class="text-center title">Our Products</h3>

            <div class="row my-3">
                <div class="col-12">
                    <div class="product_categories">
                           <form method="GET" id="category_form" name="category_form" action="gallery.php">  
                            <?php if(!isset($_GET["category"]) || $_GET["category"] == "ALL"){ ?>                                                              
                                     <button type="submit" class="btn btn-link active" value="ALL" name="category" >ALL</button>
                                     <?php }else{ ?>
                                        <button type="submit" class="btn btn-link" value="ALL" name="category" >ALL</button>
                                        <?php } ?>
                            <?php
                                $category_query = "SELECT * FROM `categories`";

                                $category_result = mysqli_query($db_connect,$category_query);

                                while($category = mysqli_fetch_array($category_result,MYSQLI_ASSOC)){ ?>

                                    <?php if(isset($_GET["category"]) && $_GET["category"] ==$category["code"] ) {?>
                                        <button type="submit" class="btn btn-link active" value='<?php echo $category["code"]; ?>' name='category' > <?php echo $category["code"]; ?> </button>
                                    <?php }else{ ?>
                                        <button type="submit" class="btn btn-link" value='<?php echo $category["code"]; ?>' name='category' > <?php echo $category["code"]; ?> </button>
                                        <?php } ?>
                             <?php   } ?>

                            
                           </form>
                    </div>
                </div>
            </div>
            <div class="row mb-3">

                <?php

                        $query = "";

                        if(isset($_GET["category"]) && $_GET["category"] != "ALL"){
                            $category = $_GET["category"];

                            $query = "SELECT 
                                products.id,
                                products.code,
                                products.description,
                                products.selling_price,
                                products.quantity,
                                products.image_1,
                                products.image_2,
                                products.image_3,
                                producttypes.description as product_type, 
                                categories.code as category_code
                            FROM `products` 
                            INNER JOIN producttypes ON products.producttype_id = producttypes.id 
                            INNER JOIN categories ON products.category_id = categories.id
                            WHERE categories.code = '$category';";
                        }else{
                            $query = "SELECT 
                                products.id,
                                products.code,
                                products.description,
                                products.selling_price,
                                products.quantity,
                                products.image_1,
                                products.image_2,
                                products.image_3,
                                producttypes.description as product_type, 
                                categories.code as category_code
                            FROM `products` 
                            INNER JOIN producttypes ON products.producttype_id = producttypes.id 
                            INNER JOIN categories ON products.category_id = categories.id;";
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
                                <input type="submit"  name="add_to_cart_gallery" class="btn btn_orange" value="add to cart">
                            </form>
                            
                            </div>
                        </div>
                        <?php    } ?>
            </div>
            
        </div>
    </div>
    <!-- gallery page end -->

<?php  include 'footer.php' ?>