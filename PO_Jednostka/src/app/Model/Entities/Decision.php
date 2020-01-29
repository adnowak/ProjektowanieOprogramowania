<?php 
require_once 'Base/Entity.php';

class Decision extends Entity
{
    const ID = 'Id';
    const DECISIONTYPE = 'DecisionType';
    const DATE = 'Date';
    const REASONING = 'Reasoning';
    const DECISIONMAKER = 'DecisionMaker';
    const IDCASE = 'IdCase';

    protected $_table = 'Decisions';

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
    
    public function setDecisionType(string $decisionType)
    {
        $this->setData(self::DECISIONTYPE, $decisionType);
        return $this;
    }

    public function getDecisionType()
    {
        return $this->getData(self::DECISIONTYPE);
    }
}