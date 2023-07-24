<?php

require_once __DIR__ . '/product.php';


class Food extends Product
{
    private $net_weight;
    private $ingredients;
    private $animal;

    // Construct
    public function __construct(int $weight, int $price, string $image, int $net_weight, $ingredients, string $animal)
    {
        parent::__construct($weight, $price, $image);
        $this->setNetWeight($net_weight);
        $this->setIngredients($ingredients);
        $this->setAnimal($animal);
    }
}
