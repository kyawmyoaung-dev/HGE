<?php

include 'db_connect.php';

//users table
$user_table_query ="CREATE TABLE USERS(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL,
    password VARCHAR(500) NOT NULL,
    view_count INT NULL,
    login_attempt INT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`users`")){
    echo 'Users table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$user_table_query)){
    echo 'Users table created successfully! <br/>';
}


//Categories table
$categories_table_query ="CREATE TABLE CATEGORIES(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(500) NOT NULL,
    description VARCHAR(500) NOT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`CATEGORIES`")){
    echo 'Categories table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$categories_table_query)){
    echo 'Categories table created successfully! <br/>';
}

//Product Types table
$product_type_table ="CREATE TABLE PRODUCTTYPES(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(500) NOT NULL,
    description VARCHAR(500) NOT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`PRODUCTTYPES`")){
    echo 'Product Types table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$product_type_table)){
    echo 'Product Types table created successfully! <br/>';
}

//Products  table
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
    echo 'Products table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$product_table)){
    echo 'Products table created successfully! <br/>';
}

//Contact us table
$contact_us_table ="CREATE TABLE CONTACTUS(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500)  NULL,
    email VARCHAR(500)  NULL,
    message VARCHAR(4000)  NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`CONTACTUS`")){
    echo 'Contact us table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$contact_us_table)){
    echo 'Contact us table created successfully! <br/>';
}

//Booking table
$booking_table ="CREATE TABLE BOOKING(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(500)  NULL,
    last_name VARCHAR(500)  NULL,
    email VARCHAR(500)  NULL,
    phone VARCHAR(500)  NULL,
    booking_time datetime NULL,
    booking_type VARCHAR(500)  NULL,
    message VARCHAR(4000)  NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`BOOKING`")){
    echo 'Booking table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$booking_table)){
    echo 'Booking table created successfully! <br/>';
}


?>