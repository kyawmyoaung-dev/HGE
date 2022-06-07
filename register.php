<?php 
    
    include 'configs/db_connect.php';

    //$user_name = mysqli_real_escape_string($db_connect,$_POST["user_name"]);
    //$_SESSION['token'] = md5(uniqid(mt_rand(), true));


    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if($mysqli -> query("INSERT INTO USERS(user_name,email,password) VALUES('$user_name','$email','$password')")){
        session_start();
        $_SESSION["user_name"] = $user_name;
        $_SESSION["user_id"] = $mysqli -> insert_id;
        header('location: home.php');
    }
    $mysqli -> close();
?>