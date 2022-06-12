<?php  include 'admin_header.php' ?>
<?php 
    
    include '../configs/db_connect.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $code = $_POST["code"];
        $description = $_POST["description"];
        $category_id = $_POST["category"];
        $producttype_id = $_POST["product_type"];
        $quantity = $_POST["quantity"];
        $buying_price = $_POST["buying_price"];
        $selling_price = $_POST["selling_price"];
        
        echo 'category_id'. $category_id;
        echo 'producttype_id'. $producttype_id;

        $query = "INSERT INTO PRODUCTS(code,description,category_id,producttype_id,quantity,buying_price,selling_price)
                                 VALUES('$code','$description','$category_id','$producttype_id','$quantity','$buying_price','$selling_price')";
    
        if(mysqli_query($db_connect,$query)){
            header('location: index.php');
        }else{
            session_start();
            $_SESSION["Message"] = "Product Insert failed. Please try again.";
            header('location: message.php');
        }
    
        mysqli_close($db_connect);
    }

   
?>

<div class="container">
    <h3>Product Entry</h3>
    <hr>

    <form action="product.php" method="POST">
        <div class="mb-3">
            <label class="form-label" for="">Code :</label>
            <input class="form-control" type="text" name="code" id="code">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Description :</label>
            <input class="form-control" type="text" name="description" id="description">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Category :</label>
            <select class="form-control" id="category" name="category">
            <?php 
                
                include '../configs/db_connect.php';
                $all_categories = mysqli_query($db_connect,"SELECT * FROM `categories`");
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["id"]; ?>">
                    <?php echo $category["code"];?>
                </option>
            <?php 
                endwhile; 
            ?>
            </select>           
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Product Type:</label>
            <select class="form-control" id="product_type" name="product_type">
            <?php 
                
                include '../configs/db_connect.php';
                $all_categories = mysqli_query($db_connect,"SELECT * FROM `producttypes`");
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["id"]; ?>">
                    <?php echo $category["code"];?>
                </option>
            <?php 
                endwhile; 
            ?>
            </select>           
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Quantity :</label>
            <input class="form-control" type="number" name="quantity" id="quantity">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Buying Price :</label>
            <input class="form-control" type="number" name="buying_price" id="buying_price">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Selling Price :</label>
            <input class="form-control" type="number" name="selling_price" id="selling_price">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Save"> 
        </div>
    </form>
</div>

<?php  include 'admin_footer.php' ?>