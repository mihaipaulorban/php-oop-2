<?php
class Product
{
    public $title;
    public $price;
    public $category;
    public $image;

    public function __construct($title, $price, $category, $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }
}
