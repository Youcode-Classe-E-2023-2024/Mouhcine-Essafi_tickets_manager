<?php

class UserLogin
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function loginUser($email, $password)
    {
        // Validate input data
        // !$this->validatePassword($password))
        if (!$this->validateEmail($email))  {
            return "Invalid input data";
        }

        // Retrieve user data from the database
        $query = "SELECT id_utilisateur, mot_de_passe FROM utlisateur WHERE email = '$email'";
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
        if (!password_verify($password, $userData['mot_de_passe'])) {
            return "Invalid password";
        }

        // Set user session or token for authentication
        // For simplicity, we'll just return the user ID in this example
        // return $userData['id_utilisateur'];
        return true;
    }

    private function validateEmail($email)
    {
        // Add your own validation rules for the email address
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function validatePassword($password)
    {
        // Add your own validation rules for the password
        return (bool) preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password);
    }
}
?>
