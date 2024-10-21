<?php
session_start();
if ($_SESSION['role'] != 'medecin') {
    header("Location: login.php");
    exit();
}

echo "<h1>Bienvenue Médecin</h1>";
echo "<p>Consultez les informations des patients et accédez aux données médicales...</p>";
