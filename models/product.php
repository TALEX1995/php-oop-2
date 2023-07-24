<?php

class Product
{
    private $title;
    private $weight;
    private $price;
    private $image;
    private $animal;


    // Construct
    public function __construct(string $title, int $weight, int $price, string $image, $animal)
    {
        $this->title = $title;
        $this->setWeight($weight);
        $this->setPrice($price);
        $this->image = $image;
        $this->setAnimal($animal);
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

    private function setAnimal($animal)
    {
        $animal_type = ['Cat', 'Dog', 'Bird', 'Fish'];
        if (in_array($animal, $animal_type) || is_array($animal)) {
            $this->animal = $animal;
            return true;
        }
        return false;
    }

    public function getAnimal()
    {
        return $this->animal;
    }
}
