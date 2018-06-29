<?php
$hostname = 'localhost';
$db = 'cars';
$username = 'root';
$password='90293269';

$conn = new mysqli($hostname, $username, $password, $db);

if($conn->connect_error)
{
    die("Failed to connect to database ". $conn->connect_error);
}

?>