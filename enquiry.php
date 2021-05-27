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
    <input type="text" class="contact-form-text" id="firstname" name="firstname_input" placeholder="First name">
    <input type="text" class="contact-form-text" id="lastname" name="lastname_input" placeholder="Last name">
          <input type="email" class="contact-form-text" id="emeil"  name="email_input" placeholder="Email">
         <fieldset>
            <legend>Address</legend>
            <label for="Stradr">Street Adress</label>
            <input type="text" class="contact-form-text" id="stradr" name="stradr_input" maxlength="40">
            <label for="ctytwn">City / Town</label>
            <input type="text" class="contact-form-text" id="city" maxlength="20" id="ctytwn" name="city_input">

            <p>State</p>
             <div class="select">
              <select name="slct_input" id="state" >
               <option value="choose" selected disabled>Choose an option...</option>
              </select>
             </div>
<br>
            <label for="poskod">Postcode</label>
            <input type="tel" class="contact-form-postcode" maxlength="5" id="poskod" name="poskod_input">
        </fieldset>
   <input type="tel" class="contact-form-text" placeholder="Phone number" id="phoneno" name="phoneno_input">
      
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
<script>
    function namecheck() {
            "use strict";
            var errormsg1 = "\nFirst name cannot be empty\n";   // initialise error tags when not filled
            var errormsg2 = "\nFirst name must contain alphabetic characters only\n";  

            var pattern_1 = /^[A-Za-z]+$/;

            var check = document.getElementById("firstname").value;

            if (check != "") {
                var dummy = ""
            } else {
                return errormsg1;
            }

            if (check.match(pattern_1)) {
                var dummy2 = ""
            } else {
                return errormsg2;
            }
            return ""
        }
        
        
        function namecheck2() {
            "use strict";
            var errormsg1 = "\nLast name cannot be empty\n";
            var errormsg2 = "\nLast name must contain alphabetic characters only\n";

            var pattern_1 = /^[A-Za-z]+$/;

            var check = document.getElementById("lastname").value;

            if (check != "") {
                var dummy = ""
            } else {
                return errormsg1;
            }

            if (check.match(pattern_1)) {
                var dummy2 = ""
            } else {
                return errormsg2;
            }
            return ""
        }
        
                function emailcheck() {
            "use strict";
            var errormsg1 = "\nEmail cannot be empty\n";
            var errormsg2 = "\nThe email address is invalid\n";

            var pattern_1 = /@/;

            var check = document.getElementById("emeil").value;

            if (check == "") {

                return errormsg1;

            }

            if (check.match(pattern_1)) {
                return ""
            } else {
                return errormsg2;
            }

        }
        
                                function addresscheck() {
            "use strict";
            var errormsg = "\nStreet address cannot be empty\n";
            var errormsg2 = "\nAddress max allowable character is 96\n";
            var pattern_1 = /^[a-zA-Z0-9,.!? ]{1,96}$/;

            var check = document.getElementById("stradr").value;

            if (check != "") {
                var dummy = ""
            } else {
                return errormsg;
            }
                    
                    
            if (check.match(pattern_1)) {
                var dummy2 = ""
            } else {
                return errormsg2;
            }
            return ""
        }
            
        
                 function addresscheck2() {
            "use strict";
            var errormsg = "\nCity/Town cannot be empty\n";

            var check = document.getElementById("city").value;

            if (check != "") {
                var dummy = ""
            } else {
                return errormsg;
            }
            return ""
        }
        
         function statecheck()
{
 var ddl = document.getElementById("state");
 var selectedValue = ddl.options[ddl.selectedIndex].value;
   var errormsg = "\nPlease select a state\n";
    if (selectedValue == "choose")
   {
    var dummy = ""
   } else {
           return ""     
            }
          return errormsg;
}
 
 
          
                 function postcodecheck() {
            "use strict";
            var errormsg1 = "\nPostcode cannot be empty\n";
            var errormsg2 = "\nPostcode must contain 5 digits\n";

            var pattern_1 = /^[0-9]{5,5}$/;

            var check = document.getElementById("poskod").value;

            if (check != "") {
                var dummy = ""
            } else {
                return errormsg1;
            }

            if (check.match(pattern_1)) {
                var dummy2 = ""
            } else {
                return errormsg2;
            }
            return ""
        }
        
        
                    function phonecheck() {
            "use strict";
            var errormsg1 = "\nPhone number cannot be empty\n";
            var errormsg2 = "\nPhone number is not valid (Requires 10 numerical character)\n";

            var pattern_1 = /^[0-9]{10}$/;

            var check = document.getElementById("phoneno").value;

            if (check != "") {
                var dummy = ""
            } else {
                return errormsg1;
            }

            if (check.match(pattern_1)) {
                var dummy2 = ""
            } else {
                return errormsg2;
            }
            return ""
        }
          
        
        
         function productcheck()
{
 var ddl = document.getElementById("select");
 var selectedValue = ddl.options[ddl.selectedIndex].value;
   var errormsg = "\nPlease select a product\n";
    if (selectedValue == "default")
   {
    var dummy = ""
   } else {
           return ""     
            }
          return errormsg;
}
        
        
              function desrciption_check() {

            var errormsg2 = "\nThe product details need to be filled in\n";

            var check2 = document.getElementById("messageform").value;

            if (check2 == "") {
                return errormsg2;


            } else {
                return ""
            }

        }
            
 
        
        
            function main_func() {
            "use strict";
            var check = ""
            var check = namecheck() + namecheck2() + emailcheck() + addresscheck() + addresscheck2() + 
                statecheck() + postcodecheck() + phonecheck() + productcheck() + desrciption_check() ;

            if (check == "") {
                return true;
            } else {
                alert(check);
                return false;
            }

        }
        </script>
<script src="scripts/script.js" type="text/javascript"></script> 
    </body>
</html>