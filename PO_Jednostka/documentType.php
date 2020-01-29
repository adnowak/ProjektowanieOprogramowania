<?php
    class DocumentType
    {
        private $id;
        private $name;

        public function __construct($id)
        {
            $this->id = $id;
        }

        public static function constructFromDatebase($id, $name)
        {
            $instance = new self($id);
            $instance->name = $name;

            return $instance;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getId()
        {
            return $this->id;
        }
    }
?>