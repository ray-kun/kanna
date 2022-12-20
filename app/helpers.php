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

if (!function_exists('get_time_slot')) {
    /**
     * @throws Exception
     */
    function get_time_slot($duration, $start, $end): array
    {

        $time = [];

        $start = new DateTime($start);
        $end = new DateTime($end);
        $start_time = $start->format('H:i');
        $end_time = $end->format('H:i');
        $i=0;
        while(strtotime($start_time) <= strtotime($end_time)){
            $start = $start_time;
            $end = date('H:i',strtotime('+'.$duration.' minutes',strtotime($start_time)));
            $start_time = date('H:i',strtotime('+'.$duration.' minutes',strtotime($start_time)));
            $i++;
            if(strtotime($start_time) <= strtotime($end_time)){
                $time[$i]['start'] = $start;
                $time[$i]['end'] = $end;
            }
        }
        return $time;
    }
}
