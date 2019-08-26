<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "goh";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$conn) {
 echo "Debugging errno: " . mysqli_connect_error(); }