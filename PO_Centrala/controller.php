<?php

class Controller
{
    private $service;

    public function __construct($service)
    {
        $this->service = $service;
        $output = $service->getContentToDisplay();
        if (empty($_GET) && empty($_POST)) 
        {
            include "mainMenu.php";
        }
        else if (empty($_POST))
        {
            include $_GET["page"].".php";
        }
        else 
        {
            include $_POST["page"].".php";
        }
        echo $output;
    }
}
?>
