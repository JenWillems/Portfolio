<?php
if (!function_exists('generateDots')) {
    function generateDots($value)
    {
        return str_repeat('●', $value) . str_repeat('○', 5 - $value);
    }
}
