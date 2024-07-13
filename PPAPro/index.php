<?php

require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="css/signup.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="js/menu.js"></script>

</head>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size:20px; margin-right:5px"></i>Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="profile.php">My Profile</a>
    <button style="padding: 8px 10px; border-radius: 0px; font-size:12px; width:100%; text-align: center;" class="btn-open-popup" id="loginBtn"><i class="fa fa-fw fa-user"></i>Sign In</button>
    <a href="about.php">About Us</a>
    <a style="background-color:red;" href="logout.php">Logout</a>
  </div>
  
</div>






<script>
    function checkPassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("cpassword").value;

            if (password != confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
        </script>

    
</head>
<body style="background-color:white">

      <!--------------------------------Header------------------------------------>
      
<div class="header">

    <div class="logo">
        <img src="dilshan-enterpises-logo-file/png/dilshan-enterpises-high-resolution-logo-white-transparent.png">
        
    </div>
  <div class="header-right">
    <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a>
    <a href="store.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
</svg>Store</a>
    
  </div>

</div>

<div style="padding-left:20px">
  
</div>

<div class="d-flex flex-column h-100">

    <div class="wallpaper">
        <img src="Pics/3_25_2024 9_21_48 PM.png">
        <div class="fcol">
        <button class="btn-open-popup" id="createBtn">Create Account</button></div>
    </div>

    <section class="hero text-white py-5 flex-grow-1">
        
        <div class="container py-4">
            
            <div class="row" style="margin-left: 20px;">
                <div class="column">
                  <img src="Pics/lorry.png" alt="fast" style="width:70%; margin-top: 50px;">
                </div>
                <div class="column">
                  <img src="Pics/pngtree-trusted-seller-with-shield-png-image_8498568.png" alt="trust" style="width:70%">
                </div>
                <div class="column">
                  <img src="Pics/hgg.jpg" alt="best" style="width:70%; margin-top: 30px;">
                </div>
              </div>
        </div>
    </section>


    <!-----------------------------FORMSIGNUP---------------------->
    <div id="signupFormModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
            <h2 style="color: azure; text-align: center;">Sign Up</h2>
            <h6 style="color: azure;">It's free and only takes a minute...</h4>
            <form action="Handlers/userhandler.php" onsubmit="return checkPassword();" method="post">
              

              <input type="text" id= "fname" name="fname" placeholder="First Name" required/>
      
              
              <input type="text" id="lname" name="lname" placeholder="Last Name" required/>

              <input type="text" id="sname" name="sname" placeholder="Shop Name" />
      
              
              <input type="text" id="cnumber" name="cnumber" placeholder="Phone Number" />
      
              
              <input type="text" id="address" name="address"placeholder="Address" />
      
              
              <input type="email" id="email" name="email" placeholder="Email" />
      
              
              <input type="password"  id="password" style="border-radius:5px; padding: 10px 15px;" name="password" placeholder="Password" />
      
              
              <input type="password" id="cpassword" style="border-radius:5px; padding: 10px 15px;" name= "cpassword" placeholder="Confirm the Password" /><br><br>
      
              <input type="submit" name="btnSubmit" id="btnSubmit" value="Register"><br><br>
              <p style="color: azure; font-style:Italic;">I am agree to the <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
            </p>
          
          <p style="color: azure;">
            Already have an account? <button class="btn-open-popup" id="loginBtn">Log In</button>
          </p>
          </div>
            
            </form>
          
        </div>



        <!---------------Login In form ---------------------->

        
        <div id="loginFormModal" class="modal">
          <div class="loginform">
        <div class="modal-content" style="width:38%;">
          <span class="close">&times;</span>
          <h2 style="color: azure; text-align: center;">Login Now</h2><br>

          <form action="Handlers/loginhandler.php">
        
        <input type="email" style="width:535px;  place-items: center;" name="email"  placeholder="Enter your email address" required/><br>

        <input type="password" style="width:535px; padding: 10px 15px; border-radius:5px" name="password"   placeholder="Password" required /><br><br>
        
        <div class="loginbtn">
        <button type="submit" name="btnLogin">Login</button>
        </div>
    </div>
        </div>
</div>

    </form>   
<script src="js/signupform.js"></script>

    


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
