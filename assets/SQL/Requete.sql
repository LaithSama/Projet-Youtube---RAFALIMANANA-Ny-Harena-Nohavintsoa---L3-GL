CREATE DATABASE YoutubeBDD;

USE YoutubeBDD;

CREATE TABLE Videos (
    Id INT PRIMARY KEY,
    Titre VARCHAR(50),
    CheminImage VARCHAR(100)
);

INSERT INTO Videos (Id, Titre, CheminImage) VALUES 
("1" , "J'infiltre une base dans Ghost Recon Breakpoint", "assets/IMG/img1.jpg"), 
("2" , "Première fois sur Ghost Recon Breakpoint", "assets/IMG/img2.jpg"), 
("3" , "Moi et mon esquad on se prépare", "assets/IMG/img3.jpg"), 
("4" , "Première fois en multijoueur - ft.DevilHax", "assets/IMG/img4.jpg"), 
("5" , "Blur PC 240 FPS ULTRA - Gameplay no commentary", "assets/IMG/img5.jpg"), 
("6" , "Call Of Duty Black ops III - First Mission", "assets/IMG/img6.jpg"), 
("7" , "Tekken 7 - Top 3 des meilleurs personnage du jeux", "assets/IMG/img7.jpg"), 
("8" , "AC Black Flags - Pourquoi est ce que c'est le meilleur de tout assassins creed ?", "assets/IMG/img8.jpg");