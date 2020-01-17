<?php
    class Placowka
    {
        private $idPlacowki;
        private $nazwa;
        private $liczbaSpraw;

        public function __construct($idPlacowki, $nazwa, $liczbaSpraw)
        {
            $this->idPlacowki = $idPlacowki;
            $this->nazwa = $nazwa;
            $this->liczbaSpraw = $liczbaSpraw;
        }

        public function getIdPlacowki()
        {
            return $this->idPlacowki;
        }

        public function getNazwa()
        {
            return $this->nazwa;
        }

        public function getLiczbaSpraw()
        {
            return $this->liczbaSpraw;
        }
    }
?>