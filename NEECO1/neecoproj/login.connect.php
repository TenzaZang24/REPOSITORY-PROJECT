<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sijaa_db";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
	die("Database Connection Failed: " . mysqli_connect_error());
}
//echo "Database Connected Successfully<br>";
?>