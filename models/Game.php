<?php

require_once __DIR__ . '/Product.php';

class Game extends Product
{
    private $characteristics;
    private $dimension;

    public function __construct(int $weight, int $price, string $image, $animal, $characteristics, $dimension)
    {
        parent::__construct($weight, $price, $image, $animal);
        $this->setCharacteristics($characteristics);
        $this->dimension = $dimension;
    }


    private function setCharacteristics($characteristics)
    {
        if (is_string($characteristics) || is_array($characteristics)) {
            $this->characteristics = $characteristics;
            return true;
        }

        return false;
    }

    public function getCharacteristics()
    {
        return $this->characteristics;
    }
}
