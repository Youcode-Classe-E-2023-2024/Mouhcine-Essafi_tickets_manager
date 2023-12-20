<?php
// include '..\config\connection.php';
include '..\class\user_login.php';

if (isset($_POST['submit_l'])) {
    $userRegistration = new UserLogin($db);
    $registrationResult = $userRegistration->loginUser($_POST['log_email'], $_POST['log_password']);
    // echo "<script>alert('$registrationResult');</script>";
    if ($registrationResult === true) {
        header('location: ../view/index.php');}
}
?>