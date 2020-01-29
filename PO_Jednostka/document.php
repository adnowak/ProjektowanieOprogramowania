<?php
    class Document
    {
        private $id;
        private $number;
        private $name;
        private $surname;
        private $documentType;

        public function __construct($id, $number, $name, $surname, $documentType)
        {
            $this->id = $id;
            $this->number = $number;
            $this->name = $name;
            $this->surname = $surname;
            $this->documentType = $documentType;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getNumber()
        {
            return $this->number;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getSurname()
        {
            return $this->surname;
        }

        public function getDocumentType()
        {
            return $this->documentType;
        }

        public function setId($newId)
        {
            $this->id = $newId;
        }

        public function equals($otherDocument)
        {
            if($otherDocument->getNumber()==$this->number){
                if($otherDocument->getName()==$this->name){
                    if($otherDocument->getSurname()==$this->surname){
                        if($otherDocument->getDocumentType()->getId()==$this->documentType){
                            return true;
                        }
                    }
                }
            }
            return false;
        }
    }
?>