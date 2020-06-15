<?php

$path = $_SERVER['PATH_INFO'] ?? '/';

if ($path == '/admin')
{
    echo "ADMINISTRAÇÃO";
}else
{
    echo "Página não encontrada";
}