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

/**
 * Add timestamp to query to prevent caching file after change
 *
 * @param $path - relative path
 * @return string
 */
if (!function_exists('asset')) {
    function asset($path)
    {
        return $path . "?t=" . filemtime(__DIR__ . '/../public' . $path);
    }
}
