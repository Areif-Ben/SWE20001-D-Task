/**
 * Author: Benjamin Arif 101229055
 * Target: enquiry.php
 * Purpose: Validate form using java
 * Created: 02/11/2020
 * Last Updated: 11/11/20
 * Credits: Benjamin
 */
function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  }
  return (false);
}

var product = getQueryVariable("product"); //get data passed over in the url

var option = document.getElementById('select').value = product; //set the selected option 
            var select = document.getElementById("select"),    // Dropdown value for products
                     arr = ["Bolt EV","Sonic","Spark","Cruze Hatchback","Aveo","Cruze","Malibu","Impala","Volt","Sail","Trailblazer","Equinox","Suburban","Tahoe","Trax","Colorado","Silverado 1500","Silverado 2500 HD","Silverado 3500 HD","Avalanche"]; 
             for(var i = 0; i < arr.length; i++)
             {
                 var option = document.createElement("OPTION"),
                     txt = document.createTextNode(arr[i]);
                 option.appendChild(txt);
                 option.setAttribute("value",arr[i]);    // Create value for each array
                 select.insertBefore(option,select.lastChild);
             }
            var select = document.getElementById("state"),  // Dropdown value for states
                     arr = ["Sarawak","Sabah","Kuala Lumpur","Terengganu","Johor","Kelantan","Malacca","Labuan","Putrajaya","Kedah","Perlis","Selangor","Negeri Sembilan","Penang","Pahang","Perak"];
             
             for(var i = 0; i < arr.length; i++)
             {
                 var option = document.createElement("OPTION"),
                     txt = document.createTextNode(arr[i]);
                 option.appendChild(txt);
                 option.setAttribute("value",arr[i]);   // Create value for each array
                 select.insertBefore(option,select.lastChild);
             }
function myFunction() {   // Fill the subject textbox when picking product
  var x = document.getElementById("select").value;
  document.getElementById("messageform").innerHTML = "I wanted to know more about " + x ;
}