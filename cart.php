<?php  
    include_once '_header.php';
    
 ?>


<div class="container">
    <h1>cart page</h1>

    <?php
      
        $product_list = $_SESSION["item_list"];

        foreach($product_list as $key=> $product){
            
            echo 'key'.$key .' code'.$product['code']. ' qty'. $product['quantity']. ' amount'. $product['amount']. '<br/>';
        }
    ?>
</div>

<?php  include 'footer.php' ?>