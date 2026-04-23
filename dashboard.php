<?php
session_start();

if (!isset($_SESSION['us'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body class="w-full">
    <div class="w-70% w-75 bg-emerald-400 shadow-2xl rounded-lg">
<h1>Bienvenue dans votre votre espace </h1>
</div>
</body>
</html>