<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
$database = "CREATE DATABASE enquiryform";
if (mysqli_query($conn, $database)) {
}
mysqli_close($conn);