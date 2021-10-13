<?php
include_once 'bootstrap.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

//-------------------------------------------------------------------------

set_error_handler(function ($erno, $errstr, $errfile, $errLine) {
    dump($erno, $errstr, $errfile, $errLine);
}, E_ALL);

set_exception_handler(
    function ($error) {
        dump($error);
    }
);

// trigger_error('OOPS', E_USER_ERROR);

try {
    throw new Exception("My Exception");
} catch (Exception $e) {
    dump($e);
}
