<?php
$servername = getenv('RDS_HOSTNAME');
$username = getenv('RDS_USERNAME');
$password = getenv('RDS_PASSWORD');
$dbname = "moviedb";

echo "RDS_HOSTNAME: " . getenv('RDS_HOSTNAME') . "\n";
echo "RDS_USERNAME: " . getenv('RDS_USERNAME') . "\n";
echo "RDS_PASSWORD: " . (getenv('RDS_PASSWORD') ? 'SET' : 'NOT SET') . "\n";

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


?>