<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo PhP</title>
    <link rel="stylesheet" href="assets\CSS\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="logo">
        <h1>Youtube</h1>
        <form method="POST">
            <input type="serarch" placehoder="Rechercher ...">
            <button type="submit">Rechercher</button>
        </form>
        <div class="image">
            <img src="assets\IMG\images.png" alt="icoYoutube">
        </div>
    </div>
    <div class="conteneur-principal">
        <div class="conteneur">
            <nav>
                <ul>
                    <li><i class="fa-solid fa-house"></i><a href="#">Accueil</a></li>
                    <li><i class="fa-solid fa-video"></i><a href="#">Shorts</a></li>
                    <li><i class="fa-solid fa-bell"></i><a href="#">Abonemments</a></li>
                </ul>
            </nav>
        </div>
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
    </div>
    
</body>
</html>