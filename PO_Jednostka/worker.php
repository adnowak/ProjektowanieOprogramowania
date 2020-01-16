<?php
    class Pracownik
    {
        private $imie;
        private $nazwisko;
        private $pesel;

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

    class KierownikNaPlacowce extends Pracownik
    {
        
    }
?>