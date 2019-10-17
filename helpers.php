<?php

/**
 * Debug & Die
 * @param mixed $var
 */
if (!function_exists('dd')) {
    function dd($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
        die();
    }
}
