<?php
if (!function_exists('get_admin_name')) {
    function get_admin_name(): string
    {
        return strtolower(config('app.admin_name'));
    }
}
