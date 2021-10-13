<?php
include_once __DIR__ . '/bootstrap.php';

use App\Core\ModelDrivers\FileModelDriver;
use App\Models\ProductModel;

$fmd = new FileModelDriver('products');

echo 'before';
dump($fmd->getAll());

$product = new ProductModel();
$product->name = 'New Product';
$product->sku = 'New sku';
$product->image = 'New image';

$fmd->update(1, $product);

echo 'after';
dump($fmd->getAll());

// use Monolog\Logger;
// use App\Core\FileHandlerLog;
// use Monolog\Handler\StreamHandler;

// $log = new Logger('name');
// $log->pushHandler(new FileHandlerLog());

// $log->warning('Foo');
// $log->error('Bar');

//-------------------------------------------------------------------------

// set_error_handler(function ($erno, $errstr, $errfile, $errLine) {
//     dump($erno, $errstr, $errfile, $errLine);
// }, E_ALL);

// set_exception_handler(
//     function ($error) {
//         dump($error);
//     }
// );

// trigger_error('OOPS', E_USER_ERROR);

// try {
//     throw new Exception("My Exception");
// } catch (Exception $e) {
//     dump($e);
// }
