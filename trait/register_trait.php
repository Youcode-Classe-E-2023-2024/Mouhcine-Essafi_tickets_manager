<?php
include '..\config\connection.php';
include '..\class\user_register.php';

if (isset($_POST['submit'])) {
    $userRegistration = new UserRegistration($db);
    $registrationResult = $userRegistration->registerUser($_POST['f-name'], $_POST['l-name'], $_POST['email'], $_POST['password']);
    echo "<script>alert('$registrationResult');</script>";
}
?>