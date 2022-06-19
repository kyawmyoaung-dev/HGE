<?php

include 'db_connect.php';

//user table
$user_table_query ="CREATE TABLE USERS(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL,
    password VARCHAR(500) NOT NULL,
    view_count INT NULL,
    login_attempt INT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

//dorp table if exists
if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`users`")){
    echo 'users table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$user_table_query)){
    echo 'users table created successfully! <br/>';
}



//product  table
$product_table ="CREATE TABLE PRODUCTS(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(500) NOT NULL,
    description VARCHAR(500) NOT NULL,
    category_id INT UNSIGNED ,
    producttype_id INT UNSIGNED,
    FOREIGN KEY (category_id)
        REFERENCES CATEGORIES(id)
        ON DELETE CASCADE,
    FOREIGN KEY (producttype_id)
        REFERENCES PRODUCTTYPES(id)
        ON DELETE CASCADE,
    quantity INT NOT NULL,
    buying_price DECIMAL NOT NULL,
    selling_price DECIMAL NOT NULL,
    image_1 NVARCHAR(500) NULL,
    image_2 NVARCHAR(500) NULL,
    image_3 NVARCHAR(500) NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`PRODUCTS`")){
    echo 'PRODUCTS table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$product_table)){
    echo 'PRODUCTS table created successfully! <br/>';
}


// //categories table
// $categories_table_query ="CREATE TABLE CATEGORIES(
//     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     code VARCHAR(500) NOT NULL,
//     description VARCHAR(500) NOT NULL,
//     created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`CATEGORIES`")){
//     echo 'categories table drop successfully! <br/>';
// }
// if(mysqli_query($db_connect,$categories_table_query)){
//     echo 'categories table created successfully! <br/>';
// }

// //product type table
// $product_type_table ="CREATE TABLE PRODUCTTYPES(
//     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     code VARCHAR(500) NOT NULL,
//     description VARCHAR(500) NOT NULL,
//     created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`PRODUCTTYPES`")){
//     echo 'product_types table drop successfully! <br/>';
// }
// if(mysqli_query($db_connect,$product_type_table)){
//     echo 'product_type table created successfully! <br/>';
// }

?>