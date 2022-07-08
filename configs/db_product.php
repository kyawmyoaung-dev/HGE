<?php

include 'db_connect.php';

//BARBELL
$query = "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('LOCK JAW COLLAR CLAMP CLIPS','LOCK JAW COLLAR CLAMP CLIPS','1','1','100','500','600','./images/product_1.png','./images/product_1.png','./images/product_1.png');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('2.2M OLYMPIC BAR','2.2M OLYMPIC BAR','1','2','100','700','750','./images/product_2.png','./images/product_2.png','./images/product_2.png');";


//RACKS
$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('FULL POWER RACK WITH LATS CABLE MACHINE AND OPTIONS','FULL POWER RACK WITH LATS CABLE MACHINE AND OPTIONS','2','1','100','800','842','./images/product_3.png','./images/product_3.png','./images/product_3.png');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('FOLDING WEIGHT BENCH RACK','FOLDING WEIGHT BENCH RACK','2','2','100','900','950','./images/product_4.png','./images/product_4.png','./images/product_4.png');";

//BENCHES
$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('Folding Adjustable Bench','Folding Adjustable Bench','3','1','80','85','142','./images/product_5.png','./images/product_5.png','./images/product_5.png');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('Black FID Adjustable Bench','Black FID Adjustable Bench','3','2','100','90','95','./images/product_6.png','./images/product_6.png','./images/product_6.png');";

//DUMBBELL
$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('Vinyl or Neoprene Coated Dumbbells','Vinyl or Neoprene Coated Dumbbells','4','1','100','101','125','./images/product_7.png','./images/product_7.png','./images/product_7.png');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('Flexbell Adjustable Dumbbell (20 or 32KG)','Flexbell Adjustable Dumbbell (20 or 32KG)','4','2','100','96','100','./images/product_8.png','./images/product_8.png','./images/product_8.png');";


if(mysqli_multi_query($db_connect,$query)){
    echo 'product created successfully!';
}else{
    echo 'product created faill!';
}
mysqli_close($db_connect);

?>