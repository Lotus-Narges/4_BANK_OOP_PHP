<?php

    //localhost:8888/OOP-PHP(Bank)-Part4/compte_class.php

    class Compte {

        private string $_libelle;
        private float $_soldInitial;
        private string $_deviseMonetaire;
        private Titulaire $_titulaire;

        public function __construct ($libelle, Titulaire $titulaire){
            $this->_libelle = $libelle;
            $this->_soldInitial = 0;
            $this->_deviseMonetaire = "€";
            $this->_titulaire = $titulaire;
            $this->_titulaire->setComptes($this);
        }

        public function setLibelle (string $libelle){
            $this->_libelle = $libelle;
        }

        public function getLibelle(){
            return $this->libelle;
        }

        public function setSoldInitial (float $soldInitial){
            $this->_soldInitial = $soldInitial;
        }

        public function getSoldInitial(){
            return $this->soldInitial;
        }

        public function setDeviseMonetaire (string $deviseMonetaire){
            $this->_deviseMonetaire = $deviseMonetaire;
        }

        public function getDeviseMonetaire(){
            return $this->_deviseMonetaire;
        }

        public function setTitulaire (Titulaire $titulaire){
            $this->_titulaire = $titulaire;
        }

        public function getTitulaire(){
            return $this->titulaire;
        }

        public function crediter (float $montant){
            $this->_soldInitial+= $montant;
            return "Account has been updated: <br>
                    Balance available: $this->_soldInitial $this->_deviseMonetaire<br><br>";
        }

        public function debiter (float $montant){
            if ($this->_soldInitial >= $montant){
                $this->_soldInitial-= $montant;
                return "Account balance has been updated: <br>
                        Balance available:  $this->_soldInitial $this->_deviseMonetaire<br><br>";
            }else{
                return "Insufficient funds! <br>
                        Balance available: $this->_soldInitial $this->_deviseMonetaire<br><br>";
            }
        }

        public function virement (float $montant, Compte $compteCible){
            if ($this->_soldInitial >= $montant){
                $this->_soldInitial-= $montant;
                $this->debiter($montant);
                $compteCible->crediter($montant);
                return "Transfer has been made. <br>
                        Balance available: $this->_soldInitial $this->_deviseMonetaire <br><br>";
            }else{
                $this->_soldInitial-= $montant;
                return "Insufficient funds! <br>";
            }
        }

        public function soldeDuCompte () {
            return "Account balance: $this->_soldInitial $this->_deviseMonetaire <br><br>";
        }

        public function __toString(){
            return $this->_libelle;
        }

    }

?>
