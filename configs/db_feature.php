<?php

include 'db_connect.php';

//Smart Watch
$query = "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('Amazfit T-Rex 2','Amazfit T-Rex 2','5','3','100','300','320','./images/feature_1.png','./images/feature_1.png','./images/feature_1.png');";

//Fitness Tracking
$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('HRM-Pro™','HRM-Pro™','6','3','100','200','236','./images/feature_2.jpg','./images/feature_2.jpg','./images/feature_2.jpg');";

//Smart Glasses
$query .= "INSERT INTO `products`(`code`, `description`, `category_id`, `producttype_id`, `quantity`, `buying_price`, `selling_price`, `image_1`, `image_2`, `image_3`) 
        VALUES ('Raptor','Raptor','7','3','100','180','195','./images/feature_3.png','./images/feature_3.png','./images/feature_3.png');";        



if(mysqli_multi_query($db_connect,$query)){
    echo 'featured product created successfully!';
}else{
    echo 'featured product created faill!';
}
mysqli_close($db_connect);

?>