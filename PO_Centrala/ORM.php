<?php
    class ORM
    {
        public static function readRaportData($databaseHandler)
        {
            $readRecords = $databaseHandler->readFromDatabase('SELECT ID_P, Count(*) AS liczba FROM Sprawy GROUP BY ID_P');
            $jednostki = [];
            while($row = $readRecords->fetch_assoc()) {
                $idP = $row["ID_P"] ?? '';
                $liczbaSpraw = $row["liczba"] ?? '';
                array_push($jednostki, new Placowka($idP, "nazwa", $liczbaSpraw));
            } 

            return $jednostki;
        }

        public static function writeSprawaToDatabase($databaseHandler, $sprawa)
        {
            $databaseHandler->writeToDatabase('INSERT INTO Sprawy (ID_P) VALUES ('.$sprawa->getIdPlacówki().')');
        }

        public static function readAllSprawaFromDatabase($databaseHandler)
        {
            $readRecords = $databaseHandler->readFromDatabase('SELECT * FROM Sprawy ORDER BY ID_S DESC');

            $sprawy = [];
            while($row = $readRecords->fetch_assoc()) {
                $idP = $row["ID_P"] ?? '';
                array_push($sprawy, new _Case($idP));
            } 

            return $sprawy;
        }
    }
?>