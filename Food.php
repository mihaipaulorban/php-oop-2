<?php
require_once 'Product.php';

class Food extends Product
{

    public function __construct($title, $price, $category, $image)
    {
        parent::__construct($title, $price, $category, $image);
    }
}
