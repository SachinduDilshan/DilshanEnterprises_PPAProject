<?php

require_once '..\connection.php';

$fname= $_POST["firstName"];
$lname= $_POST["lastName"];
$shName=$_POST["shopName"];
$emailadd= $_POST["email"];
$conreason= $_POST["contactType"];
$connumber= $_POST["number"];
$paddress= $_POST["address"];
$msge=$_POST["message"];
$datetime=$_POST["datetime"];


$sql= "INSERT INTO `feedback`( `First Name`, `Last Name`, `Shop Name`, `Email`, `Reason`, `Phone Number`, `Address`, `Message`, `Time`) 
VALUES ('".$fname."','".$lname."','".$shName."','".$emailadd."','".$conreason."','".$connumber."','".$paddress."','".$msge."', '".$datetime."')";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (mysqli_query($db, $sql)) 


    $successMessage = "We have recieved your message! Thank You!!";
    

    echo "<script>alert('" . $successMessage . "');</script>";

    echo "<script>window.location.href = '/PPAPro/contact.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);


?>