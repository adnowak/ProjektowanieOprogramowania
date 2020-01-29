<?php 
require_once 'Base/Entity.php';

class Document extends Entity
{
    const ID = 'Id';
    const NUMBER = 'Number';
    const NAME = 'Name';
    const SURNAME = 'Surname';
    const IDDOCUMENTTYPE = 'IdDocumentType';

    protected $_table = 'Documents';

    public function __construct() 
    {
        $this->initializeDB();
    }

    public function getId() 
    {
        $this->getData(self::ID);
    }

    public function getNumber()
    {
        return $this->getData(self::NUMBER);
    }

    public function getName()
    {
        return $this->getData(self::NAME);
    }

    public function getSurname()
    {
        return $this->getData(self::SURNAME);
    }

    public function getIDDocumentType()
    {
        return $this->getData(self::IDDOCUMENTTYPE);
    }

    public function setId(int $id)
    {
        $this->setData(self::ID, $id);
        return $this;
    }
    
    public function setName(string $name)
    {
        $this->setData(self::NAME, $name);
        return $this;
    }

    public function setNumber(string $number)
    {
        $this->setData(self::NUMBER, $number);
        return $this;
    }

    public function setSurname(string $surname)
    {
        $this->setData(self::SURNAME, $surname);
        return $this;
    }

    public function setIdDocumentType(string $idDocumentType)
    {
        $this->setData(self::IDDOCUMENTTYPE, $idDocumentType);
        return $this;
    }
}