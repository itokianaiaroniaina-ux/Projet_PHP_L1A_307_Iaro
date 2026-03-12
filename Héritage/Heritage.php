<?php
    /*
        L’héritage est un mécanisme qui permet à une classe d’hériter des propriétés et des méthodes d’une autre classe afin de réutiliser le code.
    */

    // Classe de base (superclasse) : Personne
    class Personne {
        protected $nom;
        protected $note;

        public function __construct($nom, $note) {
            $this->nom = $nom;
            $this->note = $note;
        }

        public function afficher() {
            return "Je m'appelle " . $this->nom . " et j'ai " . $this->note . " sur 20.";
        }
    } 
?>