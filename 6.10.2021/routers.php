<?php

RouterList::addRouter([
    'url_path' => '/',
    'handler' => 'HomeController@index',
    'method' => 'GET',
]);

RouterList::addRouter([
    'url_path' => '/login',
    'handler' => 'LoginController@index',
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
