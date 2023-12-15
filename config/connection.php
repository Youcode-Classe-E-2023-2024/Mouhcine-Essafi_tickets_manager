<?php
$servername = "localhost";
$username = "root";
$password = "";


/**
 * Create connection (MySQLi Procedural)
 */
$conn = mysqli_connect($servername, $username, $password);

/**
 * Check connection
 */
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
    echo ('error: ');
}

?>
