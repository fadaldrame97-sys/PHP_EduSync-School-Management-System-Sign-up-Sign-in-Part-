<?php
session_start();

if (isset($_POST["register"])){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=$_POST["password"];

echo"Inscription réusssi";

echo"<pre>";
print_r($_POST);
echo"<pre>";

}
if (isset($_POST["login"])){
$nom=$_POST["email"];
$password=$_POST["password"];

$_SESSION['us'] = $email;

header("location:dashboard.php");
exit();

include_once'data.php';

$sql="INSERT INTO users (nom,prnom ,email,passeword)
values('$nom','$prenom','$email','$password')";

mysqli_query($connexion,$sql);

};

 

