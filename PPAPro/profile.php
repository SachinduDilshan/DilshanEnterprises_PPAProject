<?php 
session_start();
require_once 'connection.php';
if(!isset($_SESSION["USERID"])){

    
    echo "<script>alert('You are not logged in to view your Profile! Please log in first.'); window.location='index.php';</script>";
  
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="css/signup.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" href="css/userprofile.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="js/menu.js"></script>


</head>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size:20px; margin-right:5px"></i>Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a class="active" href="profile.php">My Profile</a>
    <button style="padding: 8px 10px; border-radius: 0px; font-size:12px; width:100%; text-align: center;" class="btn-open-popup" id="loginBtn"><i class="fa fa-fw fa-user"></i>Sign In</button>
    <a href="about.php">About Us</a>
    <a style="background-color:red;" href="logout.php">Logout</a>
  </div>
  
</div>

    
</head>
<body style="background-color:white">

      <!--------------------------------Header------------------------------------>
      
<div class="header">

    <div class="logo">
        <img src="dilshan-enterpises-logo-file/png/dilshan-enterpises-high-resolution-logo-white-transparent.png">
        
    </div>
  <div class="header-right">
    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a>
    <a href="#store"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
</svg>Store</a>
    
  </div>

</div>

  
<?php 

$sql = "SELECT * FROM `user` WHERE `userid` = '".$_SESSION["USERID"]."'";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    

?>
<h1 style=" font-family: Calibri; background-color: yellow; text-align:center">Hi <?php echo($row['firstname'] . ' ' . $row['lastname']); ?>! Welcome!</h1><br>
<h6 style=" font-family: Calibri; margin-left:10px; font-style:italic">Here you cannot edit your user identity number.</h6>

<div style="margin-left: 55px; margin-top: 30px">
    <table>
        </tr>
        <h5>Profile Photo:</h5>
            
                <form action="Handlers/uploadpic.php" method="post" enctype="multipart/form-data">
                <input type="file" id="profilePhoto" name="profilePhoto" accept="image/*">
                <!-- Hidden input to store the current profile photo -->
                <input type="submit" value="Add Image" name="btnSubmit">
                </form>
                
        
            
        
        
        <tr>
            <td><h6 style="color:orange;">User ID:</h6></td>
            <td><h6 style="color:orange;"><?php echo($_SESSION["USERID"]); ?></h6></td>
            <td></td>
        </tr>
        <tr>
            <td><h5>First Name:</h5></td>
            <td><h5><?php echo($row['firstname']); ?></h5></td>
            <td><button class="edit-btn" onclick="editField('firstname')">Edit</button></td>
        </tr>
        <tr>
            <td><h5>Last Name:</h5></td>
            <td><h5><?php echo($row['lastname']); ?></h5></td>
            <td><button class="edit-btn" onclick="editField('lastname')">Edit</button></td>
        </tr>
        <tr>
            <td><h5>Contact number:</h5></td>
            <td><h5><?php echo($row['phone']); ?></h5></td>
            <td><button class="edit-btn" onclick="editField('phone')">Edit</button></td>
        </tr>
        <tr>
            <td><h5>Shop Name:</h5></td>
            <td><h5><?php echo($row['shopname']); ?></h5></td>
            <td><button class="edit-btn" onclick="editField('shopname')">Edit</button></td>
        </tr>
        <tr>
            <td><h5>Address:</h5></td>
            <td><h5><?php echo($row['address']); ?></h5></td>
            <td><button class="edit-btn" onclick="editField('address')">Edit</button></td>
        </tr>
        <tr>
            <td><h5>Email:</h5></td>
            <td><h5 style="color:blue"><?php echo($row['email']); ?></h5></td>
            <td><button class="edit-btn" onclick="editField('email')">Edit</button></td>
        </tr>
        <div id="editPopup" class="edit-popup">
    <form id="editForm" class="edit-form" method="post">
        <input type="hidden" id="fieldToUpdate" name="fieldToUpdate" readonly>
        <input type="text" id="newValue" name="newValue" placeholder="Enter your new data" required>
        <button class="save-btn" type="submit">Save</button>
        <button class="cancel-btn" type="button" onclick="closePopup()">Cancel</button>
    </form>
</div>
    </table>
</div>

<script>
    
    function editField(fieldName) {
        document.getElementById('fieldToUpdate').value = fieldName;
        document.getElementById('editPopup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('editPopup').style.display = 'none';
    }

    
    document.getElementById('editForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'Handlers/updateprofile.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
   
                closePopup(); 
                alert('User information updated successfully!');
            } else {
                
                alert('Error updating user information. Please try again.');
            }
        };
        xhr.send(formData);
    });

</script>

 

<?php
    
  
  }
}

else{
  echo("No data found!");
}
  ?>

<br><h4 style=" font-family: Calibri; color: orange; text-align:center">Dear Customer, Your Purchase history is shown below.</h4>
<?php 
  echo(" No data found for purchase history!");
  ?>



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
