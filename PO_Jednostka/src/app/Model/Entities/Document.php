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

    public function getName()
    {
        return $this->getData(self::NAME);
    }
}