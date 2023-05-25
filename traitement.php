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

if (isset($_POST['ok'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $uname = $_POST['uname'];
    $day = $_POST['day_'];
    $month = $_POST['month_'];
   $year = $_POST['year_'];
   $gender = $_POST['gender'];


    $requete = $bdd->prepare("INSERT INTO membre VALUES (0, :email, :mdp, :uname, :day_, :month_, :year_, :gender)");
    $requete->execute(
        array(
            "email" => $email,
            "mdp" => $mdp,
            "uname" => $uname,
            "day_" => $day,
            "month_" => $month,
            "year_" => $year,
            "gender" => $gender
        )
    );
    $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
}
?>
