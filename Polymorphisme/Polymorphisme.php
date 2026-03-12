<?php
    /*
        Le polymorphisme est la capacité pour une même méthode d’avoir plusieurs comportements selon l’objet ou la classe qui l’utilise.
    */

    // Exemple de polymorphisme avec une classe de base et des classes dérivées

    require_once 'Heritage.php'; // Inclure la classe Personne

    // Classe dérivée : Etudiant
    class Etudiant extends Personne {

        protected $note;
        
        public function __construct($nom, $note) {
            parent::__construct($nom, $note);
        }

        public function afficher() {
            return "Je suis un étudiant. " . parent::afficher();
        }
    }
?>