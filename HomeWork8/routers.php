<?php

RouterList::addRouter([
    'url_path' => '/',
    'handler' => 'HomeController@index',
    'method' => 'GET',
]);

RouterList::addRouter([
    'url_path' => '/file_manager',
    'handler' => 'FileManagerController@index',
    'method' => 'GET',
]);

RouterList::addRouter([
    'url_path' => '/file_manager/upload',
    'handler' => 'FileManagerController@upload',
    'method' => 'POST',
]);

RouterList::addRouter([
    'url_path' => '/file_manager/rename',
    'handler' => 'FileManagerController@rename',
    'method' => 'POST',
]);

RouterList::addRouter([
    'url_path' => '/file_manager/delete',
    'handler' => 'FileManagerController@delete',
    'method' => 'POST',
]);
