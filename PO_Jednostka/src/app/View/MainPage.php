<?php 
require_once 'Base/View.php';

class MainPage extends View
{
    private $_template = 'index.html.php';
    
    public function __construct(...$args) 
    {
        $this->toHtml();
    }

    private function toHtml() 
    {
        require_once TEMPLATES . $this->_template;
    }
}