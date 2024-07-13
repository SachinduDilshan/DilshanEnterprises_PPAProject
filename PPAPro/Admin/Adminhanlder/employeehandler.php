<?php

require_once '..\connection.php';

$ename= $_POST["empName"];
$eage= $_POST["empAge"];
$egender=$_POST["empGender"];
$eaddress= $_POST["address"];
$esal= $_POST["salary"];
$edivi= $_POST["division"];


$sql= "INSERT INTO `employee`(`ename`, `age`, `gender`, `address`, `salary`, `division`) 
VALUES ('".$ename."','".$eage."','".$egender."','".$eaddress."','".$esal."','".$edivi."')";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (mysqli_query($db, $sql)) 

    
    $successMessage = "Employee has added!";
    
    echo "<script>alert('" . $successMessage . "');</script>";

    echo "<script>window.location.href = '/PPAPro/Admin/employee.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

?>