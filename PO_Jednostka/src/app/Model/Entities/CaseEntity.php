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

    public function setIdLocal(int $idLocal)
    {
        $this->setData(self::IDLOCAL, $idLocal);
        return $this;
    }

    public function getName()
    {
        return $this->getData(self::IDGLOBAL);
    }

    public function setContent($content)
    {
        $this->setData(self::CONTENT, $content);
        return $this;
    }
    public function setPicture($picture)
    {
        $this->setData(self::PICTURE, $picture);
        return $this;
    }
    public function setIsSent(int $isSent)
    {
        $this->setData(self::ISSENT, $isSent);
        return $this;
    }
    public function setIsDeleted(int $isDeleted)
    {
        $this->setData(self::ISDELETED, $isDeleted);
        return $this;
    }
    public function setSex(string $sex)
    {
        $this->setData(self::SEX, $sex);
        return $this;
    }
    public function setBirthDate($birthDate)
    {
        $this->setData(self::BIRTHDATE, $birthDate);
        return $this;
    }
    public function setBirthPlace($birthPlace)
    {
        $this->setData(self::BIRTHPLACE, $birthPlace);
        return $this;
    }
    public function setAddress($address)
    {
        $this->setData(self::ADDRESS, $address);
        return $this;
    }
    public function setCitizenship($citizenship)
    {
        $this->setData(self::CITIZENSHIP, $citizenship);
        return $this;
    }
    public function setAncestorsInfo($ancestorsInfo)
    {
        $this->setData(self::ANCESTORSINFO, $ancestorsInfo);
        return $this;
    }
    public function setIdDocument(int $idDocument)
    {
        $this->setData(self::IDDOCUMENT, $idDocument);
        return $this;
    }
    public function setIdWorker(int $idWorker)
    {
        $this->setData(self::IDWORKER, $idWorker);
        return $this;
    }
    public function setIdUnit(int $idUnit)
    {
        $this->setData(self::IDUNIT, $idUnit);
        return $this;
    }

}