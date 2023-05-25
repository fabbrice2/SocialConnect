<?php 
// $bdd = new PDO("mysql:host=localhost;dbname=utilisateur;", "root");
// if (isset($_POST['ok'])) {
//     $email = $_POST['email'];
//     $mdp = $_POST['mdp'];
//     // $uname = $_POST['uname'];
//     // $day = $_POST['day_'];
//     // $month = $_POST['month_'];
//     // $year = $_POST['year_'];
//     $insert = $bdd->prepare('INSERT INTO users(email, mdp, uname, day_, month_, year_,)VALUES(?, ?)');
//     $insert->execute(array($email, $mdp));
// }else {
//     echo 'veuillez rzmplir tous les champs';
// }

$servername = "localhost";
$username = "root";
$dbname = "utilisateur";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}

if (isset($_POST['ok'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $uname = $_POST['uname'];
    $day = $_POST['da'];
    $month = $_POST['mont'];
   $year = $_POST['yea'];
   $gender = $_POST['gender'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :email, :mdp, :uname, :da, :mon, :yea,)");
    $requete->execute(
        array(
            "email" => $email,
            "mdp" => $mdp,
            "uname" => $uname,
            "da" => $day,
            "mont" => $month,
            "yea" => $year,
            "gender" => $gender
        )
    );
    $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
}



$title = 'Inscription-SocialConnnect';
require 'header.php'; ?>




<body>
    <div class="inscription">
        <div class="logo">
            <img src="img/sc_n.png" alt="logo">
            <span>SocialConnect</span>
        </div>

        <h1>Inscrivez-vous pour voir les photos <br>et vidéos  de vos amis.</h1>

        <div class="google_connexion">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png" alt="google">
            <span>Connectez-vous avez google</span>
        </div>

        <div class="or">
            <span class="line"></span>
            <span class="or_or">ou</span>
            <span class="line"></span>
        </div>

        <div class="formulaire">
            <form action="traitement.php" method="POST">
                <label for="email">Quelle est votre adresse e-mail ?</label><br>
                <input type="email" id="email" name="email" placeholder="Saisissez votre adresse e-mail." required><br>
                <label for="password">Créez un mot de passe</label><br>
                <input type="mdp" id="password" name="mdp" placeholder="Créez un mot de passe." required><br>
                <label for="uname">Comment doit-on vous appeler ?</label><br>
                <input type="text" id="uname" name="uname" placeholder="Saisissez un nom de profil." required><br>

                <label for="text">Quelle est votre date de naissance ?</label><br>
                <div class="birth">
                    <div class="date">
                        <h2>Jour</h2>
                        <input type="text" id="day" inputMode="numeric" maxLength="2" name="day_" placeholder="JJ" required/>
                    </div>



                    <div class="month">
                        <h2>Mois</h2>
                        <select id="month" name="month_" required>
                        <option selected="" disabled="" value="">Mois</option>
                        <option value="01">Janvier</option>
                        <option value="02">Février</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">Juillet</option>
                        <option value="08">Août</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                    </select> 
                    </div>


                    <div class="year">
                        <h2>Année</h2>
                        <input type="text" id="year" inputMode="numeric" maxLength="4" name="year_" placeholder="AAAA" required/>
                    </div>
                </div>

                <label for="text">Quel est votre sexe ?</label><br>
                <div class="sex">
                    <div class="label">
                        <input type="radio" id="masculin" name="gender" value="Masculin">
                        <label for="gender_male">Masculin</label>
                    </div>

                    <div class="label">
                        <input type="radio" id="feminin" name="gender" value="Féminin">
                        <label for="gender_female">Féminin</label>
                    </div> 

                     <div class="label">
                        <input type="radio" id="autre" name="gender" value="Autre">
                        <label for="gender_other">Autre</label>
                    </div>

                    <div class="label">
                        <input type="radio" id="autre" name="gender" value="Autre">
                        <label for="gender_other">Non binaire</label>
                    </div>

                    <div class="label">
                        <input type="radio" id="autre" name="gender" value="Autre">
                        <label for="gender_other">Je souhaite ne pas l'indiquer </label>
                    </div>

                </div>

                <span class="text">
                    Les personnes qui utilisent notre service ont pu importer vos coordonnées sur SocialConnect. <span>En savoir plus</span> <br><br><br>
                    En vous inscrivant, vous acceptez nos <span>Conditions générales.</span> Découvrez comment nous recueillons, utilisons et partageons vos données en lisant notre <span>Politique de confidentialité</span> et comment nous utilisons les cookies et autres technologies similaires en consultant notre <span>Politique d’utilisation des cookies</span>.
                </span>

                <div class="submit">
                    <input id="button" type="submit" name="ok" value="S'inscrire">
                    <span class="inscription_btn">
                    Vous avez déjà un compte?
                    <a href="connexion.php">Connectez-vous.</a>
                    </span>
                </div>
                
            </form>

        </div>

    </div>

</body>


<?php require 'footer.php'; ?>
