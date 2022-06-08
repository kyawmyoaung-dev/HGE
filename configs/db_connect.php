<?php

    $db_connect = mysqli_connect('localhost','admin','admin@123!@#','home_gym_equipment');

    if(mysqli_connect_errno()){
        echo 'db connect error' . mysqli_connect_error();
        exit();
    }
    ?>