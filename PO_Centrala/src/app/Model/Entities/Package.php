<?php 
require_once 'Base/Entity.php';

class Package extends Entity
{
    const ID = 'Id';
    const TIMESTAMP = 'Timestamp';

    protected $_table = 'Packages';

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