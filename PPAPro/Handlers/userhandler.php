<?php

require_once '..\connection.php';


if(isset($_POST['btnSubmit'])){

$fname= $_POST["fname"];
$lname= $_POST["lname"];
$sname=$_POST["sname"];
$connumber=$_POST["cnumber"];
$address= $_POST["address"];
$email= $_POST["email"];
$password= $_POST["password"];
$conpassword= $_POST["cpassword"];


$sql= "INSERT INTO `user`(`userid`, `firstname`, `lastname`, `shopname`, `phone`, `address`, `email`, `password`, `conpass`) 
VALUES ('".$_SESSION['USERID']."','".$fname."','".$lname."', '".$sname."', '".$connumber."','".$address."','".$email."','".$password."', '".$conpassword."')";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (mysqli_query($db, $sql)) 


    $successMessage = "User has created!!";
    
    echo "<script>alert('" . $successMessage . "');</script>";

    echo "<script>window.location.href = '/PPAPro/index.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);
}else{
  header("Location: ..\index.php");
}


?>