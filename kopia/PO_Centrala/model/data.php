<?php

class Data
{
    private $aggregatedCasesAmount;
    
    public function __construct()
    {
        $this->aggregatedCasesAmount = 100;
    }
    
    public function getData()
    {
        return '{"aggregatedCasesAmount":'.$this->aggregatedCasesAmount.'}';
    }
}
?>
