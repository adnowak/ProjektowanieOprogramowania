<?php
    class ORM
    {
        public static function readAllCasesFromDatabase($databaseHandler)
        {
            $readRecords = $databaseHandler->readFromDatabase('SELECT * FROM Cases ORDER BY IdLocal DESC');

            $cases = [];
            while($row = $readRecords->fetch_assoc()) {
                $idGlobal = $row["IdGlobal"] ?? '';
                $idLocal = $row["IdLocal"] ?? '';
                $content = $row["Content"] ?? '';
                $picture = $row["Picture"] ?? '';
                $isDeleted = $row["IsDeleted"] ?? '';
                $isSent = $row["IsSent"] ?? '';
                $gender = $row["Sex"] ?? '';
                $birthDate = $row["BirthDate"] ?? '';
                $birthPlace = $row["BirthPlace"] ?? '';
                $address = $row["Address"] ?? '';
                $citizenship = $row["Citizenship"] ?? '';
                $ancestorsInfo = $row["AncestorsInfo"] ?? '';
                $documentId = $row["IdDocument"] ?? '';

                array_push($cases, _Case::constructFromDatabase($idGlobal, $idLocal, $content, $picture, $isDeleted, $isSent, $gender, $birthDate, $birthPlace, $address, $citizenship, $ancestorsInfo, $documentId));
            } 
            return $cases;
        }

        public static function readAllDocumentsFromDatabase($databaseHandler)
        {
            $readRecords = $databaseHandler->readFromDatabase('SELECT * FROM Documents');

            $cases = [];
            while($row = $readRecords->fetch_assoc()) {
                $id = $row["IdDocument"] ?? '';
                $number = $row["Number"] ?? '';
                $name = $row["Name"] ?? '';
                $surname = $row["Surname"] ?? '';
                $idDocumentType = $row["IdDocumentType"] ?? '';

                array_push($cases, new Document($id, $number, $name, $surname, $idDocumentType));
            } 
            return $cases;
        }

        public static function writeACaseIntoDatabase($databaseHandler, $caseToWrite)
        {
            $result = "";
            if($caseToWrite!="All values must be given")
            {
                $content = $caseToWrite->getContent();
                $picture = $caseToWrite->getPicture();
                $sex = $caseToWrite->getGender();
                $birthDate = $caseToWrite->getBirthDate();
                $birthPlace = $caseToWrite->getBirthPlace();
                $address = $caseToWrite->getAddress();
                $citizenship = $caseToWrite->getCitizenship();
                $ancestorsInfo = $caseToWrite->getAncestorsInfo();
                $documentId = $caseToWrite->getDocument()->getId();
    
                $result = $databaseHandler->writeToDatabase('INSERT INTO Cases (Content, Picture, IsDeleted, IsSent, Sex, BirthDate, BirthPlace, Address, Citizenship, AncestorsInfo, IdDocument, IdWorker) VALUES ("'
                .$content.'","'
                .$picture.'","'
                .'0'.'","'
                .'0'.'","'
                .$sex.'","'
                .$birthDate.'","'
                .$birthPlace.'","'
                .$address.'","'
                .$citizenship.'","'
                .$ancestorsInfo.'","'
                .$documentId.'","'
                .'1'
                .'")');
            }
            

            return $result;
        }

        public static function writeADocumentIntoDatabase($databaseHandler, $documentToWrite)
        {
            $result = "";
            if($documentToWrite!="All values must be given")
            {
                $number = $documentToWrite->getNumber();
                $name = $documentToWrite->getName();
                $surname = $documentToWrite->getSurname();
                $documentTypeId = $documentToWrite->getDocumentType()->getId();
    
                $result = $databaseHandler->writeToDatabase('INSERT INTO Documents (Number, Name, Surname, IdDocumentType) VALUES ("'
                .$number.'","'
                .$name.'","'
                .$surname.'","'
                .$documentTypeId
                .'")');
            }
            

            return $result;
        }
    }
?>