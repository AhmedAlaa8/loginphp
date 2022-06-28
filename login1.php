<?php

session_start();

if (isset($_POST["email"])) {


    $e = $_POST["email"];
    $p = $_POST["password"];

    if ($e == "a@a.com" && $p == "123") {

        $_SESSION["email"] = "a@a.com";


        header("location:./index.php");
    } else {
        header("location:./login.php");
    }
} else {
    header("location:./login.php");
}
