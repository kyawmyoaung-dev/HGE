<?php

if (isset($_POST["remove_cart"])){
   
    $key = $_POST["key"];

    $product_list;

    session_start();
    if(isset($_SESSION["item_list"])){    
        $product_list= $_SESSION["item_list"];
    }

    unset($product_list[$key]);
    
    $_SESSION["item_list"] = $product_list;

    header('location: cart.php');
}

?>