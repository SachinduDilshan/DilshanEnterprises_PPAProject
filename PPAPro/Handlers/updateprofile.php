<?php

require_once '..\connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fieldToUpdate = $_POST['fieldToUpdate'];
    $newValue = $_POST['newValue'];
    
    
    $userId = $_SESSION["USERID"];
    $sql = "";
    
    $sql="UPDATE `user` SET `$fieldToUpdate`='$newValue' WHERE `userid`='$userId' ";
    
    if ($sql !== "") {
        if($db->query($sql)===TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $db->error;
        }
    } else {
        echo "Invalid field to update";
    }
}
?>
