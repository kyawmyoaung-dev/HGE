<?php

    if(isset($_POST["allow"])){
        setcookie("accept_cookie", 'true', time()+30*24*60*60);
    }elseif(isset($_POST["deny"])){
        setcookie("accept_cookie", 'false', time()+30*24*60*60);       
    }
    
    header('location: home.php');
?>