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

    public function casesInInterval($idUnit, $interval, $cases, $packages)
    {
        $epoch = $interval;

        $casesFromUnit = [];
        $noCases = 0;

        foreach ($cases as $case) {
            if ($case['IdUnit'] == $idUnit) {
                //print_r($case['IdPackage']);
                $package = null;
                foreach ($packages as $pack) {
                    if ($pack['Id'] == $case['IdPackage']) {
                        $package = $pack;
                        break;
                    }
                }
                if(time() - $package['Timestamp'] < $epoch)
                {
                    $noCases++;
                }
            }
        }
        return $noCases;
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
