<?php

use Carbon\Carbon;

if (!function_exists('now')) {
    function now($tz = null)
    {
        // Configuration variable not set. Do the default Laravel thing.
        if (config('laravel-time-machine.now') === null) {
            return Carbon::now($tz);
        }

        return Carbon::parse(config('laravel-time-machine.now'), $tz);
    }
}