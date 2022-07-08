<?php

//example code
//$product = array("id" =>$_POST['id'] , "code"  => $_POST['code']);
//$key = array_search($product["id"], array_column($product_list, 'id')) ?? null;
//unset($product_list[0]); remove value from array

function search_key($id,$array){
    foreach($array as $key=> $item){
        if($item["id"] == $id){
            return $key;
        }
    }
    return null;
}

if (isset($_POST["add_to_cart_wanted"]) || isset($_POST["add_to_cart_gallery"])){
      
    $product_list = [];    

    $product = [];
    $product["id"] = $_POST['id'];
    $product["code"] = $_POST['code'];
    $product["description"] = $_POST['description'];
    $product["price"] = $_POST['price'];
    $product["product_type"] = $_POST['product_type'];
    $product["category"] = $_POST['category'];
    $product["image_1"] = $_POST['image_1'];
    $product["quantity"] = 1;
    $product["amount"] = $product["quantity"] *  $product["price"];

    session_start();
    if(isset($_SESSION["item_list"])){    
        $product_list= $_SESSION["item_list"];
    }

    //check the already exists product if ture, update the qty
    $key = search_key($product["id"],$product_list);

    //update qty and amount
    if(isset($key)){
        $product_list[$key]["quantity"] += 1;
        $product_list[$key]["amount"] =  $product_list[$key]["quantity"] *  $product_list[$key]["price"];
    }else{
        //new item
        array_push($product_list,$product);
    }

    
    $_SESSION["item_list"] = $product_list;

    if(isset($_POST["add_to_cart_wanted"])){
        header('location: wanted.php');
    }elseif(isset($_POST["add_to_cart_gallery"])){
        header('location: gallery.php');
    }
    
}    
?>