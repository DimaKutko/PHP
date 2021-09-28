<?php

function writeToFile($path, $mas = [])
{
    $json = json_encode($mas);

    file_put_contents(
        $path,
        $json,
    );
}

function readFromFile($path)
{
    $str = file_get_contents($path);

    return json_decode($str, true) ?? [];
}

function readCategories()
{
    $filePath = __DIR__ . '/../base/category_base.txt';

    return readFromFile($filePath);
}

function writeCategories($mas)
{
    $filePath = __DIR__ . '/../base/category_base.txt';

    writeToFile($filePath, $mas);
}

function readProducts()
{
    $filePath = __DIR__ . '/../base/product_base.txt';

    return readFromFile($filePath);
}

function writeProducts($mas)
{
    $filePath = __DIR__ . '/../base/product_base.txt';

    writeToFile($filePath, $mas);
}
