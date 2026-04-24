
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-green-300">
  <div class="flex flex-col items-center justify-center h-screen text-center">

 <h1 class="text-4xl font-bold mb-4">
        Bienvenue sur EduSync
    </h1>

<?php if(isset($_SESSION['email'])): ?>

    
        <a href="dashboard.php"
        class="bg-green-500 text-white px-6 py-3 rounded">
            Aller au Dashboard
        </a>

        <a href="logout.php"
        class="bg-green-500 text-white px-6 py-3 rounded ml-4">
            Déconnexion
        </a>

    <?php else: ?>
  

        
        <a href="login.php"
        class="bg-green-700 text-white px-6 py-3 rounded mr-4">
            Se connecter
        </a>

        <a href="register.php"
        class="bg-green-700 mt-4 text-white px-6 py-3 rounded">
            S'inscrire
        </a>

    <?php endif; ?>


  </div>  



</body>
</html>