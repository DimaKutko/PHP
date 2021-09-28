<?php

function renderPage($filename, $data = [])
{
    $path =  __DIR__ . "/../pages/{$filename}.php";

    echo loadPage($path, $data);
}

function renderController($filename, $data = [])
{

    //print_r($data);

    $path =  __DIR__ . "/../controllers/{$filename}.php";

    echo loadPage($path, $data);
}


function loadPage($path, $data = [])
{
    $output = '';
    ob_start();

    extract($data);

    include $path;

    $output = ob_get_contents();

    ob_clean();
    return $output;
}
