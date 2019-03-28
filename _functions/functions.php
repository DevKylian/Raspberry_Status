<?php

/**
 * Secure a string
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug more readable of different variables
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * @param $location
 * @param $time
 */
function redirect($location, $time)
{
    switch ($time) {
        case 0:
            header("refresh:0;url=" . $location);
            break;
        case 1:
            header("refresh:1;url=" . $location);
            break;
        case 2:
            header("refresh:2;url=" . $location);
            break;
        case 3:
            header("refresh:3;url=" . $location);
            break;
    }
}