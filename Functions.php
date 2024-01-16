<?php
function renderProductCard($product)
{
    echo "<div class='card' style='width: 18rem;'>";
    echo "<img src='{$product->image}' class='card-img-top' alt='{$product->title}'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>{$product->title}</h5>";
    echo "<p class='card-text'>Prezzo: {$product->price}€</p>";
    echo "<p class='card-text'>Categoria: {$product->category->name}</p>";
    echo "</div>";
    echo "</div>";
}
