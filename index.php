<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:./login.php");
}
if ($_SESSION["role"] == "user") {
    header("location:./aboutUser.php");
} elseif ($_SESSION["role"] == "admin") {
    header("location:./aboutAdmin.php");
} else {
    $errorMessage = "Contact customer service";
}
?>