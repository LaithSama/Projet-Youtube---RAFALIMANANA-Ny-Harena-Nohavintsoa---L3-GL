<?php
    
    function connexion() {
        $servername = "localhost";
        $dbport = 3306;;
        $username = "root";
        $password = "";
        $dbname = "YoutubeBDD";

        try {
            $con = new PDO("mysql:host=$servername;port=$dbport;dbname=$dbname", $username, $password);
            echo "Connexion réussie";
            return $con;
        }catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
    
?>