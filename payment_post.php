<?php 
      include 'configs/db_connect.php';

      if(isset($_POST["payment"])){

        $user_id = $_SESSION["user_id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address_1 = $_POST["address_1"];
        $address_2 = $_POST["address_2"];
        $paymnet_option = $_POST["paymnet_option"];
        $card_number = $_POST["card_number"];
        $expiration_date = $_POST["expiration_date"];
        $total_amount = $_POST["total_amount"];
        $item_count = $_POST["item_count"];

        
        $query = "INSERT INTO `payment` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `address_1`, `address_2`, `payment_option`, `card_numbber`, `expiration_date`, `item_count`, `total_amount`) 
                                VALUES ( '$user_id', '$first_name' , '$last_name', '$email', '$phone', '$address_1', '$address_2', '$paymnet_option', '$card_number', '$expiration_date', '$item_count', '$total_amount');";

        if(mysqli_query($db_connect,$query)){
            session_start();
            unset($_SESSION['item_list']);
            $_SESSION["Message"] = "Hello, Thanks for purchasing form HGE. Your order has been created successfuly.";
            header('location: message.php');
        }else{
            session_start();
            $_SESSION["Message"] = "Payment process failed. Please try again.";
            header('location: message.php');
        }

      }
   

?>