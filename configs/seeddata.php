<?php

include 'db_connect.php';

//new product type
$query = "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('P001','P001_Description','1','1','100','500','600','./images/product_1.jpg','./images/product_1.jpg','./images/product_1.jpg');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('P002','P002_Description','1','1','100','700','750','./images/product_1.jpg','./images/product_1.jpg','./images/product_1.jpg');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('P003','P003_Description','1','1','100','800','842','./images/product_1.jpg','./images/product_1.jpg','./images/product_1.jpg');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('P004','P004_Description','1','1','100','900','950','./images/product_1.jpg','./images/product_1.jpg','./images/product_1.jpg');";

//second hand product type
$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('P005','P005_Description','1','2','80','85','142','./images/product_1.jpg','./images/product_1.jpg','./images/product_1.jpg');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('P006','P006_Description','1','2','100','90','95','./images/product_1.jpg','./images/product_1.jpg','./images/product_1.jpg');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('P007','P007_Description','1','2','100','101','125','./images/product_1.jpg','./images/product_1.jpg','./images/product_1.jpg');";

$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('P008','P008_Description','1','2','100','96','100','./images/product_1.jpg','./images/product_1.jpg','./images/product_1.jpg');";


if(mysqli_multi_query($db_connect,$query)){
    echo 'product created successfully!';
}else{
    echo 'product created faill!';
}

?>