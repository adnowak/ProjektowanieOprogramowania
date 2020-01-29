<?php 
require_once 'Base/View.php';

class MainPage extends View
{
    private $_template = 'index.html.php';
    
    public function __construct(...$args) 
    {
        // whatever the fuck you want
        // print_r($args);
        $this->assignData();
        $this->toHtml();
    }

    private function assignData() 
    {
        $this->articles = ['matka zaszla w ciaze szok', 'wyswietlenia: 50'];
    }

    private function toHtml() 
    {
        require_once TEMPLATES . $this->_template;
    }
}