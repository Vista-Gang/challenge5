<?php
    $serverhost="localhost:3306";
    $username="root";
    $password="";

    $conn = new mysqli($serverhost, $username, $password);

    if($conn->connect_error){
        die("connection has failed: " . $conn->connect_error);
    }
    echo("connected!");