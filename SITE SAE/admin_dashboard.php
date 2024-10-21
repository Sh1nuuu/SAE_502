<?php
session_start();
if ($_SESSION['role'] != 'administrateur') {
    header("Location: login.php");
    exit();
}

echo "<h1>Bienvenue Administrateur</h1>";
echo "<p>Accédez à la gestion des utilisateurs, des patients, des capteurs...</p>";
