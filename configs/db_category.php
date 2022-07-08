<?php

include 'db_connect.php';

//categories data insert
$category_query = "INSERT INTO `categories`(`code`, `description`) VALUES ('BARBELL','BARBELL');";
$category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('RACKS','RACKS');";
$category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('BENCH','BENCH');";
$category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('DUMBBELL','DUMBBELL');";

$category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('Smart Watch','Smart Watch');";
$category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('Fitness Tracking','Fitness Tracking');";
$category_query .= "INSERT INTO `categories`(`code`, `description`) VALUES ('Smart Glasses','Smart Glasses');";

if(mysqli_query($db_connect,"DELETE FROM `categories`")){
        echo 'categories delete successfully! <br/>';
}

if(mysqli_multi_query($db_connect,$category_query)){
        echo 'categories created successfully!';
    }else{
        echo 'categories created faill!';
    }    
    
    mysqli_close($db_connect);
?>