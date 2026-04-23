<?php
session_start();

if (!isset($_SESSION['us'])) {
    header("Location: login.php");
    exit();
}
?>