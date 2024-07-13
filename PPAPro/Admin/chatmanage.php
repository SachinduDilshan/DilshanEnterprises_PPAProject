<?php 
require_once '../connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Messages</title>
    <link rel="stylesheet" type="text/css" href="admincss/adminstyle.css">
    <link rel="stylesheet"  type="text/css" hred="admincss/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="Adminjs/chatsearch.js"></script></scriptsrc>

</head>
<body>
    <div class="container">

        <div class="sidebar">
        <div class="adlogo">
        <img src="dilshan-enterprises-high-resolution-logo-transparent.png">
    </div><br><br><br><br><br><br><br>
            <a href="#">Admin Dashboard Management</a>
            <a href="usermanagement.php">User Management</a>
            <a class="active" href="chatmanage.php">Feedback Management</a>
            <a href="storeManagment.php">Store Management</a>
            <a href="employee.php">Employee Management</a>
            <div class="time-date"><br>
            <span id="current-time"></span><br><br>
            <span id="current-date"></span>
        </div>
        </div>
        <div class="content">
        <div id="Search" class="tabcontent">
        <div class="searchtab">
                    </div>
        </div>

        <html>
<head>
<style>
  .modern-btn {
  margin-left: 90%;
  margin-top: 4%;
  padding: 8px 12px;
  font-weight: bold;
  border-radius: 5px;
  background-color: yellow;
  font-size: 12px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.modern-btn:hover {
  background-color: #ffba31;
  border-radius: 5px;
}
.edit-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
}
.edit-btn{
  background-color: blue;
  border:none;
  border-radius: 5px;
  color: white;
}
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    margin-right: 10px;
  }
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
  }
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
  }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-left: 90px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  font-size: 14px;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #FFFFB3;
}
/*search pop ups tles*/
.popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 30px 100px;
            max-width: 100%;
            max-height: 50%;
            overflow-y: auto;
            z-index: 9999;
            border-radius: 5px;
        }
        .popup-content {
            line-height: 1.8;
            text-align: left; /* Align text to left */
            align-items: center;
        }
        .close {
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
            
        }
        .close:hover {
            color: #f00;
            
        }
        .updbtn{
          background-color: #008CBA;
          border: none;
          border-radius: 0px;
        }
        .updbtn:hover{
          background-color: lightblue;
          border: none;
          border-radius: 0px;
        }
        .canbtn{
          background-color: red;
          color: #dddddd;
          border: none;
          border-radius: 0px;
        }
        .canbtn:hover{
          background-color: orange;
          color: #dddddd;
          border: none;
          border-radius: 0px;}
        
          
</style>

</head>
<body>
  
<br>
<h2 style="margin-left:89px">Feedback Management</h2>

<input style="margin-left:80%; border-radius: 5px; width:200px; padding: 12px 15px;" type="text" id="search" placeholder="Search feedback..."><br><br>

    <div class="popup">
      <h2>Search Results <i class="fa fa-search"></i></h2>
        <div class="popup-content"></div>
        <span class="close">X</span>
    </div>

<?php

$button_class = "readbtn";

$sql = "SELECT * FROM `feedback` ";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0){
    
  echo "<table>";
    echo "<tr>";
      echo "<th>Feedback ID</th>";
      echo "<th>Name</th>";
      echo "<th>Shop Name</th>";
      echo "<th>Contact Number</th>";
      echo "<th>Email</th>";
      echo "<th>Address</th>";
      echo "<th>Contact Reason</th>";
      echo "<th>Message</th>";
      echo "<th>Date of Message Delivered</th>";
      echo "<th>Action</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {

      $feedbackid=$row['feedbackid']; 
    echo "<tr>";
      echo "<td>" . $row["feedbackid"] . "</td>";
      echo "<td>" . $row["First Name"]." ". $row["Last Name"] . "</td>";
      echo "<td>" . $row["Shop Name"] . "</td>";
      echo "<td>" . $row["Phone Number"] . "</td>";
      echo "<td>" . $row["Email"] . "</td>";
      echo "<td>" . $row["Address"] . "</td>";
      echo "<td>" . $row["Reason"] . "</td>";
      echo "<td>" . $row["Message"] . "</td>";
      echo "<td style='font-weight:bolder'>" . $row["Time"] . "</td>";

      echo "<td>" . "<button style='background-color: #e52121; cursor:pointer; color:white; border-radius: 5px; border:none;' onclick='location.href=".'"edit/delmsg.php?feedbackid='.$row['feedbackid'].'"'."'><i class='fa fa-trash-o' style='font-size:20px;color:white'></i></button>"."<br>.<br>"; // Button with feedback ID
      echo "<button class='feedbackButton' style='background-color: #0ced39; cursor:pointer; color:white; border-radius: 5px; border:none;' data-feedbackid='" . $row['feedbackid'] . "' onclick='openPopupForm(this)'>Read</button><br><br>"; // Button with feedback ID
    
      echo "<button style='background-color: #3b5998; cursor:pointer; color:white; border-radius: 5px; border:none;' onclick='openEditForm(this)' data-feedbackid='" . $row['feedbackid'] . "'> Update</button></td>"; // Button with feedback ID
      "</td>";
      
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>
 <form method="post">
 <button class="modern-btn" onclick="generatePDF()">View Report<br><i class="fa fa-file-text" style="font-size:20px; margin-top:5px;"></i></button>
    </form>
    <script>
    function generatePDF() {
    window.open("Adminhanlder/genreport.php", "_blank");
}
</script>






<div id="popupForm" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:9999;">
    <div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); background-color:white; padding:20px; border-radius:5px;">
        <h2>Update Feedback</h2>
        <form id="updateForm" action="edit/updatechat.php" method="POST">
            <input type="text" id="feedbackIdInput" name="feedbackId"  readonly>
            <input type="text" name="firstName" placeholder="First Name" required>
            <input type="text" name="lastName" placeholder="Last Name" required>
            <button class="updbtn"; type="submit">Update</button>
            <button class="canbtn" type="button" onclick="closePopupForm()">Cancel</button>
        </form>
    </div>
</div>
    

<script>
    // JavaScript function to open popup and pass feedback id
function openEditForm(button) {
    var feedbackId = button.getAttribute('data-feedbackid');
    document.getElementById('popupForm').style.display = 'block';
    document.getElementById('feedbackIdInput').value = feedbackId; 
}

function closePopupForm() {
    document.getElementById('popupForm').style.display = 'none';
}

</script>
</body>
</html>

        </div>
 </div>
<script src="Adminjs/replypopup.js"></script>
<script src="Adminjs/date.js"></script>
</body>
</html>