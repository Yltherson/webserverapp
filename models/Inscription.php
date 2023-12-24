<?php

    class Inscription {
        private $codeInscription;
        private $prenom;
        private $nom;
        private $sexe;
        private $dateNaissance;
        private $classe;
        private $fraisInscription;
        private $dateInscription;

        function __construct($codeInscription, $prenom, $nom, $sexe, $dateNaissance, $classe, $fraisInscription ,$dateInscription) {
            $this->codeInscription = $codeInscription;
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->sexe = $sexe;
            $this->dateNaissance = $dateNaissance;
            $this->classe = $classe;
            $this->fraisInscription = $fraisInscription;
            $this->dateInscription = $dateInscription;

        }

        function set_codeInscription($codeInscription){
            $this->codeInscription = $codeInscription;
        }

        function get_codeInscription() {
            return $this->codeInscription;
        }
        
        function set_prenom($prenom){
            $this->prenom = $prenom;
        }

        function get_prenom(){
            return $this->prenom;
        }

        function set_nom($nom){
            $this->nom = $nom;
        }

        function get_nom() {
            return $this->nom;
        }

        function set_sexe($sexe){
            $this->sexe = $sexe;
        }

        function get_sexe(){
            return $this->sexe;
        }

        function set_dateNaissance($dateNaissance){
            $this->dateNaissance = $dateNaissance;
        }

        function get_dateNaissance() {
            return $this->dateNaissance;
        }

        function set_classe($classe){
            $this->classe = $classe;
        }

        function get_classe() {
            return $this->classe;
        }

        function set_fraisInscription($fraisInscription){
            $this->fraisInscription = $fraisInscription;
        }

        function get_fraisInscription() {
            return $this->fraisInscription;
        }

        function set_dateInscription($dateInscription){
            $this->dateInscription = $dateInscription;
        }

        function get_dateInscription() {
            return $this->dateInscription;
        }

    }

    // $inscrit = new Inscription('h4g75', 'Yltherson', 'ALCINDOR', 'M', '09/04/1999', 'L4', '2800', '2021');
?>