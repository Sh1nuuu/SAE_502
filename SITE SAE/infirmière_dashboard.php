<?php
session_start();
if ($_SESSION['role'] != 'infirmiere') {
    header("Location: login.php");
    exit();
}

echo "<h1>Bienvenue Infirmière</h1>";
echo "<p>Accédez aux informations des patients et aux médicaments disponibles...</p>";
