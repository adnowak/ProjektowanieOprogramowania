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
                $sex = $row["Sex"] ?? '';
                $birthDate = $row["BirthDate"] ?? '';
                $address = $row["Address"] ?? '';
                $citizenship = $row["Citizenship"] ?? '';
                $ancestorsInfo = $row["AncestorsInfo"] ?? '';
                $documentId = $row["IdDocument"] ?? '';

                array_push($cases, new _Case($idGlobal, $idLocal, $content, $picture, $isDeleted, $isSent, $sex, $birthDate, $address, $citizenship, $ancestorsInfo, $documentId));
            } 
            return $cases;
        }
    }
?>