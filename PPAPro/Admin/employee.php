<?php 

require_once '../connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>See Employees</title>
    <link rel="stylesheet" type="text/css" href="admincss/adminstyle.css">
    <link rel="stylesheet" type="text/css" href="admincss/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.tbody,td {
    margin-right: 50px;
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
  width: 100%;
  margin-left: 90px;
}

.td,th {
  border: 1px solid #dddddd;
  text-align: left;
  font-size: 13px;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
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
            <a href="usermanagement.php">User Management</a>
            <a href="chatmanage.php">Feedback Management</a>
            <a href="storeManagment.php">Store Management</a>
            <a class="active" href="employee.php">Employee Management</a>
            <div class="time-date"><br>
            <span id="current-time"></span><br><br>
            <span id="current-date"></span>
        </div>
        </div>

        <div class="content">
        <h1 style = "margin-left: 80px;">Employee Management
        <div class="searchtab">
                    <input type="text" id="searchInput" placeholder="Search Employee...">
                    <button style="background-color:#04e600;"onclick="searchFeedback()">Search</button></div></h1>
    
    <table>
        <tr>
            <td>
                <form action="Adminhanlder/employeehandler.php" method="post" autocomplete="off" onsubmit="onFormSubmit()">
                    <h2>Employee Information</h2>

                    
                    
                    <div>
                        <label for="empName">Employee name</label>
                        <input type="text" name="empName" id="empName" required>
                    </div>
                    <div>
                        <label for="empAge">Age</label>
                        <input type="number" name="empAge" id="empAge" required>
                    </div>
                    <div>
                        <label for="empGender">Gender</label>
                        <input type="text" name="empGender" id="empGender" required>
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" required>
                    </div>
                    <div>
                        <label for="salary">Salary</label>
                        <input type="number" name="salary" id="salary" required>
                    </div>
                    
                    <div>
                        <label for="division">Division</label>
                        <input type="text" name="division" id="division" required>
                    </div>
                    <div class="form_action--button">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </form>


                <?php
                

$sql = "SELECT * FROM `employee` ";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0){
    
                echo "<td>";
                    echo "<table>";
                       echo "<thead>";
                            echo "<tr>";
                                echo "<th> Emp no </th>";
                                echo "<th> Emp name </th>";
                                echo "<th> Age </th>";
                                echo "<th> Gender </th>";
                                echo "<th> Address </th>";
                                echo "<th> Salary </th>";
                                echo "<th> Division </th>";
        
                           echo "</tr>";
                       echo "</thead>";

                       while($row = mysqli_fetch_assoc($result)) {
                        $empid=$row['empid']; 

                            echo "<tbody>";
                                echo "<tr>";
                                
                                    echo"<td>" . $row["empid"] . "</td>";
                                    echo "<td>" . $row["ename"] . "</td>";
                                    echo "<td>" . $row["age"] . "</td>";
                                    echo "<td>" . $row["gender"] . "</td>";
                                    echo "<td>" . $row["address"] . "</td>";
                                    echo "<td>" . $row["salary"] . "</td>";
                                    echo "<td>" . $row["division"] . "</td>";
                                    echo "<td>" . "<button onclick='location.href=".'"edit/delemp.php?empid='.$row['empid'].'"'."'> Delete</button>". "</td>";
                               echo "</tr>";
                                
                            echo "</tbody>";
  } 
  echo "</table>";
}
else {
    echo "No employee";
  }
  ?>




<script src="Adminjs/date.js"></script>


