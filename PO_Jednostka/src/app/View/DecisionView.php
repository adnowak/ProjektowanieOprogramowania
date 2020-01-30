<?php 
require_once 'Base/View.php';

class DecisionView extends View
{
    private $_template = 'decision.html.php';
    
    public function __construct(...$args) 
    {
        $this->case = $args[0];
        $this->document = $args[1];
        $this->documentType = $args[2];
        $this->worker = $args[3];
        $this->toHtml();
    }

    private function toHtml() 
    {
        require_once TEMPLATES . $this->_template;
    }


    private function getDocumentTypes(){
        foreach($this->documentTypes as $documentT){
            echo '<option value="' . $documentT['Id'] . '">' . $documentT['Name'] . '</option>';
        }
    }

    private function decisionTypes()
    {
            echo '<option value=1>Pozytywna</option>';
            echo '<option value=2>Negatywna</option>';
            echo '<option value=3>Do uzupełnienia</option>';
    }
    
}