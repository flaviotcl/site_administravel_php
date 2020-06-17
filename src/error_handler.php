<?php

function setInternalServerError($errno, $errstr,  $errfile, $errline)
{
    
    echo '<h3>Error</> ';

    if (!DEBUG) {
        exit;
    }

    if (is_object($errno)) {
        $err = $errno;
        $errno = $err->getCode();
        $errstr = $err->getMessage();
        $errfile = $err->getFile();
        $errline = $err->getLine();
    }

    echo '<span style="font-weigth: bold; color: red">';
    switch ($errno) {
        case E_USER_ERROR:
            echo '<strong>Error</strong> ['.$errno.'] '.$errstr."<br>\n";
            echo 'Fatal Error on line '. $errline .' in file '. $errfile;
            break;
        case E_USER_WARNING:
            echo '<strong>Warning</strong> ['.$errno.'] '.$errstr."<br>\n";
            break;
        case E_USER_NOTICE:
            echo '<strong>Notice</strong> ['.$errno.'] '.$errstr."<br>\n";
            break;
        default:
            echo '<strong>Unknow error Type</strong> ['.$errno.'] '.$errstr."<br>\n";
            break;
    }
    echo '</span>';

    //Aprimorando manipulação de erros.
    echo '<ul>';
    foreach (debug_backtrace() as $error) {
        if (!empty($error['file'])) {
            echo '<li>';
            echo $error['file'] . ':';
            echo $error['line'];
            echo '</li>';
        }
    }
    echo '</ul>';


    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');