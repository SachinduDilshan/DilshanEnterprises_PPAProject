<?php 
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chat with Us</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="stylesheet" href="css/menu.css" />
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="js/menu.js"></script>
<style>
#map {
            height: 350px;
            width: 100%;
        }
        </style>


<script>
        function initMap() {
            var location = {lat: 8.33563353403111, lng: 80.41184991631538}; //coordinates
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 12,
                    center: location
                });

            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Location'
            });
        }
    </script>


<!----- Validation Part------>
<script>

function validateFName() {
    var fname = document.getElementById("firstName").value;
    var lname = document.getElementById("lastName").value;

    if (fname === "" || fname === null) {
        alert("Please enter your first name");
        return false;
    }

    var regex = /\d/;
    if (regex.test(fname)) {
        alert("Please enter a valid first name without numbers");
        return false;
    }

    if (fname === lname) {
        alert("First name and last name cannot be the same");
        return false;
    }

    return true;
}

function validateLname() {
    var lname = document.getElementById("lastName").value;

    if (lname === "" || lname === null) {
        alert("Please enter your last name");
        return false;
    }

    var regex1 = /\d/;
    if (regex1.test(lname)) {
        alert("Please enter a valid last name without numbers");
        return false;
    }

    return true;
}

//-------------------------------------------------------------------------

function validateShop() {
    var shop = document.getElementById("shopName").value;

    if (shop === "" || shop === null) {
        alert("Please enter your shop name");
        return false;
    }

    var regex2 = /\d/;
    if (regex2.test(shop)) {
        alert("Please enter a valid shopname without numbers");
        return false;
    }

    return true;
}



//----------------------------------------------------------------------------

function validateContact()
{
var tphone= document.getElementById("number").value;
if(tphone.length!=10)
{
alert("Please enter a 10 digit phone number");
return false;
}
return true;

}

//-----------------------------------------------------------------------------------------------------------------------

function validateAll()
{
if (validateFName() && validateLname() && validateShop() && validateContact() )
{
alert("Form filling completed.");
}
else 
{
event.preventDefault();
}

}

</script>


</head>


<body>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size:20px; margin-right:5px"></i>Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="profile.php">My Profile</a>
    <button style="padding: 8px 10px; border-radius: 0px; font-size:12px; width:100%; text-align: center;" class="btn-open-popup" id="loginBtn"><i class="fa fa-fw fa-user"></i>Sign In</button>
    <a href="about.php">About Us</a>
    <a style="background-color:red;" href="logout.php">Logout</a>
  </div>
  <script src="js/signupform.js"></script>
</div>

      <!--------------------------------Header------------------------------------>
<div class="header">
    <div class="logo">
        <img src="dilshan-enterpises-logo-file/png/dilshan-enterpises-high-resolution-logo-white-transparent.png">                            
    </div>
  <div class="header-right">
    <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a class="active" href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a>
    <a href="#store"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
</svg>Store</a>
    
    
  </div>

 
     
</div>

<div style="padding-left:20px">
  
</div>

<div class="d-flex flex-column h-100">

    <div class="cont">
        <img src="Pics/3_25_2024 10_29_13 PM.png">
    </div>
  
  
    <section class="hero text-white py-5 flex-grow-1">
        
        <div class="container py-4">
          
            <div class="container">
                <div class="box"><i class="fa fa-phone" style="font-size:48px;color:rgb(3, 159, 0)"><div class="fstyle">Call Us</div></i>
                <div class="fcol" style="color:rgb(3, 159, 0)"><br>077 888 0 817<br>025 222 5 789</div>
                <br><p class="parastyle">Contact our sales<br>representatives and get to<br> know anything you want</p>
                <div class="fcol"><br><button id="contactBtn" class="btn-open-popup"> 
                    Contact Us
                    </button> </div>
                <br><p class="parastyle" style="font-size: xx-large; color: #737300">Contact our sales<br>representatives and get to<br> know anything you want</p>
                    </div>
            
                
                    <div class="box"><i class="fa fa-map-marker" style="font-size:48px;color:rgb(255, 119, 0)"><div class="fstyle">Meet Us</div></i>
                        <br><div id="map"></div>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPk4Bn9rNUW1LAX_nAwTrN8ucatUstWEg&callback=initMap" async defer></script>
                    <h6><div class="fcol" style="color:rgb(255, 119, 0) "><br>No: 52, UC Quaters<br>New Town<br> Anuradhapura</div><h6>
                <br><p class="parastyle" style="font-weight: bolder;">Open from 8.30 am to 9.00 pm<br>(Closed on Public Holidays)</p>
                    
                </div>
            </div>
            
        </div>
    </section>

    <!---------------------Form------------------->
    
    
   

