<?php

use App\Core\RouterList;

RouterList::addRouter([
    'url_path' => '/',
    'handler' => 'HomeController@index',
    'method' => 'GET',
]);

RouterList::addRouter([
    'url_path' => '/products',
    'handler' => 'ProductsController@index',
    'method' => 'GET',
]);

RouterList::addRouter([
    'url_path' => '/products/show',
    'handler' => 'ProductsController@show',
    'method' => 'GET',
]);

RouterList::addRouter([
    'url_path' => '/products/create',
    'handler' => 'ProductsController@create',
    'method' => 'POST',
]);

RouterList::addRouter([
    'url_path' => '/products/renderProductTable',
    'handler' => 'ProductsController@renderProductTable',
    'method' => 'GET',
]);

RouterList::addRouter([
    'url_path' => '/products/delete',
    'handler' => 'ProductsController@delete',
    'method' => 'POST',
]);

RouterList::addRouter([
    'url_path' => '/file_menager',
    'handler' => 'FileMenagerController@index',
    'method' => 'GET',
]);

RouterList::addRouter([
    'url_path' => '/file_menager/upload',
    'handler' => 'FileMenagerController@upload',
    'method' => 'POST',
]);

RouterList::addRouter([
    'url_path' => '/file_menager/rename',
    'handler' => 'FileMenagerController@rename',
    'method' => 'POST',
]);

RouterList::addRouter([
    'url_path' => '/file_menager/delete',
    'handler' => 'FileMenagerController@delete',
    'method' => 'POST',
]);

RouterList::addRouter([
    'url_path' => '/error',
    'handler' => 'ErrorController@index',
    'method' => 'GET',
]);
