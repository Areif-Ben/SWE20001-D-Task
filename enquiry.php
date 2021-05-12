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
    include "database.php";
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
    // create table
    $sql = "CREATE TABLE enquiry (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(25) NOT NULL,
    lastname VARCHAR(25) NOT NULL,
    email VARCHAR(30) NOT NULL,
    house_address VARCHAR(96) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state_ VARCHAR(20) NOT NULL,
    postcode INT(5) NOT NULL,
    phonenumber VARCHAR(10) NOT NULL,
    product VARCHAR(20) NOT NULL,
    comment VARCHAR(100) NOT NULL
    )";
    if (mysqli_query($conn, $sql)) {
    }
    mysqli_close($conn);
    ?>       
<div class="contact-section">
    <h1>Enquiry</h1>
  <div class="border"></div>
  <form class="contact-form" action="enquiry_process.php" onsubmit = "return main_func()" method="post">
    <input type="text" class="contact-form-text" name="firstname_input" placeholder="First name" required>
    <input type="text" class="contact-form-text" name="lastname_input" placeholder="Last name" required>
          <input type="email" class="contact-form-text" name="email_input" placeholder="Email"  required>
         <fieldset>
            <legend>Address</legend>
            <label for="Stradr">Street Adress</label>
            <input type="text" class="contact-form-text" id="stradr" name="stradr_input" maxlength="40" required>
            <label for="ctytwn">City / Town</label>
            <input type="text" class="contact-form-text" maxlength="20" id="ctytwn" name="city_input" required>

            <p>State</p>
             <div class="select">
               <select name="slct_input" id="state" >
               <option value="choose" selected disabled>Choose an option...</option>
               </select>		
             </div>
<br>
            <label for="poskod">Postcode</label>
            <input type="tel" class="contact-form-postcode" maxlength="5" id="poskod" name="poskod_input" required>
        </fieldset>
   <input type="tel" class="contact-form-text" placeholder="Phone number" name="phoneno_input" maxlength="10" required>
      
       <div class="select">
         <select id="select" name="product_input" onchange="myFunction()">
         <option selected disabled value="default">Product</option>
         </select>
       </div>
    <textarea class="contact-form-text" id="messageform" name="messageform_input" placeholder="Comment..."></textarea>
    <input type="submit" class="contact-form-btn" value="Send">
  </form>
</div>
<?php
include "include/footer.php";
?>
<script src="scripts/script.js" type="text/javascript"></script> 
    </body>
</html>