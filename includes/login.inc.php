<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $password = $_POST["password"];

    require_once 'connection.inc.php' ;
    require_once 'functions.inc.php';

    if (emptyInputLogin($username,$password) !== false) {
        header("location: ../login.php?error=empty_input");
        exit();
    }

    loginUser($conn, $username,$password);
}
else {
    header("location: ../login.php");
    exit();
}