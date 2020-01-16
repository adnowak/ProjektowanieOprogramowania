<?php
    class _Case
    {
        private $idGlobal;
        private $idLocal;
        private $content;
        private $picture;
        private $isDeleted;
        private $isSent;
        private $sex;
        private $birthDate;
        private $address;
        private $citizenship;
        private $ancestorsInfo;

        private $documentId;
        private $document;

        public function __construct($idGlobal, $idLocal, $content, $picture, $isDeleted, $isSent, $sex, $birthDate, $address, $citizenship, $ancestorsInfo, $documentId)
        {
            $this->idGlobal = $idGlobal;
            $this->idLocal = $idLocal;
            $this->content = $content;
            $this->picture = $picture;
            $this->isDeleted = $isDeleted;
            $this->isSent = $isSent;
            $this->sex = $sex;
            $this->birthDate = $birthDate;
            $this->address = $address;
            $this->citizenship = $citizenship;
            $this->ancestorsInfo = $ancestorsInfo;
            $this->documentId = $documentId;
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

        public function getSex()
        {
            return $this->sex;
        }

        public function getBirthDate()
        {
            return $this->birthDate;
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
    }
?>