<?php
    // Connexion à une base de données MySQL avec PDO
    $host = 'localhost'; // Adresse du serveur de base de données
    $dbname = 'ecole'; // Nom de la base de données
    $username = 'leo'; // Nom d'utilisateur de la base de données
    $password = 'Gojo@0202'; // Mot de passe de la base de données

    try{
        // Création d'une instance PDO pour se connecter à la base de données
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        // Configuration des options PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Afficher les erreurs SQL
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Récupérer les résultats sous forme de tableau associatif

        echo "Connexion réussie à la base de données.";
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
?>