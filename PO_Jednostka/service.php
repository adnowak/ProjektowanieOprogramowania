<?php
include "case.php";
include "ORM.php";
include "databaseHandler.php";
include "document.php";
include "documentType.php";
class Service
{
    private $databaseHandler;
    private $contentToDisplay;

    public function __construct()
    {
        $this->databaseHandler = new DatabaseHandler("localhost", "Admin", "1234", "PO_Jednostka");
    }

    public function showAddACaseForm()
    {
        $this->contentToDisplay = "";
    }
    
    public function showAllCases()
    {
        $cases = ORM::readAllCasesFromDatabase($this->databaseHandler);
        $this->contentToDisplay = $this->prepareCasesForm($cases);
    }

    private function prepareCasesForm($cases){
        $resultingHTML = "";
      
        $resultingHTML = $resultingHTML. "<table>" ;
        $resultingHTML = $resultingHTML. "<tr >
         <th >" . "Id globalny" .
         "</th><th>" . "Id lokalny" . 
         "</th><th>" . "Treść" . 
         "</th><th>" . "Zdjęcie" . 
         "</th><th>" . "Czy usunięto" . 
         "</th><th>" . "Czy wysłano" . 
         "</th><th>" . "Płeć" . 
         "</th><th>" . "Data urodzenia" . 
         "</th><th>" . "Miejsce urodzenia" . 
         "</th><th>" . "Adres" . 
         "</th><th>" . "Obywatelstwo" . 
         "</th><th>" . "Dane przodków" . 
         "</th><th>" . "Id Dokumentu" . 
         "</th><th>" . "Wydaj decyzję" . 
         "</th><th>" . "Edytuj" . 
         "</th><th>" . "Usuń" . 
         "</th>";
        
        foreach ($cases as &$_case) {
            if($_case->getIsDeleted()){
                $czyUsunieto = "Tak";
            }
            else{
                $czyUsunieto = "Nie";
            }

            if($_case->getIsSent()){
                $czyWyslano = "Tak";
            }
            else{
                $czyWyslano = "Nie";
            }

            $resultingHTML = $resultingHTML. 
            "<tr><td>" .$_case->getIdGlobal(). "</td>
            <td>".$_case->getIdLocal() ."</td>
            <td>" .$_case->getContent(). "</td>
            <td>" .$_case->getPicture(). "</td>
            <td>" .$czyUsunieto. "</td>
            <td>" .$czyWyslano. "</td>
            <td>" .$_case->getGender(). "</td>
            <td>" .$_case->getBirthDate(). "</td>
            <td>" .$_case->getBirthPlace(). "</td>
            <td>" .$_case->getAddress(). "</td>
            <td>" .$_case->getCitizenship(). "</td>
            <td>" .$_case->getAncestorsInfo(). "</td>
            <td>" .$_case->getDocumentId(). '</td>
            <td><a style="text-decoration: none; color: black; background-color: white;" href="index.php?page=decisionPage">√</a></td>
            <td><a style="text-decoration: none; color: white; background-color: green;" href="#">∆</a></td>
            <td><a style="text-decoration: none; color: white; background-color: red;" href="#">X</a></td>
            </tr>';
        }
        unset($cases);
     
        $resultingHTML = $resultingHTML . "</table>" ;

        return $resultingHTML;
    }

    public function addACase()
    {
        $result = $this->getPostedCase();
        if($result != "All values must be given")
        {
            $documentExists = false;
            $maximalId = 1;
            $readDocuments = ORM::readAllDocumentsFromDatabase($this->databaseHandler);
            foreach ($readDocuments as &$document)
            {
                if($document->equals($result->getDocument()))
                {
                    $documentExists = true;
                    $result->setDocument($document);
                }

                if($document->getId()>$maximalId)
                {
                    $maximalId = $document->getId();
                }
            }
            if(!$documentExists)
            {
                $result->getDocument()->setId($maximalId + 1);
                echo ORM::writeADocumentIntoDatabase($this->databaseHandler, $result->getDocument());
            }
            echo ORM::writeACaseIntoDatabase($this->databaseHandler, $result);
        }
    }

    private function getPostedCase()
    {
        $err = false;
        $specialErr = "";
    
        if (empty($_POST["content"])){
            $err = true;
        }else{
            $content = $_POST["content"];
        }
    
        if (empty($_POST["picture"])){
            $err = true;
            $picture = null;
        }else{
            $picture = $_POST["picture"];
        }
    
        if (empty($_POST["gender"])){
            $err = true;
        }else{
            $sex = $_POST["gender"];
        }
    
        if (empty($_POST["birthDate"])){
            $err = true;
        }else{
            $birthDate = $_POST["birthDate"];
        }
    
        if (empty($_POST["birthPlace"])){
            $err = true;
        }else{
            $birthPlace = $_POST["birthPlace"];
        }

        if (empty($_POST["address"])){
            $err = true;
        }else{
            $address = $_POST["address"];
        }

        if (empty($_POST["citizenship"])){
            $err = true;
        }else{
            $citizenship = $_POST["citizenship"];
        }

        if (empty($_POST["ancestorsInfo"])){
            $err = true;
        }else{
            $ancestorsInfo = $_POST["ancestorsInfo"];
        }

        if (empty($_POST["documentNumber"])){
            $err = true;
        }else{
            $documentNumber = $_POST["documentNumber"];
        }

        if (empty($_POST["name"])){
            $err = true;
        }else{
            $name = $_POST["name"];
        }

        if (empty($_POST["surname"])){
            $err = true;
        }else{
            $surname = $_POST["surname"];
        }

        if (empty($_POST["documentTypeId"])){
            $err = true;
        }else{
            $documentTypeId = $_POST["documentTypeId"];
        }

        if (empty($specialErr) && !$err){
            $this->contentToDisplay = "Dodano nową sprawę";
            return _Case::constructFromUserInput($content, $picture, $sex, $birthDate, $birthPlace, $address, $citizenship, $ancestorsInfo, new Document("1", $documentNumber, $name, $surname, new DocumentType($documentTypeId)));
        }
        else {
            $this->contentToDisplay = "Nie udało się dodać sprawy,<br/> wszystkie pola muszą być wypełnione";
            return "All values must be given";
        }        
    }
  
    public function getContentToDisplay()
    {
        return $this->contentToDisplay;
    }
}
?>
