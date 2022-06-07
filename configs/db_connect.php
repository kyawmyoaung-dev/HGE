<?php

    $mysqli = new mysqli('localhost','admin','admin@123!@#','home_gym_equipment');

    if($mysqli -> connect_errno){
        echo 'database conneciton error : ' . $mysqli -> connect_error;
    }