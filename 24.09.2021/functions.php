<?php

function view($filename, $data = [])
{
    $output = '';
    ob_start();

    extract($data);

    include __DIR__ . "/views/{$filename}.php";

    $output = ob_get_contents();

    ob_clean();

    return $output;
}

function renderView($filename, $data = [])
{
    echo view($filename, $data);
}
