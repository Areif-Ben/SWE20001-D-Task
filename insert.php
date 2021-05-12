<!DOCTYPE html>
<html lang="en">
<head>
<title>Enquiry</title>
<link  rel="stylesheet" type="text/css" href="styles/style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
</head>
<body>
<?php
include "include/header.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquiryform";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
$firstname = $_POST["firstname_hidden"];
$lastname = $_POST["lastname_hidden"];
$email = $_POST["email_hidden"];
$address = $_POST["address_hidden"];
$city = $_POST["city_hidden"];
$state = $_POST["state_hidden"];
$postcode = $_POST["postcode_hidden"];
$phonenumber = $_POST["phonenumber_hidden"];
$product = $_POST["product_hidden"];
$comment = $_POST["comment_hidden"];
$value = "INSERT INTO enquiry (firstname,lastname,email,house_address,city,state_,postcode,phonenumber,product,comment)
VALUES ('$firstname', '$lastname', '$email',  '$address', '$city', '$state', 
'$postcode', '$phonenumber', '$product', '$comment')";
if (mysqli_query($conn, $value)) {
}
mysqli_close($conn);
?>
<div class="mainenquiry">
<div class="overlay"></div>
<div class="heading">
<h1 class="head">THANK YOU FOR YOUR <span>ENQUIRY</span></h1>
<h3 >We will contact you soon!</h3>
<div class="btns">
<a class="btn1" href="index.html">HOME</a>
<a class="btn2" href="product.html">VIEW SHOWROOM</a>
</div>
</div>
</div>
<?php
include "include/footer.php";
?>
</body>
</html>