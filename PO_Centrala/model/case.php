<?php
    // Klasa Sprawy
    class _Case
    {
        private $idUnit;
        private $idGlobal;
        private $idLocal;
        private $content;
        private $picture;
        private $isDeleted;
        private $gender;
        private $birthDate;
        private $birthPlace;
        private $address;
        private $citizenship;
        private $ancestorsInfo;
        private $documentId;
        private $document;

        public function __construct($idUnit)
        {
            $this->idUnit = $idUnit;
        }

        public function getCaseId()
        {
            return $this->idUnit;
        }
    }
?>