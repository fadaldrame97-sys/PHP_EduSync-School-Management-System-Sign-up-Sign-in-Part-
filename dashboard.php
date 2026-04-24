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
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body class="flex justify-center items-center w-full h-100 text-center">
    <div class="w-1/2 h-1/2 bg-emerald-400 shadow-2xl rounded-lg">
<h1 class="flex justify-center text-center items-baseline-last pt-15 font-bold text-3xl">Bienvenue dans votre votre espace </h1>
<p class="pt-5 font-bold"> <?php echo $_SESSION['us'];?></p>
</div>

<a href="logout.php"
class="bg-red-500 text-white px-4 py-2 rounded">
Déconnexion
</a>
</body>
</html>