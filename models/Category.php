<?php

class Category
{
    private $name;

    // Construct
    public function __construct($name)
    {
        $this->setName($name);
    }


    public function setName($name)
    {
        if (is_string($name)) {
            $this->name = $name;
        }
    }

    public function getName()
    {
        return $this->name;
    }
}
