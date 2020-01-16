<?php
    class Placowka
    {
        private $idPlacowki;
        private $liczbaSpraw;

        public function __construct($idPlacowki, $liczbaSpraw)
        {
            $this->idPlacowki = $idPlacowki;
            $this->liczbaSpraw = $liczbaSpraw;
        }

        public function getIdPlacowki()
        {
            return $this->idPlacowki;
        }

        public function getLiczbaSpraw()
        {
            return $this->liczbaSpraw;
        }
    }
?>