<?php
    class _Case
    {
        private $idGlobal;
        private $idLocal;
        private $content;
        private $picture;
        private $isDeleted;
        private $isSent;
        private $gender;
        private $birthDate;
        private $birthPlace;
        private $address;
        private $citizenship;
        private $ancestorsInfo;

        private $documentId;
        private $document;

        public function __construct()
        {
            
        }

        public static function constructFromDatabase($idGlobal, $idLocal, $content, $picture, $isDeleted, $isSent, $gender, $birthDate, $birthPlace, $address, $citizenship, $ancestorsInfo, $documentId)
        {
            $instance = new self();
            $instance->idGlobal = $idGlobal;
            $instance->idLocal = $idLocal;
            $instance->content = $content;
            $instance->picture = $picture;
            $instance->isDeleted = $isDeleted;
            $instance->isSent = $isSent;
            $instance->gender = $gender;
            $instance->birthDate = $birthDate;
            $instance->birthPlace = $birthPlace;
            $instance->address = $address;
            $instance->citizenship = $citizenship;
            $instance->ancestorsInfo = $ancestorsInfo;
            $instance->documentId = $documentId;

            return $instance;
        }

        public static function constructFromUserInput($content, $picture, $gender, $birthDate, $birthPlace, $address, $citizenship, $ancestorsInfo, $document)
        {
            $instance = new self();
            $instance->idGlobal = null;
            $instance->idLocal = null;
            $instance->content = $content;
            $instance->picture = $picture;
            $instance->isDeleted = false;
            $instance->isSent = false;
            $instance->gender = $gender;
            $instance->birthDate = $birthDate;
            $instance->birthPlace = $birthPlace;
            $instance->address = $address;
            $instance->citizenship = $citizenship;
            $instance->ancestorsInfo = $ancestorsInfo;
            $instance->document = $document;
            $instance->documentId = "1";

            return $instance;
        }

        public function getIdGlobal()
        {
            return $this->idGlobal;
        }

        public function getIdLocal()
        {
            return $this->idLocal;
        }

        public function getContent()
        {
            return $this->content;
        }

        public function getPicture()
        {
            return $this->picture;
        }

        public function getIsDeleted()
        {
            return $this->isDeleted;
        }

        public function getIsSent()
        {
            return $this->isSent;
        }

        public function getGender()
        {
            return $this->gender;
        }

        public function getBirthDate()
        {
            return $this->birthDate;
        }

        public function getBirthPlace()
        {
            return $this->birthPlace;
        }

        public function getAddress()
        {
            return $this->address;
        }

        public function getCitizenship()
        {
            return $this->citizenship;
        }

        public function getAncestorsInfo()
        {
            return $this->ancestorsInfo;
        }

        public function getDocumentId()
        {
            return $this->documentId;
        }

        public function getDocument()
        {
            return $this->document;
        }

        public function setDocument($newDocument)
        {
            $this->document = $newDocument;
        }
    }
?>