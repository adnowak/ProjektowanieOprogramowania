<?php
    class _Case
    {
        private $idPlacowki;

        public function __construct($idPlacówki)
        {
            $this->idPlacówki = $idPlacówki;
        }

        public function getIdPlacówki()
        {
            return $this->idPlacówki;
        }
    }
?>