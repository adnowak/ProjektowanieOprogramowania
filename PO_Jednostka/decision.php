<?php
    class Decyzja
    {
        private $rodzajDecyzji;
        private $data;
        private $uzasadnienie;
        private $decydent;
        private $przedmiotDecyzji;

        public function __construct($imie, $nazwisko, $pesel)
        {
            $this->imie = $imie;
            $this->nazwisko = $nazwisko;
            $this->pesel = $pesel;
        }

        public function getImie()
        {
            return $this->imie;
        }

        public function getNazwisko()
        {
            return $this->nazwisko;
        }

        public function getPesel()
        {
            return $this->pesel;
        }
    }
?>