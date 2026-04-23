<?php
session_start();
include_once'data.php';
if (isset($_POST["register"])){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=$_POST["password"];

echo"Inscription réusssi";

echo"<pre>";
print_r($_POST);
echo"<pre>";



$sql="INSERT INTO users (nom,prnom ,email,passeword)
values('$nom','$prenom','$email','$password')";

mysqli_query($connexion,$sql);


$sql="select* from users where email='$email'";
$result=mysqli_query($connexion,$sql);
if(mysqli_num_rows($result)>0){
    //email existe déja
}
    

}
if (isset($_POST["login"])){
$email=$_POST["email"];
$password=$_POST["password"];

$_SESSION['us'] = $email;

header("location:dashboard.php");
exit();



};



 

