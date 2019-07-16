<?php

    $server = 'localhost';
    $username = 'root';
    $password = 'root0000';
    $dbname = 'project';
    
    $conn = mysqli_connect($server , $username , $password , $dbname);
    if(!$conn){
        die(mysqli_connect_error());
    }