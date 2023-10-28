<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}
if ($_SESSION["role"] == "user") {
    header("Location: users.php");
} else {
    header("Location: role_manage.php");
}
