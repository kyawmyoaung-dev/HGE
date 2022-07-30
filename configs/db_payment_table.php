<?php

include 'db_connect.php';

//payment  table
$payment_table ="CREATE TABLE PAYMENT(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(500)  NULL,
    first_name VARCHAR(500)  NULL,
    last_name VARCHAR(500)  NULL,
    email VARCHAR(500)  NULL,
    phone VARCHAR(500)  NULL,
    address_1 VARCHAR(500)  NULL,
    address_2 VARCHAR(500)  NULL,
    payment_option VARCHAR(500)  NULL,
    card_numbber VARCHAR(500)  NULL,
    expiration_date VARCHAR(500)  NULL,
    item_count VARCHAR(500)  NULL,
    total_amount INT  NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($db_connect,"DROP TABLE IF EXISTS `home_gym_equipment`.`PAYMENT`")){
    echo 'PAYMENT table drop successfully! <br/>';
}
if(mysqli_query($db_connect,$payment_table)){
    echo 'PAYMENT table created successfully! <br/>';
}

?>