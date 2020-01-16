<?php
    class TypDokumentu
    {
        private $nazwa;

        public function __construct($nazwa)
        {
            $this->nazwa = $nazwa;
        }

        public function getNazwa()
        {
            return $this->nazwa;
        }
    }
?>