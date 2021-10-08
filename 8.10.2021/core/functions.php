<?php

function view($filename, $data = [])
{
    $output = '';
    ob_start();

    extract($data);

    include __DIR__ . "/../views/{$filename}.php";

    $output = ob_get_contents();

    ob_clean();

    return $output;
}

function renderView($filename, $data = [])
{
    echo view($filename, $data);
}

function printArray($array)
{
    echo '<br/>';
    echo '<br/>';
    foreach ($array as $key => $value) {
        echo $key . ' => ' . print_r($value, true) . '<br/>';
    }
    echo '<br/>';
    echo '<br/>';
}


function validateImage($files)
{

    $image = $files['image'];

    if (empty($image['name'])) {
        return 'Image is required';
    }

    $type = $image['type'];

    $typeName = explode('/', $type)[0];

    if ($typeName != 'image') {
        return 'This file is not an image';
    }

    $formatImage = explode('/', $type)[1];

    $formats = 'png jpg jpeg';

    if (!str_contains($formats, $formatImage)) {
        return 'This format image not supported';
    }

    $size = $image['size'];

    if ($size > 100000) {
        return 'This image is too large';
    }

    return null;
}

function redirect($path)
{
    Header("Location: $path");
}

function getImagePath($imageName)
{
    return '/storage/' . $imageName;
}

function dump(...$args)
{
    echo '<pre>' . var_export($args, true) . '</pre>';
}
