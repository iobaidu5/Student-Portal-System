<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "studentportalsystem";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbName);

if (!$conn) {
  # code...
  die("Connection Failed: ".mysqli_connect_error());
}