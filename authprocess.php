<?php

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
 

