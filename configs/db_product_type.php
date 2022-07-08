<?php

include 'db_connect.php';

//product types
$product_type = "INSERT INTO `producttypes`(`code`, `description`) VALUES ('NEW','NEW');";
$product_type .= "INSERT INTO `producttypes`(`code`, `description`) VALUES ('SECOND HAND','SCOND HAND');";
$product_type .= "INSERT INTO `producttypes`(`code`, `description`) VALUES ('Wearable','Wearable');";

if(mysqli_query($db_connect,"DELETE FROM `producttypes`")){
        echo 'product types delete successfully! <br/>';
}
if(mysqli_multi_query($db_connect,$product_type)){
        echo 'product types created successfully!';
    }else{
        echo 'product types created faill!';
}  

mysqli_close($db_connect);

?>