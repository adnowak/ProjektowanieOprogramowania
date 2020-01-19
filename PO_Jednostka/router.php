<?php

class Router
{
    private $service;

    public function __construct($service)
    {
        $this->service = $service;

        if(array_key_exists('page', $_GET))
        {
            if($_GET["page"] == "showAllCases")
            {
                $this->service->showAllCases();
            }
            else if($_GET["page"] == "addACase")
            {
                $this->service->showAddACaseForm();
            }
        }
        else if(array_key_exists('page', $_POST))
        {
            
        }
    }
}
?>
