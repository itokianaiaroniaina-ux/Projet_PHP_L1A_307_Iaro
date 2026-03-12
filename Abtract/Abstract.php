<?php
    /*
        Classe abstraite

        - Une classe abstraite ne peut pas être instanciée.

        - Elle sert de modèle pour d’autres classes.

        - Elle peut contenir des méthodes normales et des méthodes abstraites.
    */

    // Exemple de classe abstraite : Animal
    abstract class Animal {
        protected $nom;

        public function __construct($nom) {
            $this->nom = $nom;
        }

        // Méthode abstraite (doit être implémentée par les classes dérivées)
        abstract public function Crier();
    }

    // Classe dérivée : Chien
    class Chien extends Animal {
        public function Crier() {
            return "Woof!";
        }
    }

    // Classe dérivée : Chat
    class Chat extends Animal {
        public function Crier() {
            return "Miauo!";
        }
    }
?>