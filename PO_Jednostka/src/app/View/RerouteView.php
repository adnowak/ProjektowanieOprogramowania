<?php 
require_once 'Base/View.php';

class RerouteView extends View
{
    private $_template = 'reroute.html.php';
    
    public function __construct(...$args) 
    {
        $this->msg = $args[0];
        $this->toHtml();
    }

    private function toHtml() 
    {
        require_once TEMPLATES . $this->_template;
    }
}