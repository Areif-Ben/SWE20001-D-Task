<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    // create connection
    $conn = mysqli_connect($servername, $username, $password);
    // check connection
    if (!$conn){
        die("Connection Failed: " . mysqli_connect_error());
    }
    // create database
    $database = "CREATE DATABASE enquiryform";
    if (mysqli_query($conn, $database)){
    } 
mysqli_close($conn);
?>
