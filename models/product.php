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

    protected function setWeight($weight)
    {
        if ((!is_numeric($weight)) || ($weight < 0)) return false;
        $this->weight = $weight;
        return true;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
