<?php 
require_once 'Base/Entity.php';

class Unit extends Entity
{
    const ID = 'Id';
    const NAME = 'Name';

    protected $_table = 'Units';

    public function __construct() 
    {
        $this->initializeDB();
    }

    public function casesInInterval($idUnit, $interval, $cases, $packages){
        // TODO add implementation
        if($interval = 1)
            $epoch = 900;
        elseif($interval = 2)
            $epoch = 3600;
        elseif($interval = 3)
            $epoch = 86400;
        elseif($interval = 4)
            $epoch = 604800;
        
        foreach($cases as $case){
            $packageId = $case['IdPackage'];
            $unit = $case['IdUnit'];

            $package = null;
            foreach($packages as $packageIter){
                if($packageIter['Id'] == $packageId){
                    $package = $packageIter;
                }
            }
        }
        return 5;


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