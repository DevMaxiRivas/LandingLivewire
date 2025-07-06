<?php

use App\Models\Service;

function getServices()
{
    $services = Service::where('state', 1)
        ->orderBy('id', 'asc')
        ->limit(5)
        ->get();
    return $services;
}