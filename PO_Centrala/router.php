<?php

class Router
{
    private $service;

    public function __construct($service)
    {
        $this->service = $service;
        
        if(array_key_exists('page', $_GET))
        {
            if($_GET["page"] == "publicData")
            {
                $this->service->getPublicData();
            }
        }
        else if(array_key_exists('page', $_POST))
        {
            if($_POST["page"] == "generateARaport")
            {
                $this->service->generateARaport();
            }
        }
    }
}
?>
