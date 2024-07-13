<?php
    require '../connection.php';
    
    if(isset($_GET["userid"])){
    $userid = $_GET['userid'];

    $sql = "DELETE FROM `user` WHERE `userid`='".$userid."'";

    if(mysqli_query($db,$sql)){
        echo "<script>alert('User is Deleted!');</script>";
        echo "<script>window.location.href = '../usermanagement.php';</script>";
    }else{
        echo "<script>alert('Error: ".mysqli_error($db)."');</script>";
        echo "<script>window.location.href = '../usermanagement.php';</script>";
    }
}
?>