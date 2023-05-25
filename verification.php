<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "membres";


try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    //verification des données saisies 
    if ($email != "" && $mdp != "") {

        $requete = $bdd->query("SELECT * FROM membre WHERE email = '$email' AND mdp = '$mdp'");

        $reponse = $requete->fetch();

        if (is_array($reponse) && $reponse['id'] != false) {

            //ok c'est bon 
            echo "Vous etes connecté";
        }else{
            //message d'erreur 
            $error_msg = "Email ou mdp incorrect !";
            header("Location: /php_projet/connexion.php?error={$error_msg}");
        }
    }
}
?>