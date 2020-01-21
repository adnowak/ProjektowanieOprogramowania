<?php
include "case.php";
include "ORM.php";
include "unit.php";
include "data.php";
include "databaseHandler.php";
class Service
{
    private $databaseHandler;
    private $contentToDisplay;

    public function __construct()
    {
        $this->databaseHandler = new DatabaseHandler("localhost", "Admin", "1234", "PO_Centrala_Prosta");
    }
    
    public function getPublicData()
    {
        $data = new Data();
        $this->contentToDisplay = $data->getData();
    }

    public function generateARaport()
    {
        $jednostki = ORM::readRaportData($this->databaseHandler);
        $this->contentToDisplay = $this->prepareRaportsTable($jednostki);
    }

    private function prepareRaportsTable($jednostki){
        $resultingHTML = "";
      
        $resultingHTML = $resultingHTML. "<table>" ;
        $resultingHTML = $resultingHTML. "<tr ><th >" . "Identyfikator placówki" . "</th><th>" . "Nazwa placówki" . "</th><th>" . "Przesłanych spraw" . "</th>";
        
        foreach ($jednostki as &$jednostka) {
            $resultingHTML = $resultingHTML. 
            "<tr><td>".$jednostka->getIdPlacowki() ."</td>
            <td>" .$jednostka->getNazwa(). "</td>
            <td>" .$jednostka->getLiczbaSpraw(). "</td></tr>";
        }
        unset($jednostki);
     
        $resultingHTML = $resultingHTML . "</table>" ;

        return $resultingHTML;
    }
  
    public function getContentToDisplay()
    {
        return $this->contentToDisplay;
    }
}
?>
