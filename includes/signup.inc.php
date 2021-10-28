<?php

if (isset($_POST["submit"])) 
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];

    require_once 'connection.inc.php' ;
    require_once 'functions.inc.php';

    if (emptyInputSignup($name,$email,$username,$password,$confirm) !== false) {
        header("location: ../signup.php?error=empty_input");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invalid_uid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalid_email");
        exit();
    }
    if (passwordConfirm($password, $confirm) !== false) {
        header("location: ../signup.php?error=passwords_do_not_match");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=username_exist");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);
}
else 
{
    header("location: ../signup.php");
    exit();
}