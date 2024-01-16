<?php
function renderProductCards($products)
{
    foreach ($products as $product) {
        echo "<div class='col-md-4 mb-4'>";
        renderProductCard($product);
        echo "</div>";
    }
}

function renderProductCard($product)
{
    echo "<div class='card h-100'>";
    echo "<img src='{$product->image}' class='card-img-top' alt='{$product->title}'>";
    echo "<div class='card-body d-flex flex-column'>";
    echo "<h5 class='card-title'>{$product->title}</h5>";
    echo "<p class='card-text mb-auto price'>Prezzo: {$product->price}€</p>";
    echo "<p class='card-text'>Categoria: {$product->category->name}</p>";
    echo "</div>";
    echo "</div>";
}
