<?php
session_start();
include_once'data.php';

//Inscription

if (isset($_POST["register"])){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=$_POST["password"];



// echo"<pre>";
// print_r($_POST);
// echo"<pre>";

//vérification si l'email n'existe pas

$sql="select* from users where email='$email'";
$result=mysqli_query($connexion,$sql);

if(mysqli_num_rows($result)>0){
   header("Location: register.php?error=email_exists");
        exit();
}

//inserer les données dans database si l'email n'existe pas

$sql="INSERT INTO users (nom,prnom ,email,passeword)
values('$nom','$prenom','$email','$password')";

mysqli_query($connexion,$sql);

header("location:login.php?success=registred");
exit();



//récupérer login  

}
if (isset($_POST["login"])){
$email=$_POST["email"];
$password=$_POST["password"];

//vérifé si l'email ou mots de passé correct ou déja existe

$sql="select* from users where email='$email' AND  passeword='$password' ";
$result=mysqli_query($connexion,$sql);

//si il existe déja, on se redirige vers page dashboard

if(mysqli_num_rows($result)==1){
$_SESSION['us'] = $email;



header("location:dashboard.php");
exit();
}

//Sinon email ou mots de passe incorrect
else {
header("location:login.php?error=invalid");
exit();

}



};



 

