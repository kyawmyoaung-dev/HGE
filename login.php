<?php 
    
    include 'configs/db_connect.php';

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $query = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($db_connect,$query);

    if(mysqli_num_rows($result) > 0 ){

        $row = mysqli_fetch_assoc($result);
        $user_name = $row["user_name"]; 
        $id =  $row['id'];

        session_start();
        $_SESSION["user_name"] = $user_name;
        $_SESSION["user_id"] =  $id ;
     
        mysqli_free_result($result);

        mysqli_close($db_connect);

        header('location: home.php');
    }else{
        session_start();
        $_SESSION["Message"] = "Login failed! Please ensure email and password are vaild.";
        header('location: message.php');
    }

?>