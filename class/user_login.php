<?php

class UserLogin
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function authenticateUser($username, $password)
    {
        // Validate input data
        if (!$this->validateUsername($username) || !$this->validatePassword($password)) {
            return "Invalid input data";
        }

        // Escape input data to prevent SQL injection
        $username = $this->db->real_escape_string($username);

        // Retrieve user data from the database
        $query = "SELECT id, username, password FROM users WHERE username = '$username'";
        $result = $this->db->query($query);

        if (!$result) {
            die('Query failed: ' . $this->db->error);
        }

        $userData = $result->fetch_assoc();

        // Check if the username exists
        if (!$userData) {
            return "User not found";
        }

        // Verify the password
        if (!password_verify($password, $userData['password'])) {
            return "Invalid password";
        }

        // Set user session or token for authentication
        // For simplicity, we'll just return the user ID in this example
        return $userData['id'];
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
