<?php

class DatabaseConnection
{
    private $db;

    public function __construct($servername, $username, $password, $db_name)
    {
        $this->db = new mysqli($servername, $username, $password);

        if ($this->db->connect_error) {
            die('Could not connect: ' . $this->db->connect_error);
        }

        $this->CreateDatabase($db_name);
    }

    private function CreateDatabase($db_name)
    {
        $sql = "CREATE DATABASE IF NOT EXISTS $db_name";

        if (!$this->db->query($sql)) {
            die("Error creating database: " . $this->db->error);
        }

        // Select the database
        $this->db->select_db($db_name);
    }

    public function getConnection()
    {
        return $this->db;
    }

    public function closeConnection()
    {
        $this->db->close();
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "Helpdesk";

// Create a DatabaseConnection instance
$dbConnection = new DatabaseConnection($servername, $username, $password, $db_name);

// Get the database connection
$db = $dbConnection->getConnection();

// Perform other database operations using $conn

// Close the database connection when done
// $dbConnection->closeConnection();

?>
