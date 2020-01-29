<?php 
require_once APP . 'Model' . DIRECTORY_SEPARATOR . 'Database.php';

abstract class ResourceModel 
{
    const ID = 'Id';
    protected $_table;
    private $dbModel;

    public function initializeDB()
    {
        $this->dbModel = new Database();
    }
    
    public function getById(int $id)
    {
        $resultData = $this->dbModel->getById($this->_table, $id);
        if (!empty($resultData)) {
            foreach ($resultData as $key => $value) {
                if (!is_numeric($key)){
                    $this->setData($key, $value);
                }
            }
        }
        return $this;
    }

    public function save()
    {
        if (isset($this->data[self::ID])) {
            $sql = "UPDATE {$this->_table} SET {$this->getUpdateParams()}";
            $this->dbModel->query($sql, $this->generateParams(true));
            return;
        }
        
        $sql = "INSERT INTO {$this->_table} ({$this->createValues()}) VALUES ({$this->createValues(true)})";
        $this->dbModel->query($sql, $this->generateParams());
        return;
    }

    private function createValues($prefix = null) 
    {
        $string = '';
        foreach ($this->data as $key => $value) {
            $string .= $prefix ? ':' . $key . ', ' : $key . ', ';
        }

        return substr($string, 0, -2);
    }

    private function generateParams($appendId = false)
    {
        $result = [];
        foreach ($this->data as $key => $value) {
            if ($key !== self::ID || $appendId) {
                $result[':' . $key] = $value;
            }
        }

        return $result;
    }

    private function getUpdateParams() 
    {
        $string = '';
        $params = $this->generateParams();
        foreach ($params as $key => $value) {
            $current = substr($key, 1);
            $string .= $current . '=:' . $current. ', ';
        }

        $string = substr($string, 0, -2);
        $string .= ' WHERE Id=:Id';

        return $string;
    }

    public function getAllEntities()
    {
        return $this->dbModel->table($this->_table);
    }
}