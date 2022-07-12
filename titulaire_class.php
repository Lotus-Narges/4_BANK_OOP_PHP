<?php

    //localhost:8888/OOP-PHP(Bank)-Part4/titulaire_class.php

    class Titulaire {

        private string $_nom;
        private string $_prenom;
        private string $_dateDeNaissance;
        private string $_ville;
        //private int $_ensembleComptes;
        private array $_comptes;

        public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville) {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateDeNaissance = $dateDeNaissance;
            $this->_ville = $ville;
            $this->_ensembleComptes = 0;
            $this->_comptes = [];
        }

        public function setNom (string $nom){
            $this->_nom = $nom;
        }

        public function getNom (){
            return $this->nom;
        }

        public function setPrenom (string $prenom){
            $this->_prenom = $prenom;
        }

        public function getPrenom (){
            return $this->prenom;
        }

        public function setDateDeNaissance (string $dateDeNaissance){
            $this->_dateDeNaissance = $dateDeNaissance;
        }

        public function getDateDeNaissance (){
            return $this->dateDeNaissance;
        }

        public function setVille (string $ville){
            $this->_ville = $ville;
        }

        public function getVille (){
            return $this->ville;
        }

        public function setEnsembleComptes (int $ensembleComptes){
            $this->_ensembleComptes= $ensembleComptes;
        }

        public function getEnsembleComptes(){
            return $this->ensembleComptes;
        }

        public function setComptes (Compte $comptes){
            $this->_comptes[] = $comptes;
        }

        public function getComptes(){
            return $this->comptes;
        }

        public function afficherInfoPersonnelle(){
            $result = "<b>Personal Information: $this ";  //here $this refers to __toString function.
            foreach ($this->_comptes as $compte){
                $result .= $compte;
            }
            return $result;
        }

        public function __toString(){
            return "First name: ".$this->_prenom ."<br>
                    Last name:" . strtoupper($this->_nom) . "<br>
                    Birth date: ".$this->_dateDeNaissance."<br>
                    City:" . $this->_ville ."<br>";
        }

    }

?>
