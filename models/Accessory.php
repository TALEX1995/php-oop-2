<?php

require_once __DIR__ . '/Product.php';

class Accesory extends Product
{
    private $description;
    private $material;

    public function __construct(string $title, int $weight, int $price, string $image, $animal, string $description, string $material)
    {
        parent::__construct($title, $weight, $price, $image, $animal);
        $this->description = $description;
        $this->material = $material;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
