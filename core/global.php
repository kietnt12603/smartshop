<?php
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = ' VND')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}