<?php
// Classe per il prodotto generico
class Product
{
    // Atrriburti comuni tra tutti i prodotti
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
