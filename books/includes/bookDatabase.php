<?php
$servername = $_SERVER['RDS_HOSTNAME'];
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];
$dbname = "bookstore";

echo "RDS_HOSTNAME: " . $_SERVER('RDS_HOSTNAME') . "\n";
echo "RDS_USERNAME: " . $_SERVER('RDS_USERNAME') . "\n";
echo "RDS_PASSWORD: " . ($_SERVER('RDS_PASSWORD') ? 'SET' : 'NOT SET') . "\n";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>