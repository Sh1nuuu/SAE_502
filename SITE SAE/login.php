<?php
session_start();
require('db_connection.php');  // Fichier contenant la connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Requête SQL pour récupérer l'utilisateur avec ce nom d'utilisateur
    $sql = "SELECT id_utilisateur, password, role FROM utilisateurs WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_utilisateur, $hashed_password, $role);
        $stmt->fetch();

        // Vérification du mot de passe haché
        if (password_verify($password, $hashed_password)) {
            // Connexion réussie, rediriger selon le rôle
            $_SESSION['id_utilisateur'] = $id_utilisateur;
            $_SESSION['role'] = $role;

            if ($role == 'administrateur') {
                header("Location: admin_dashboard.php");
            } elseif ($role == 'medecin') {
                header("Location: medecin_dashboard.php");
            } elseif ($role == 'infirmiere') {
                header("Location: infirmiere_dashboard.php");
            }
            exit();
        } else {
            echo "Identifiants incorrects.";
        }
    } else {
        echo "Utilisateur non trouvé.";
    }
}
?>

