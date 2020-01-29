<?php 
require_once 'ResourceModel.php';

class Entity extends ResourceModel
{
    protected $data;

    public function setData(string $key, $value): self
    {
        $this->data[$key] = $value;
        return $this;
    }

    public function getData(string $key = null)
    {
        if ($key) {
            return $this->data[$key] ?? null;
        } 

        return $this->data;
    }
}