<?php

use App\Models\Service;

function getServices()
{
    $services = Service::where('state', 1)
        ->orderBy('id', 'asc')
        ->get();
    return $services;
}