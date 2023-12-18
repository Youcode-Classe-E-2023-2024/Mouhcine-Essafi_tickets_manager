<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "Helpdesk";


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

/**
 * SQL query to create a database
 */
$sql = "CREATE DATABASE IF NOT EXISTS $db_name";

if (!$conn->query($sql) === TRUE) {
    echo "Error creating database: " . $conn->error;
}

/**
 * Select your database
 */
$conn->select_db($db_name);

?>
