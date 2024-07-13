<?php
    require '../connection.php';
    
    if(isset($_GET["feedbackid"])){
    $feedbackid = $_GET['feedbackid'];

    $sql = "DELETE FROM `feedback` WHERE `feedbackid`='".$feedbackid."'";

    if(mysqli_query($db,$sql)){
        echo "<script>alert('Feedback is Deleted!');</script>";
        echo "<script>window.location.href = '../chatmanage.php';</script>";
    }else{
        echo "<script>alert('Error: ".mysqli_error($db)."');</script>";
        echo "<script>window.location.href = '../chatmanage.php';</script>";
    }
}
?>