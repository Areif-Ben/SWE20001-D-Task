<?php
function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
include "include/header.php";
$firstnameErr = $lastnameErr =  $emailaddressErr =  $addressErr = $cityErr
= $stateErr = $postcodeErr  = $phonenumberErr = $commentErr = " ";
$firstname = $lastname =  $email =  $address = $city = $state = $postcode = $phonenumber = $comment = " ";
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname_input"])) {
        $firstnameErr = "First name cannot be empty";
    } elseif (ctype_alpha(str_replace('', '', $_POST["firstname_input"])) === false) {
        $firstnameErr = "First name must contain alphabetic characters only";
    } else {
        $firstname = test_input($_POST["firstname_input"]);
    }
    if (empty($_POST["lastname_input"])) {
        $lastnameErr = "Last name cannot be empty";
    } elseif (ctype_alpha(str_replace('', '', $_POST["lastname_input"])) === false) {
        $lastnameErr  = "Last name must contain alphabetic characters only";
    } else {
        $lastname = test_input($_POST["lastname_input"]);
    }
    if (empty($_POST["email_input"])) {
        $emailaddressErr = "Email cannot be empty";
    } elseif (!filter_var($_POST["email_input"], FILTER_VALIDATE_EMAIL)) {
        $emailaddressErr = "The email address is invalid";
    } else {
        $email = test_input($_POST["email_input"]);
    }
    if (empty($_POST["stradr_input"])) {
        $addressErr = "Street address cannot be empty";
    } elseif (strlen($_POST["stradr_input"]) > 96) {
        $addressErr = "Address max allowable character is 96";
    } else {
        $address = test_input($_POST["stradr_input"]);
    }
    if (empty($_POST["city_input"])) {
        $cityErr = "City/Town cannot be empty";
    } elseif (strlen($_POST["city_input"]) > 20) {
        $cityErr = "City/Town can't be more than 20 characters";
    } else {
        $city = test_input($_POST["city_input"]);
    }
    if (empty($_POST["slct_input"])) {
        $stateErr = "Please select a state";
    } else {
        $state = test_input($_POST["slct_input"]);
    }
    if (empty($_POST["poskod_input"])) {
        $postcodeErr = "Please enter your postcode number.";
    } elseif (!is_numeric($_POST["poskod_input"])) {
        $postcodeErr = "Postcode must be in numbers";
    } else {
        $postcode = test_input($_POST["poskod_input"]);
    }
    if (empty($_POST["phoneno_input"])) {
        $phonenumberErr = "Phone number cannot be empty";
    } elseif (preg_match("/^[0-9]{3}-[0-9]{7}$/", $_POST["phoneno_input"])) {
        $phonenumberErr = "Phone number is not valid (Requires 10 numerical character)";
    } else {
        $phonenumber = test_input($_POST["phoneno_input"]);
    }
    if (empty($_POST["messageform_input"])) {
        $commentErr = "Comment cannot be empty";
    } else {
        $comment = test_input($_POST["messageform_input"]);
    }
}
?>
<div class="contact-section">   
<form class="contact-form" id="confirmform" method="post" action="insert.php">
<input type="hidden" name="firstname_hidden" value="<?php echo $firstname; ?>">
<input type="hidden" name="lastname_hidden" value="<?php echo $lastname; ?>">
<input type="hidden" name="email_hidden" value="<?php echo $email; ?>">
<input type="hidden" name="address_hidden" value="<?php echo $address; ?>">
<input type="hidden" name="city_hidden" value="<?php echo $city; ?>">
<input type="hidden" name="state_hidden" value="<?php echo $state; ?>">
<input type="hidden" name="postcode_hidden" value="<?php echo $postcode; ?>">
<input type="hidden" name="phonenumber_hidden" value="<?php echo $phonenumber; ?>">
<input type="hidden" name="product_hidden" value="<?php echo $_POST["product_input"]; ?>">
<input type="hidden" name="comment_hidden" value="<?php echo $comment; ?>">

<p class="contact-form-text"><strong>First Name: </strong><?php echo $firstname; ?></p>
<span style="color:red;">
<?php
echo $firstnameErr ;echo "<br>"
?> </span>
<p class="contact-form-text"><strong>Last Name: </strong><?php echo $lastname; ?></p>
<span style="color:red;">
<?php
echo $lastnameErr;echo "<br>"
?> </span>
<p class="contact-form-text"><strong>Email: </strong><?php echo $email; ?></p>
<span style="color:red;">
<?php
echo $emailaddressErr;echo "<br>"
?> </span>
<p class="contact-form-text"><strong>Street Address: </strong><?php echo $address; ?></p>
<span style="color:red;">
<?php
echo $addressErr;echo "<br>"
?> </span>
<p class="contact-form-text"><strong>City: </strong><?php echo $city; ?></p>
<span style="color:red;">
<?php
echo $cityErr;echo "<br>"
?> </span>
<p class="contact-form-text"><strong>State: </strong><?php echo $state; ?></p>
<span style="color:red;">
<?php
echo $stateErr;echo "<br>"
?> </span>
<p class="contact-form-text"><strong>Postcode: </strong><?php echo $postcode; ?></p>
<span style="color:red;">
<?php
echo $postcodeErr;echo "<br>"
?> </span>
<p class="contact-form-text"><strong>Phone Number: </strong><?php echo $phonenumber; ?></p>
<span style="color:red;">
<?php
echo $phonenumberErr;echo "<br>"
?> </span>
<p class="contact-form-text"><strong>Product: </strong><?php echo $_POST["product_input"] ?></p>
<br> 
<p class="contact-form-text"><strong>Comment: </strong><?php echo $comment ?></p>
<span style="color:red;">
<?php
echo $commentErr;echo "<br>"
?> 
</span>
<input type="submit" class="contact-form-btn" value="Confirm"/>
<input type="button"  class="contact-form-btn" value="Back" />
</form>
</div>
<?php
include "include/footer.php"
?>

</body>
