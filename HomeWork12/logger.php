<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

set_error_handler(function ($erno, $errstr, $errfile, $errLine) {
    $log = getLogger();
    $log->warning(var_export([$erno, $errstr, $errfile, $errLine], true));
    redirectToErrorPage();
}, E_ALL);

set_exception_handler(
    function ($error) {
        $log = getLogger();
        $log->error(var_export($error, true));
        redirectToErrorPage();
    }
);

function getLogger()
{
    $log = new Logger('myLogger');
    $log->pushHandler(new StreamHandler('storage/error.log', Logger::WARNING));
    return $log;
}

function redirectToErrorPage()
{
    redirect('/error');
}
