<?php
require_once 'Product.php';

class Kennel extends Product
{
    public function __construct($title, $price, $category, $image)
    {
        parent::__construct($title, $price, $category, $image);
    }
}
