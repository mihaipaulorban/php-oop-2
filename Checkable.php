<?php
trait Checkable
{
    public function checkPrice($price)
    {
        // Imposta un limite massimo per il prezzo
        $maxPrice = 300.00;
        if ($price > $maxPrice) {
            throw new PriceException("Il prezzo di €{$price} supera il limite massimo di €{$maxPrice}");
        }
    }
}
