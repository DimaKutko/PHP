<?php

include_once __DIR__ . '/../utils/utils.php';

$products = readProducts();

renderPage('home', [
    'products' => $products,
]);
