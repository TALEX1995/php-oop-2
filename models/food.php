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


    private function setAnimal($animal)
    {
        $animal_type = ['Cat', 'Dog', 'Bird', 'Fish'];
        if (in_array($animal, $animal_type) || is_array($animal)) {
            $this->$animal = $animal;
            return true;
        }
        return false;
    }

    public function getAnimal()
    {
        return $this->animal;
    }
}
