<?php
$servername = getenv('RDS_HOSTNAME');
$username = getenv('RDS_USERNAME');
$password = getenv('RDS_PASSWORD');
$dbname = "moviedb";

$conn = mysqli_connect($servername, $username, $password,$dbname );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>