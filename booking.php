<?php
    include 'configs/db_connect.php';

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $booking_time = $_POST["booking_time"];
    $booking_type = $_POST["booking_type"];
    $message = $_POST["message"];


    $query = "INSERT INTO `booking`(`first_name`, `last_name`, `email`, `phone`, `booking_time`, `booking_type`, `message`) 
            VALUES ('$first_name','$last_name','$email','$phone','$booking_time','$booking_type','$message')";

        if(mysqli_query($db_connect,$query)){
            header('location: home.php');
        }else{
            session_start();
            $_SESSION["Message"] = "Booking failed. Please try again.";
            header('location: message.php');
        }

?>