<div id="contactFormModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 style="color: azure; text-align: center;">Send Us Your Message</h2>

    <form action="Handlers/contacthandler.php" name="contactForm" method="post">
      
      <input type="text" id="firstName" name="firstName" placeholder="First Name" ><br>

      <input type="text" id="lastName" name="lastName" placeholder="Last Name" ><br>

      
      <input type="text" id="shopName" name="shopName" placeholder="Shop Name"><br>

      
      <input type="email" id="email" name="email" placeholder="Email" required><br>

      <label for="contactType" style="color: azure;">Contact Us About:</label>
      <select id="contactType" name="contactType">
        <option value="General Inquiry">General Inquiry</option>
        <option value="Customer Support">Customer Support</option>
        <option value="Business Collaboration">Business Collaboration</option>
        <option value="Other">Other</option>
      </select><br>

      
      <input type="text" id="number" name="number" placeholder="Contact Number" ><br>

      
      <input type="text" id="address" name="address" placeholder="Address" required><br>

      
      
      <textarea id="message" name="message" placeholder="Enter your message" rows="4" required></textarea><br>

      <input type="hidden" id="datetime" name="datetime" value="<?php date_default_timezone_set('Asia/Colombo'); echo date('Y-m-d H:i:sa'); ?>">

      <input type="submit" value="Submit" onClick="validateAll()"></form>
    
  </div>
</div>
<script src="js/feedbackscript.js"></script>



    <!-------------------------------- FOOTER ------------------------------------->
    <footer class="w-100 py-4 flex-shrink-0">
    <div class="footerlogo">
        <img src="dilshan-enterpises-logo-file/dilshan-enterprises-high-resolution-logo-transparent.png">
    </div>
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="h1 text-white">Dilshan Enterprises</h5>
                <p class="small text-muted" style="font-weight: bolder;">Authorized dealer of CEAT SRI LANKA in North Central Province and Mullativu District.</p>
                <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. Created by DATA DARE DEVILS for DILSHAN ENTERPRISES</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-3">Quick links</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
                
                <ul class="list-unstyled text-muted">
                <h8 style="font-style:italic;" class="text-white mb-3">We Accept Payment Methods</h8>
                    <!-- Add payment icons here -->
                    <br><img src="pics/visa-logo.png" alt="Visa" style="width: 80px; height: auto;">
                    <img src="pics/mastercard-18.png" alt="Mastercard" style="width: 80px; height: auto;"><br>
                    
                    <img src="pics/png.monster-475.png" alt="Mastercard" style="width: 80px; height: auto;">
                    <img src="pics/11-114087_cash-in-hand-icon.png" alt="Cash Pay" style="width: 80px; height: auto;">
                    <!-- Add more payment icons as needed -->
                </ul>
                <div class="col-lg-2 col-md-6">
                
                <img src="pics/Delivery-Service-Transparent-Image.png" alt="Order" style="width: 250px; height: auto;">
                <p style="font-style:italic; font-size:15px; color:yellow;" class="text-white mb-3">Fast and Secure Delivery</p>
                </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
