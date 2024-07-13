<?php 

$server = "localhost";
$userename = "root";
$password = "";
$database = "hostel";

$mysqli = new mysqli($server, $userename, $password, $database);

if (!$mysqli) {
  die("Connection failed due to" . mysqli_connect_error());
}
?>