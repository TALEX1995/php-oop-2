<?php

class Product
{
    private $weight;
    private $price;


    // Construct
    public function __construct(int $weight, int $price)
    {
        $this->setWeight($weight);
        $this->setPrice($price);
    }


    public function isNumberValid($number)
    {
        if ((is_numeric($number)) && ($number > 0)) return true;
    }

    protected function setWeight($weight)
    {
        $success = $this->isNumberValid($weight);
        if ($success) {
            $this->weight = $weight;
            return true;
        }
        return false;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    protected function setPrice($price)
    {
        $success = $this->isNumberValid($price);
        if ($success) {
            $this->price = $price;
            return true;
        }
    }
}
