<?php
    class DatabaseHandler
    {
        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $connection;
    
        public function __construct($servername, $username, $password, $dbname)
        {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }
    
        private function establishConnection()
        {
            $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
        }
    
        private function closeConnection()
        {
            $this->connection->close();
        }
    
        public function writeToDatabase($writingQuery)
        {
            $this->establishConnection();
            if ($this->connection->query($writingQuery) === TRUE) {
                return "New record created successfully";
            } else {
                return "Error: " . $writingQuery . "<br/>" . $this->connection->error;
            }
            $this->closeConnection();
        }
    
        public function readFromDatabase($readingQuery)
        {
            $this->establishConnection();
            return $this->connection->query($readingQuery);
            $this->closeConnection();
        }
    }
?>