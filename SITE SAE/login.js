function validateLogin() {
    // Récupérer les éléments du formulaire
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Récupérer les éléments d'affichage des erreurs
    var usernameError = document.getElementById("usernameError");
    var passwordError = document.getElementById("passwordError");

    // Réinitialiser les messages d'erreur
    usernameError.textContent = "";
    passwordError.textContent = "";

    // Vérifier si les champs sont vides
    var valid = true;

    if (username === "") {
        usernameError.textContent = "Veuillez entrer votre nom d'utilisateur.";
        valid = false;
    }

    if (password === "") {
        passwordError.textContent = "Veuillez entrer votre mot de passe.";
        valid = false;
    }

    // Si tout est correct, retourner true pour soumettre le formulaire, sinon false
    return valid;
}
