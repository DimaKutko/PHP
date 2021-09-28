<?php

include_once __DIR__ . '/../utils/utils.php';

$categories = readCategories();

$error;

if ($isPost) {
    if (empty($category)) {
        $error = 'It\'s required value';
    } else if (strlen($category) < 4) {
        $error = 'It\'s very short name for category';
    } else if (strlen($category) > 15) {
        $error = 'It\'s very long name for category';
    } else if (in_array($category, $categories)) {
        $error = 'This category already exists';
    } else {
        $categories[] = $category;

        writeCategories($categories);
        $category = null;
        $error = null;
    }
}


renderPage('categories', [
    'category' => $category ?? null,
    'categories' => $categories,
    'error' => $error,
]);
