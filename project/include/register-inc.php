<?php 

if (isset($_POST['submit'])) {
    //Add database connection
    require_once 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];

    if (empty($username) || empty($password) || empty($confirmPass)) {
        header("Location: ../register.php?error=emptyfields&username=".$username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*/", $username)){
        header("Location: ../register.php?error=invalidusername&username=".$username);
        exit();
    } else if($password !== $confirmPass){
        header("Location: ../register.php?error=passwordsdonotmatch&username=".$username);
        exit();
    } else {
        $sql = "";
    }
}


?>