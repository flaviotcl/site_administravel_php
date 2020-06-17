<?php

function setInternalServerError($errno, $errstr,  $errfile, $errline)
{
    
    echo '<h3>Error</> ';

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
    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');