<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="contact-section">   
<form class="contact-form" id="confirmform" method="post" action="insert.php">
<input type="hidden" name="firstname_hidden" value="<?php echo $_POST["firstname_input"]; ?>">
<input type="hidden" name="lastname_hidden" value="<?php echo $_POST["lastname_input"]; ?>">
<input type="hidden" name="email_hidden" value="<?php echo $_POST["email_input"]; ?>">
<input type="hidden" name="address_hidden" value="<?php echo $_POST["stradr_input"]; ?>">
<input type="hidden" name="city_hidden" value="<?php echo $_POST["city_input"]; ?>">
<input type="hidden" name="state_hidden" value="<?php echo $_POST["slct_input"]; ?>">
<input type="hidden" name="postcode_hidden" value="<?php echo $_POST["poskod_input"]; ?>">
<input type="hidden" name="phonenumber_hidden" value="<?php echo $_POST["phoneno_input"]; ?>">
<input type="hidden" name="product_hidden" value="<?php echo $_POST["product_input"]; ?>">
<input type="hidden" name="comment_hidden" value="<?php echo $_POST["messageform_input"]; ?>">

<p class="contact-form-text"><strong>First Name: </strong><?php echo $_POST["firstname_input"] ?></p>
<p class="contact-form-text"><strong>Last Name: </strong><?php echo $_POST["lastname_input"] ?></p>
<p class="contact-form-text"><strong>Email: </strong><?php echo $_POST["email_input"] ?></p>
<p class="contact-form-text"><strong>Street Address: </strong><?php echo $_POST["stradr_input"] ?></p>
<p class="contact-form-text"><strong>City: </strong><?php echo $_POST["city_input"] ?></p>
<p class="contact-form-text"><strong>State: </strong><?php echo $_POST["slct_input"] ?></p>
<p class="contact-form-text"><strong>Postcode: </strong><?php echo $_POST["poskod_input"] ?></p>
<p class="contact-form-text"><strong>Phone Number: </strong><?php echo $_POST["phoneno_input"] ?></p>
<p class="contact-form-text"><strong>Product: </strong><?php echo $_POST["product_input"] ?></p>
<p class="contact-form-text"><strong>Comment: </strong><?php echo $_POST["messageform_input"] ?></p>
<input type="submit" class="contact-form-btn" value="Confirm"/>
</form>
</div>

