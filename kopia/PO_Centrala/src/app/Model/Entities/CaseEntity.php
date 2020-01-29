<?php 
require_once 'Base/Entity.php';

class CaseEntity extends Entity
{
    const ID = 'Id';
    const IDGLOBAL = 'IdGlobal';
    const IDLOCAL = 'IdLocal';
    const CONTENT = 'Content';
    const PICTURE = 'Picture';
    const ISDELETED = 'IsDeleted';
    const ISSENT = 'IsSent';
    const SEX = 'Sex';
    const BIRTHDATE = 'BirthDate';
    const BIRTHPLACE = 'BirthPlace';
    const ADDRESS = 'Address';
    const CITIZENSHIP = 'Citizenship';
    const ANCESTORSINFO = 'AncestorsInfo';
    const IDDOCUMENT = 'IdDocument';
    const IDWORKER = 'IdWorker';
    const IDUNIT = 'IdUnit';
    const IDPACKAGE = 'IdPackage';
    
    protected $_table = 'Cases';

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
    
    public function setIdGlobal(int $idGlobal)
    {
        $this->setData(self::IDGLOBAL, $idGlobal);
        return $this;
    }

    public function getName()
    {
        return $this->getData(self::IDGLOBAL);
    }
}