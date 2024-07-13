<?php 

require_once '../connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>See Messages</title>
    
    <link rel="stylesheet" type="text/css" href="admincss/adminstyle.css">
    <link rel="stylesheet"  type="text/css" hred="admincss/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <style>
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
  .tab button:hover {
    background-color: #ddd;
  }
  .tab button.active {
    background-color: #ccc;
  }
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
  }


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 71%;
  margin-left: 330px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  font-size: 15px;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #FFFFB3;
}

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


</style>
    
 
</head>
<body>

<br>


<div class="header">
    
  <div class="header-right">
    
    <a href="#profile">Profile</a>
  </div>
  
</div>
        <div class="sidebar">
        <div class="adlogo">
        <img src="dilshan-enterprises-high-resolution-logo-transparent.png">
    </div><br><br><br><br><br><br><br>
            <a href="#">Admin Dashboard Management</a>
            <a class="active" href="usermanagement.php">User Management</a>
            <a href="chatmanage.php">Feedback Management</a>
            <a href="#">Store Management</a>
            <a href="employee.php">Employee Management</a>
            <div class="time-date"><br>
            <span id="current-time"></span><br><br>
            <span id="current-date"></span>
        </div>
        </div>
        <h2 style="margin-left: 330px; font-family: ">User Management</h2> <br>

        
        
<?php

$sql = "SELECT * FROM `user` ";
$result = mysqli_query($db, $sql);


if (mysqli_num_rows($result) > 0){
    
  echo '<table>';
    echo "<tr>";
      echo "<th>User ID</th>";
      echo "<th>Name</th>";
      echo "<th>Shop Name</th>";
      echo "<th>Contact Number</th>";
      echo "<th>Address</th>";
      echo "<th>Email</th>";
      echo "<th>Action</th>";
      
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {

      $userid=$row['userid']; 
    echo "<tr>";
      echo "<td>" . $row["userid"] . "</td>";
      echo "<td>" . $row["firstname"]." ". $row["lastname"] . "</td>";
      echo "<td>" . $row["shopname"] . "</td>";
      echo "<td>" . $row["phone"] . "</td>";
      echo "<td>" . $row["address"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . "<button style='background-color: #e52121; color:white; border-radius: 5px; border:none; cursor:pointer;' onclick='location.href=".'"edit/deluser.php?userid='.$row['userid'].'"'."'> <i class='fa fa-trash-o' style='font-size:20px;color:white'></i></button><br><br>"; // Button with user ID
      echo "<button style='background-color: #3b5998; cursor:pointer; color:white; border-radius: 5px; border:none;' onclick='openEditForm(this)' data-userid='" . $row['userid'] . "'> Update</button></td>"; // Button with feedback ID
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
    window.open("Adminhanlder/userreport.php", "_blank");
}
</script>


    <script src="Adminjs/date.js"></script>
