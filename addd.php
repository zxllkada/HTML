<?php

$host="localhost";
$user="root";
$password="";
$database="Kada_DB";

$connect = new mysqli($host, $user, $password, $database);

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