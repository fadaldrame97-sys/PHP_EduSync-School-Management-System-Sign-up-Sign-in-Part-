<?php
session_start();
include_once'data.php';
if (isset($_POST["register"])){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=$_POST["password"];



echo"<pre>";
print_r($_POST);
echo"<pre>";

$sql="select* from users where email='$email'";
$result=mysqli_query($connexion,$sql);
if(mysqli_num_rows($result)>0){
   header("Location: register.php?error=email_exists");
        exit();
}

$sql="INSERT INTO users (nom,prnom ,email,passeword)
values('$nom','$prenom','$email','$password')";

mysqli_query($connexion,$sql);



    

}
if (isset($_POST["login"])){
$email=$_POST["email"];
$password=$_POST["password"];

$_SESSION['us'] = $email;

$sql="select* from users where email='$email'&& passeword='$password' ";
$result=mysqli_query($connexion,$sql);

if(mysqli_num_rows($result)>1){
header("location:dashboard.php");
exit();
}







};



 

