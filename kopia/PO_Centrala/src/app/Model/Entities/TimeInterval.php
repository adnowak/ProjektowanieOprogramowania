<?php 
require_once 'Base/Entity.php';

class TimeInterval extends Entity
{
    const ID = 'Id';
    const INTERVAL = 'IntervalName';
    const UNIXTIME = 'UnixTime';

    protected $_table = 'TimeIntervals';

    public function __construct() 
    {
        $this->initializeDB();
    }

    public function getId() 
    {
        return $this->getData(self::ID);
    }

    public function setId(int $id)
    {
        $this->setData(self::ID, $id);
        return $this;
    }
    
    public function setInterval(string $interval)
    {
        $this->setData(self::INTERVAL, $interval);
        return $this;
    }

    public function getInterval()
    {
        return $this->getData(self::INTERVAL);
    }

    public function getUnixTime()
    {
        return $this->getData(self::UNIXTIME);
    }
}