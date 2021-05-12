<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Chevrolet Malaysia</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 
  <body>

<?php
    include "include/header.php";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "enquiryform";
    // create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // check connection
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    echo "
    <table  class='content-table' style='margin-left:140px;'>
      <tr>
        <th>First Name</th>
        <th>Lastname</th>
        <th>E-mail</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Postcode</th>
        <th>Phone Number</th>
        <th>Product</th>
        <th>Message</th>
       </tr>
      ";
    $select = "SELECT * FROM enquiry ORDER BY product";
    $output = mysqli_query ($conn, $select);
    while ($row = mysqli_fetch_assoc($output)) {
      echo "
      <tr><td>{$row['firstname']}</td>
          <td>{$row['lastname']}</td>
          <td>{$row['email']}</td>
          <td>{$row['house_address']}</td>
          <td>{$row['city']}</td>
          <td>{$row['state_']}</td>
          <td>{$row['postcode']}</td>
          <td>{$row['phonenumber']}</td>
          <td>{$row['product']}</td>
          <td>{$row['comment']}</td>
      </tr>
          ";
    }
    echo "
    </table>";
    echo
    include "include/footer.php";
 ?>     
</body>
</html>