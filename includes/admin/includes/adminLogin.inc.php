<?php

if (isset($_POST["submit"])) {
    $adminName = $_POST["adminId"];
    $password = $_POST["password"];

    require_once 'connection.inc.php' ;
    require_once 'functions.inc.php';

    if (emptyInputLogin($adminName,$password) !== false) {
        header("location: ../admin/adminLogin.php?error=empty_input");
        exit();
    }

    loginAdmin($conn, $adminName,$password);
}
else {
    header("location: ../admin/adminLogin.php");
    exit();
}