<?php

include 'db_connect.php';

//product types
// $product_type = "INSERT INTO `producttypes`(`code`, `description`) VALUES ('NEW','NEW');";
// $product_type .= "INSERT INTO `producttypes`(`code`, `description`) VALUES ('SECOND HAND','SCOND HAND');";

// if(mysqli_query($db_connect,"DELETE FROM `producttypes`")){
//         echo 'product types delete successfully! <br/>';
// }
// if(mysqli_multi_query($db_connect,$product_type)){
//         echo 'product types created successfully!';
//     }else{
//         echo 'product types created faill!';
// }   


//categories data insert
// $category_query = "INSERT INTO `categories`(`code`, `description`) VALUES ('BARBELL','BARBELL');";
// $category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('BENCH','BENCH');";
// $category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('DUMBBELL','DUMBBELL');";
// $category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('RACKS','RACKS');";
// $category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('WEIGHT PLATES','WEIGHT PLATES');";
// $category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('KETTLE BELLS','KETTLE BELLS');";

// if(mysqli_query($db_connect,"DELETE FROM `categories`")){
//         echo 'categories delete successfully! <br/>';
// }

// if(mysqli_multi_query($db_connect,$category_query)){
//         echo 'categories created successfully!';
//     }else{
//         echo 'categories created faill!';
//     }    



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
mysqli_close($db_connect);

?>