<?php

class UserRegistration
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function registerUser($username, $password)
    {
        // Validate input data
        if (!$this->validateUsername($username) || !$this->validatePassword($password)) {
            return "Invalid input data";
        }

        // Escape input data to prevent SQL injection
        $username = $this->db->real_escape_string($username);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if the username already exists
        $checkQuery = "SELECT id FROM users WHERE username = '$username'";
        $checkResult = $this->db->query($checkQuery);

        if (!$checkResult) {
            die('Query failed: ' . $this->db->error);
        }

        if ($checkResult->num_rows > 0) {
            return "Username already exists";
        }

        // Insert new user into the database
        $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
        $insertResult = $this->db->query($insertQuery);

        if (!$insertResult) {
            die('Query failed: ' . $this->db->error);
        }

        // Return success message or user ID, depending on your application needs
        return "Registration successful for username: $username";
    }

    private function validateUsername($username)
    {
        // Add your own validation rules for the username
        return (bool) preg_match('/^[a-zA-Z0-9]{5,}$/', $username);
    }

    private function validatePassword($password)
    {
        // Add your own validation rules for the password
        return (bool) preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password);
    }
}
?>
