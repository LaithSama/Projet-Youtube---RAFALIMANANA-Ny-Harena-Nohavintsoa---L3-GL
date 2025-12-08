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

    $id = isset($_GET['Id']) ? $_GET['Id'] : null;
    $selection = null;
    foreach ($videos as $v) {
        if ($v['Id'] == $id) {
            $selection = $v; break;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture - <?php echo ($selection ? htmlspecialchars($selection['titre']) : 'Vidéo'); ?></title>
    <link rel="stylesheet" href="assets/CSS/Redirection.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="logo">
        <h1><i class="fa-solid fa-sliders" style="color:#000;"></i><i class="fa-brands fa-youtube" style="color:red;"></i> <a href="index.php">YouTube</a></h1>
        <form method="GET" action="index.php">
            <input type="search" name="q" placeholder="Rechercher ...">
            <button type="submit">Rechercher</button>
        </form>
        <div class="image">
            <img src="assets/IMG/utilisateur.jpg" alt="User">
        </div>
    </div>

    <div class="redirection-conteneur">
        <main class="principale">
            <?php if ($selection): ?>
                <div class="thumb">
                    <img src="<?php echo htmlspecialchars($selection['img']); ?>" alt="<?php echo htmlspecialchars($selection['titre']); ?>">
                </div>
                <div class="info">
                    <div class="avatar"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="meta">
                        <h2><?php echo htmlspecialchars($selection['titre']); ?></h2>
                    </div>
                </div>
            <?php else: ?>
                <p>Vidéo introuvable. <a href="index.php">Retour</a></p>
            <?php endif; ?>
        </main>

        <aside class="sidebar">
            <h3>Autres vidéos</h3>
            <div class="liste-sidebar">
                <?php foreach ($videos as $v): ?>
                    <a class="sidebar-item" href="Redirection.php?Id=<?php echo $v['Id']; ?>">
                        <img src="<?php echo $v['img']; ?>" alt="<?php echo htmlspecialchars($v['titre']); ?>">
                        <div class="side-text">
                            <i class="fa-solid fa-circle-user"></i>
                            <span><?php echo htmlspecialchars($v['titre']); ?></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </aside>
    </div>
    
</body>
</html>