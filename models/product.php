<?php

class Product
{
    private $weight;
    private $price;


    // Construct
    function __construct(int $weight, int $price)
    {
        $this->setWeigth($weight);
        $this->setPrice($price);
    }
}
