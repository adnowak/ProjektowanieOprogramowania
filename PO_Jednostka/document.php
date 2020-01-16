<?php
    class Dokument
    {
        private $numer;
        private $imie;
        private $nazwisko;
        private $typDokumentu;

        public function __construct($numer, $imie, $nazwisko, $typDokumentu)
        {
            $this->numer = $numer;
            $this->imie = $imie;
            $this->nazwisko = $nazwisko;
            $this->typDokumentu = $typDokumentu;
        }

        public function getNumer()
        {
            return $this->numer;
        }

        public function getImie()
        {
            return $this->numer;
        }

        public function getNazwisko()
        {
            return $this->numer;
        }

        public function getTypDokumentu()
        {
            return $this->numer;
        }
    }
?>