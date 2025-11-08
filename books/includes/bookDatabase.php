<?php
$servername = getenv('RDS_HOSTNAME');
$username = getenv('RDS_USERNAME');
$password = getenv('RDS_PASSWORD');
$dbname = "bookstore";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>