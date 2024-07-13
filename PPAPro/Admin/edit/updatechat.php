<?php

require_once '..\connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedbackId = $_POST['feedbackId'];
    
     $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    
    $sql = "UPDATE feedback SET `First Name`='$firstName', `Last Name`='$lastName' WHERE feedbackid='$feedbackId'";
    
    $result = mysqli_query($db, $sql);
    
    if ($result) {
    echo "<script>alert('Feedback updated successfully'); window.location.href = '../chatmanage.php';</script>";
    header("..\chatmanage.php");
    }else {
    echo "<script>alert('Error updating feedback ')</script>" . mysqli_error($db);
    }
}
?>

