<?php 
require_once 'Base/View.php';

class AddCaseView extends View
{
    private $_template = 'addCase.html.php';
    
    public function __construct(...$args) 
    {
        $this->documents = $args[0];
        $this->documentTypes = $args[1];
        $this->result = '';
        if(sizeof($args)>2)
            $this->result = $args[2];
        $this->toHtml();
    }

    private function toHtml() 
    {
        require_once TEMPLATES . $this->_template;
    }

    private function showResult()
    {
        echo $this->result;
    }

    private function getDocumentTypes(){
        foreach($this->documentTypes as $documentT){
            echo '<option value="' . $documentT['Id'] . '">' . $documentT['Name'] . '</option>';
        }
    }
    
}