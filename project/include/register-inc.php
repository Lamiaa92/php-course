<?php 

if (isset($_POST['submit'])) {
    //Add database connection
    require_once 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];
}


?>