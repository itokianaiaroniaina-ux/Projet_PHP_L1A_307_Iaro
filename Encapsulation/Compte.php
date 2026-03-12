<?php

/*
    L’encapsulation en PHP est un principe de la POO qui consiste à protéger les données d’une classe en limitant leur accès grâce aux modificateurs private, protected et public, et en utilisant des méthodes pour manipuler ces données.
*/

    // Exemple d'encapsulation avec une classe Compte bancaire

    class Compte {
        private $solde;

        // Constructeur pour initialiser le solde du compte
        public function __construct($soldeInitial) {
            $this->solde = $soldeInitial;
        }

        // Méthode pour déposer de l'argent sur le compte
        public function deposer($montant) {
            if ($montant > 0) {
                $this->solde += $montant;
            } else {
                echo "Le montant doit être positif.";
            }
        }

        // Méthode pour retirer de l'argent du compte
        public function retirer($montant) {
            if ($montant > 0 && $montant <= $this->solde) {
                $this->solde -= $montant;
            } else {
                echo "Montant invalide ou solde insuffisant.";
            }
        }
        
        // Méthode pour obtenir le solde actuel du compte   
        public function getSolde() {
            return $this->solde;
        }
    }
?>