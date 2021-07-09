<?php

$host="sql4.freesqldatabase.com";
$user="sql4423835";
$password="1V4JTSVxl4";
$database="sql4423835";
$port="3306";

$connect = new mysqli($host, $user, $password, $database, $port);

// Get Vars
$FirstName = $_POST["firstname"];
$LastName = $_POST["lastname"];
$Email = $_POST["email"];
$Password = $_POST["password"];

$stmt = $connect->prepare("insert into USERS (Email, Password, FirstName, LastName) values (?,?,?,?)");
$stmt->bind_param("ssss", $Email, $Password, $FirstName, $LastName);
$stmt->execute();
echo "Done";

?>
