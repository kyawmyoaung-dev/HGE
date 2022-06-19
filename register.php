<?php 
    
    include 'configs/db_connect.php';
    
    $user_name = strtoupper($_POST["user_name"]);
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    //check email
    $email_check_query = "SELECT * FROM `users` WHERE email = '$email'";
    $email_check_result = mysqli_query($db_connect,$email_check_query);

    if(mysqli_num_rows($email_check_result) > 0 ){
        session_start();
        $_SESSION["Message"] = "This email address is already registered.";
        header('location: message.php');
    }else{
        $query = "INSERT INTO USERS(user_name,email,password,view_count) VALUES('$user_name','$email','$password',1)";

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
    }

    mysqli_close($db_connect);
?>