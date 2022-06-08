<?php 
    
    include 'configs/db_connect.php';
    
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $query = "INSERT INTO USERS(user_name,email,password) VALUES('$user_name','$email','$password')";

    if(mysqli_query($db_connect,$query)){
        session_start();
        $_SESSION["user_name"] = $user_name;
        $_SESSION["user_id"] = mysqli_insert_id($db_connect);
        header('location: home.php');
    }else{
        session_start();
        $_SESSION["Message"] = "Register failed. Please try again.";
        header('location: message.php');
    }

    mysqli_close($db_connect);
?>