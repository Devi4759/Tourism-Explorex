<?php
$servername = "localhost";
$username = "root";
$password = "new_password"; // Use the new password you set
$dbname = "minip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
