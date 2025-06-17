<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', \App\Livewire\ShowHome::class)
    ->name('home');

Route::get('/services', \App\Livewire\ShowServicePage::class)
    ->name('services.index');