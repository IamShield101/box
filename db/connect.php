<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "box";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_errno) {
    die("Connection error" . $conn->connect_errno);
}
