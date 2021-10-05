<?php

$json = json_encode($_COOKIE);

file_put_contents(
    'test',
    $json,
);
