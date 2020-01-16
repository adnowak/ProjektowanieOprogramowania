<?php
    class rodzajDecyzji
    {
        private $pozytywna = "pozytywna";
        private $negatywna = "negatywna";
        private $doUzupelnienia = "do uzupelnienia";
        private $stan;

        public function __construct($nowyStan)
        {
            $this->stan = $this->doUzupelnienia;
            if($nowyStan==$this->pozytywna)
            {
                $this->stan = $this->pozytywna;
            }
            else if($nowyStan==$this->negatywna)
            {
                $this->stan = $this->negatywna;
            }
        }

        public function getStan()
        {
            return $this->stan;
        }
    }

    class data
    {

        public function __construct($nowyStan)
        {
        }

        public function getData()
        {

        }
    }

    class plec
    {

        public function __construct($nowyStan)
        {
        }

        public function getData()
        {
            
        }
    }

    class przedzialCzasowy
    {

        public function __construct($nowyStan)
        {
        }

        public function getData()
        {
            
        }
    }
?>