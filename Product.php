<?php
require_once 'Checkable.php';
require_once 'PriceException.php';

// Classe del Prodotto Generico
class Product
{
    // Trait
    use Checkable;

    public $title;
    public $price;
    public $category;
    public $image;

    public function __construct($title, $price, $category, $image)
    {
        //Controlla il prezzo

        $this->checkPrice($price);
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }
}
