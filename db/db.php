<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "technician";

// Create connection
$db_conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db_conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
