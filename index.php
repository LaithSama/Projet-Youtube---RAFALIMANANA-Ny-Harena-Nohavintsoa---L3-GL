<?php
    require "Traitement.php";
    connexion();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube</title>
    <link rel="stylesheet" href="assets\CSS\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="logo">
        <h1><i class="fa-solid fa-sliders" style="color: #000000;"></i><i class="fa-brands fa-youtube"></i>YouTube</h1>
        <form method="POST">
            <input type="search" placeholder="Rechercher ...">
            <button type="submit">Rechercher</button>
        </form>
        <div class="image">
            <img src="assets\IMG\utilisateur.jpg" alt="User">
        </div>
    </div>
    <div class="conteneur-principal">
        <div class="conteneur">
            <nav>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-house" style="color: #000000;"></i>Accueil</a></li>
                    <li><a href="#"><i class="fa-solid fa-video" style="color: #000000;"></i>Shorts</a></li>
                    <li><a href="#"><i class="fa-solid fa-bell" style="color: #000000;"></i>Abonemments</a></li>
                </ul>
            </nav>
        </div>
        <div class="content-right">
            <div class="video">
                <?php 
                        $liste = array("Tous", "Musique", "Mix", "Rap Français");
                        for ($i = 0; $i < count($liste); $i++) {
                            ?>
                            <button><?php echo $liste[$i] ?></button>
                            <?php
                        }
                ?>
            </div>
            <div class="videos-container">
                <?php 
                    $videos = array(
                        array("Id" => "1", "titre" => "J'infiltre une base dans Ghost Recon Breakpoint", "img" => "assets/IMG/img1.jpg"),
                        array("Id" => "2", "titre" => "Première fois sur Ghost Recon Breakpoint", "img" => "assets/IMG/img2.jpg"),
                        array("Id" => "3", "titre" => "Moi et mon esquad on se prépare", "img" => "assets/IMG/img3.jpg"),
                        array("Id" => "4", "titre" => "Première fois en multijoueur - ft.DevilHax", "img" => "assets/IMG/img4.jpg"),
                        array("Id" => "5", "titre" => "Blur PC 240 FPS ULTRA - Gameplay no commentary", "img" => "assets/IMG/img5.jpg"),
                        array("Id" => "6", "titre" => "Call Of Duty Black ops III - First Mission", "img" => "assets/IMG/img6.jpg"),
                        array("Id" => "7", "titre" => "Tekken 7 - Top 3 des meilleurs personnage du jeux", "img" => "assets/IMG/img7.jpg"),
                        array("Id" => "8", "titre" => "AC Black Flags - Pourquoi est ce que c'est le meilleur de tout assassins creed ?", "img" => "assets/IMG/img8.jpg"),
                    );
                    foreach ($videos as $video) {
                        ?>
                        <div class="video-card-yt">
                            <div class="video-thumb-yt">
                                <a href="Redirection.php?Id=<?php echo $video["Id"]; ?>"><img src="<?php echo $video['img']; ?>" alt="<?php echo $video['titre']; ?>"></a>
                            </div>
                            <div class="video-info-yt">
                                <div class="video-avatar-yt">
                                    <i class="fa-solid fa-circle-user"></i>
                                </div>
                                <h3 class="video-title-yt"><?php echo $video['titre']; ?></h3>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <footer><p>RAFALIMANANA Ny Harena Nohavintsoa</p></footer>
</body>
</html>