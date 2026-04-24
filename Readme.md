🔐 Projet PHP – Système d'Authentification

#auteur : MOUHAMADOU FADAL Dramé

------Description--------

Ce projet est une application web simple développée en PHP permettant :

l'inscription d'un utilisateur
la connexion sécurisée
la gestion des sessions
la protection des pages privées

-----Objectifs pédagogiques--------

Comprendre la méthode POST
Communiquer avec une base de données MySQL
Implémenter un système d'authentification
Utiliser les sessions PHP

------Technologies utilisées-------------
PHP
MySQL
HTML5
TailwindCSS
XAMPP / WAMP (serveur local)


--------Structure du projet-------------
project/

login.php     :Formulaire de connexion
register.php   :Formulaire d'inscription
dashboard.php   :Page protégée
authprocess.php  :Traitement Login / Register
logout.php       :Déconnexion utilisateur
data.php          :Connexion base de données
style.css
README.md


    -------------Base de données--------------------

Créer une base :

ecole_databases
Table users
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(100),
prnom VARCHAR(100),
email VARCHAR(150) UNIQUE,
passeword VARCHAR(255)
);


__________ Fonctionnalités______________________

1-Inscription
formulaire envoyé via $_POST
vérification email existant
insertion sécurisée en base

2-Connexion
vérification des identifiants
utilisation de password_verify()
création de session utilisateur

$_SESSION['email']

3-Protection Dashboard

Seuls les utilisateurs connectés peuvent accéder à dashboard.php

Sinon redirection automatique vers login.

4-Déconnexion
logout.php
destruction de session
redirection vers login

