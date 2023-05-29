
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="acceuil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <?php
    $title = 'Acceuil-SocialConnnect';?>
    <title><?php if (isset($title)) { echo $title; } else { echo 'SocialConnect'; } ?></title>
</head>
<body>
<?php

// require_once 'traitement.php';

// $username = $uname;

session_start();

$msg = "";

if (isset($_POST['upload'])) {
    // Vérifier si la soumission du formulaire a déjà été effectuée
    if (!isset($_SESSION['upload_completed'])) {
        $target = "images/".basename($_FILES['image']['name']);
        $db = mysqli_connect("localhost", "root", "", "membres");
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];
        $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "succès";
        } else {
            $msg = "erreur";
        }

        // Marquer la soumission du formulaire comme terminée
        $_SESSION['upload_completed'] = true;

        // Redirection vers une autre page après la publication
        header("Location: acceuil.php");
        exit(); // Assurez-vous de terminer le script après la redirection
    }
}

// Réinitialiser la variable de session lors du chargement initial de la page
unset($_SESSION['upload_completed']);
?>

<!-- Le reste de votre code HTML -->

    <div class="menu">
        <span class="logo">
            <img src="img/wrSC-removebg-preview.png" alt="logo">
        </span>
        <div class="menu_box">
            <ul>
                <li>
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Acceuil</span>
                </li>
                <li>
                    <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
                    <span class="text">Recherche</span>
                </li>
                <li>
                    <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                    <span class="text">Message</span>
                </li>
                <li>
                    <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></i></span>
                    <span class="text">Créer</span>
                </li>
                <li>
                    <span class="icon"><ion-icon name="heart-outline"></ion-icon></span>
                    <span class="text">Notifications</span>
                </li>
                <li>
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <span class="text">Profil</span>
                </li>
                <li>
                    <span class="icon"><ion-icon name="menu-outline"></ion-icon></span>
                    <span class="text">Plus</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="banner_post">
    <div class="acceuil">
        <div class="story">
            <ul>
                <li>
               <div class="story_box">
                 <img src="https://via.placeholder.com/50x50" alt="story">
                 <h1>
                    Toto
                 </h1>
               </div>
               <div class="story_box">
                 <img src="https://via.placeholder.com/50x50" alt="story">
                 <h1>
                    Toto
                 </h1>
               </div>
               <div class="story_box">
                 <img src="https://via.placeholder.com/50x50" alt="story">
                 <h1>
                    Toto
                 </h1>
               </div>
               <div class="story_box">
                 <img src="https://via.placeholder.com/50x50" alt="story">
                 <h1>
                    Toto
                 </h1>
               </div>
               <div class="story_box">
                 <img src="https://via.placeholder.com/50x50" alt="story">
                 <h1>
                    Toto
                 </h1>
               </div>
               <div class="story_box">
                 <img src="https://via.placeholder.com/50x50" alt="story">
                 <h1>
                    Toto
                 </h1>
               </div>
               <div class="story_box">
                 <img src="https://via.placeholder.com/50x50" alt="story">
                 <h1>
                    Toto
                 </h1>
               </div>
               <div class="story_box">
                 <img src="https://via.placeholder.com/50x50" alt="story">
                 <h1>
                    Toto
                 </h1>
               </div>
            </li>
            </ul>
        </div>
    </div>
    <form class="wrap" id="comment-form" method="POST" action="acceuil.php" enctype="multipart/form-data">
            <div class="user">
                <img src="https://via.placeholder.com/50x50" alt="profil">
                <input type="text" name="text" placeholder="Quoi de neuf ?">
            </div>
            <input type="hidden" name="size" value="1000000">
            <div>
            <input type="file" name="image" >
            </div>
            <div class="pub">
            <button type="submit" name="upload">Publier</button>
            </div>
    </form>
    <?php

            $db = mysqli_connect("localhost", "root", "", "membres");
            $sql = "SELECT * FROM images";
            $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)){
                echo '<div class="post">';
                echo '<div class="post_header">';
                echo '<div class="user">';
                    echo '<img src="https://via.placeholder.com/50x50" alt="profil">';
                    echo "<h1>Toto</h1>";
                echo "</div>";
                echo '<span><ion-icon name="trash-outline"></ion-icon></span>';
                echo "</div>";
                echo "<div class='post_img'>";
                echo "<img src='images/".$row['image']."' >";
                echo "<p>".$row['text']."</p>";
                echo "</div>";
                echo "<div class='comment'>
                        <input type='text' name='comment' placeholder='Ajouter un commentaire...'>
                        </div>";
                echo '</div>';
            }
        ?>
    <div class="post">
        <div class="post_header">
            <div class="user">
                <img src="https://via.placeholder.com/50x50" alt="profil">
                <h1>Toto</h1>
            </div>
            <span><ion-icon name="trash-outline"></ion-icon></span>
        </div>
        <div class="post_img">
            <img src="https://via.placeholder.com/385x500" alt="post">
            <p>Bonjour le amis</p>
        </div>
        <div class="comment">
            <div class="com">
                <span class="uname">
                    <h1>Toto</h1>
                    <span class="commentaire">Trop cool ta photo</span>
                </span>
                <span class="icon">
                    <ion-icon name="trash-outline"></ion-icon>
                </span>
            </div>
            <input type="text" name="comment" placeholder="Ajouter un commentaire...">
        </div>
    </div>
    </div>


    

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="acceuil"></script>
</body>
</html>