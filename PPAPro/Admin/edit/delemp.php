<?php
    require '../connection.php';
    
    if(isset($_GET["empid"])){
    $empid = $_GET['empid'];

    $sql = "DELETE FROM `employee` WHERE `empid`='".$empid."'";

    if(mysqli_query($db,$sql)){
        echo "<script>alert('Employee is Deleted!');</script>";
        echo "<script>window.location.href = '../employee.php';</script>";
    }else{
        echo "<script>alert('Error: ".mysqli_error($db)."');</script>";
        echo "<script>window.location.href = '../employee.php';</script>";
    }
}
?>