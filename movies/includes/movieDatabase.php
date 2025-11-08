<?php
$servername = $_SERVER('RDS_HOSTNAME');
$username = $_SERVER('RDS_USERNAME');
$password = $_SERVER('RDS_PASSWORD');
$dbname = "moviedb";

$conn = mysqli_connect($servername, $username, $password,$dbname );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>