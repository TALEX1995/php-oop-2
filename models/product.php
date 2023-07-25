<?php

require_once __DIR__ . '/Category.php';

class Product
{
    private $title;
    private $weight;
    private $price;
    private $image;
    private $category;


    // Construct
    public function __construct(string $title, int $weight, int $price, string $image, Category $category)
    {
        $this->title = $title;
        $this->setWeight($weight);
        $this->setPrice($price);
        $this->image = $image;
        $this->setCategory($category);
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

    private function setCategory(Category $category)
    {
        if ($category instanceof Category) {
            $this->category = $category;
        }
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getimg()
    {
        return $this->image;
    }
}
