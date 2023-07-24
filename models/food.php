<?php

require_once __DIR__ . '/Product.php';


class Food extends Product
{
    private $net_weight;
    private $ingredients;


    // Construct
    public function __construct(int $weight, int $price, string $image, $animal, int $net_weight, $ingredients)
    {
        parent::__construct($weight, $price, $image, $animal);
        $this->setNetWeight($net_weight);
        $this->setIngredients($ingredients);
    }

    private function setNetWeight($weight)
    {
        $success = parent::isNumberValid($weight);
        if ($success) {
            $this->net_weight = $weight;
            return true;
        }
        return false;
    }

    public function getNetWeight()
    {
        return $this->net_weight;
    }

    private function setIngredients($ingredients)
    {
        if ((is_string($ingredients)) || (is_array($ingredients))) {
            $this->ingredients = $ingredients;
            return true;
        }
        return false;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
}
