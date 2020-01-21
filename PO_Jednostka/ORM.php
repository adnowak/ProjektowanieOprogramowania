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
    }
?>