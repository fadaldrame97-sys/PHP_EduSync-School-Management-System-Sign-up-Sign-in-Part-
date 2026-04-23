<?php

$database="localhost";
$db_user="root";
$db_pass="";
$db_name="ecole_databases";
$connexion="";

$connexion=mysqli_connect($database,$db_user,$db_pass,$db_name);

 if ($connexion){
    echo"tu es connecté!";
 }