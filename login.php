<?php 
    
    include 'configs/db_connect.php';

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $check_email_query = "SELECT * FROM `users` WHERE email = '$email'";

    $result = mysqli_query($db_connect,$check_email_query);

    //check email
    if(mysqli_num_rows($result) > 0 ){
        
        $row = mysqli_fetch_assoc($result);
        $user_name = $row["user_name"]; 
        $_email = $row["email"];
        $_password = $row["password"];
        $id =  $row['id'];
        $view_count = $row['view_count'] + 1;
        $login_attempt = $row['login_attempt'];

        //check password
        if($password == $_password){
            //update view count
            $update_query = "UPDATE `users` SET `view_count` = '$view_count' WHERE `users`.`id` = $id";
            mysqli_query($db_connect,$update_query);

             //clean login attempt
             $update_login_attempt_query = "UPDATE `users` SET `login_attempt` = 0 WHERE `users`.`id` = $id";
             mysqli_query($db_connect,$update_login_attempt_query);

            session_start();
            $_SESSION["user_name"] = $user_name;
            $_SESSION["user_id"] =  $id ;    

            if($_COOKIE['accept_cookie'] === 'true'){
                setcookie("u_e", $email, time()+30*24*60*60);
                setcookie("u_p", $password, time()+30*24*60*60);
            }
            mysqli_free_result($result);

            mysqli_close($db_connect);

            header('location: home.php');
        }else{

             //update login attempt
             $login_attempt++;
             $update_login_attempt_query = "UPDATE `users` SET `login_attempt` = '$login_attempt' WHERE `users`.`id` = $id";
             mysqli_query($db_connect,$update_login_attempt_query);

             session_start();
             if($login_attempt >= 3){              
                $_SESSION["Message"] = "You have entered an incorrect password too many times and your account is locked. 
                Please try again after 3 min.";
                header('location: message.php');
             }else{
                session_start();
                $_SESSION["Message"] = "Your password is invalid! Please ensure email and password are vaild.";
                header('location: message.php');
             }
           
        }
        
    }else{
        session_start();
        $_SESSION["Message"] = "Login failed! Please ensure email and password are vaild.";
        header('location: message.php');
    }

?>