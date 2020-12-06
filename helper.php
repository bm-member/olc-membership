<?php

function redirect($path) {
    header("location: {$path}.php");
    die();
}

function flashMessage($key) {
    echo $_SESSION[$key] ?? ''; 
    unset($_SESSION[$key]);
}

function pretty($array)
{
    echo "<pre>" . print_r($array, true) . "</pre>";
}