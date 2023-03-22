<?php

use Illuminate\Support\Facades\Route;


function setActiveRoute(String $route){
    $routeName = Route::currentRouteName();
    if ($routeName == $route) {
        return "active";
    }
}

function notif(String $message, String $type = "success"){
    session()->flash('type', $type);
    session()->flash('message', $message);
}

function initials($str)
{
    $words = explode(" ", $str);
    $acronym = "";
    $limit = 2;
    $initial_count = 0;
    foreach ($words as $w) {
        if ($initial_count >= $limit) {
            break;
        }
        $acronym .= $w[0];
        $initial_count ++;
    }

    return strtoupper($acronym);
}
