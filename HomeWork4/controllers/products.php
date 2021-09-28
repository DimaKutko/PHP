<?php

include_once __DIR__ . '/../utils/utils.php';

$products = readProducts();
$categories = readCategories();
$error;

if ($isPost) {
    if (empty($title)) {
        $error = 'Title is required field';
    } else if (empty($img)) {
        $error = 'Image link is required field';
    } else if (empty($category)) {
        $error = 'Please select category';
    } else if (strlen($title) > 15) {
        $error = 'It\'s very long title';
    } else if (strlen($title) < 4) {
        $error = 'It\'s very short title';
    } else if (strlen($subtitle) < 4) {
        $error = 'It\'s very short subtitle';
    } else if (productIsContain($title, $products)) {
        $error = 'A product with this title already exists';
    } else {
        $products[] = [
            'title' => $title,
            'subtitle' => $subtitle,
            'img' => $img,
            'category' => $category,
        ];

        writeProducts($products);
        $title = null;
        $subtitle = null;
        $img = null;
        $error = null;
    }
}

renderPage('products', [
    'products' => $products,
    'error' => $error,
    'title' => $title,
    'subtitle' => $subtitle,
    'img' => $img,
    'categories' => $categories,
]);


function productIsContain($newTitle, $products)
{
    foreach ($products as $value) {
        if ($value === $newTitle) return true;
    }

    return false;
}
