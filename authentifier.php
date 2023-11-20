<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Projet_web"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Cin = $_POST["Cin"];
    $Mdp = $_POST["Mdp"];

    
    $sql = "SELECT * FROM authentif WHERE Cin = '$Cin' AND Mdp = '$Mdp'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Connexion réussite !";
        header('Location: menu.html');
        exit;
 // Vous pouvez rediriger l'utilisateur vers une autre page ici
    } else {
        echo "Identifiants invalides. Veuillez réessayer.";
    }
}


?>
