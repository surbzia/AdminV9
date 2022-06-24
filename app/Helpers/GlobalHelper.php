<?php

use Illuminate\Routing\Route;

if (!function_exists('activeNav')) {
    function activeNav($route)
    {
        return (\request()->route()->getName() == $route) ? 'active' : '';
    }
}
