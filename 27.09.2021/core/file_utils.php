<?php

function saveToFile($mas)
{
    $json = json_encode($mas);

    $fileName = 'myMas';

    file_put_contents(
        $fileName,
        $json,
    );
}

function readFromFile()
{
    $fileName = 'myMas';

    $str = file_get_contents($fileName);

    return json_decode($str, true) ?? [];
}
