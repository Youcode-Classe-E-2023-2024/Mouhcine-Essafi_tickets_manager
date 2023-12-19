<?php
include '..\config\connection.php';
include '..\class\user_login.php';
print_r($_POST);
if (isset($_POST['submit'])) {
    $userRegistration = new UserLogin($db);
    $registrationResult = $userRegistration->loginUser($_POST['log_email'], $_POST['log_password']);
    echo "<script>alert('$registrationResult');</script>";
}
?>