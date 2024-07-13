<?php

session_start();

require_once '..\connection.php';

$useremail= $_GET["email"];
$userpassword= $_GET["password"];


$sql="SELECT * FROM `user` WHERE `email`='{$useremail}' AND `password` ='{$userpassword}'";

$result = mysqli_query($db, $sql);


if(mysqli_num_rows($result)>0) {
	
	while ($row = mysqli_fetch_assoc($result)) {
		$_SESSION['USERID'] = $row["userid"];
	}
	
	echo "<script>alert('Login Success!'); window.location='../index.php';</script>";
	
	
} else {
	echo "<script>alert('Login Failed! Account not found'); window.location='../index.php';</script>";
	
}

mysqli_close($db);

?>