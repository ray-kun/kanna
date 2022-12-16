<?php

use Carbon\Carbon;

if (!function_exists('get_admin_name')) {
    function get_admin_name(): string
    {
        return strtolower(config('app.admin_name'));
    }
}

if (!function_exists('get_date_by_format')) {
    function get_date_by_format($format): string
    {
        return Carbon::now('Europe/Amsterdam')->format($format);
    }
}

if (!function_exists('get_year')) {
    function get_year(): string
    {
        return Carbon::now('Europe/Amsterdam')->format('Y');
    }
}
