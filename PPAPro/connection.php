<?php

$hostname="localhost";
$username="root";
$password="";
$database="ppa";

//create connection
$db=mysqli_connect($hostname, $username, $password, $database);

//check connection

if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

	

?>