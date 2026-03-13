<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nom : " . $_POST["nom"] . "<br>";
    echo "Email : " . $_POST["email"] . "<br>";
    /* Vérifie si le champ entreprise est défini avant de l'afficher */
    if (isset($_POST["entreprise"])) echo "Entreprise : " . $_POST["entreprise"] . "<br>"; 
    if (isset($_POST["type-projet"])) echo "Type de projet : " . $_POST["type-projet"] . "<br>";
    echo "Message : " . $_POST["message"] . "<br>";
}
?>