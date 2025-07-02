<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', \App\Livewire\ShowHome::class)
    ->name('home');

Route::get('/services', \App\Livewire\ShowServicePage::class)
    ->name('services.index');

Route::get('/service/{service}', \App\Livewire\ShowService::class)
    ->name('service.show');

Route::get('/team', \App\Livewire\ShowTeamPage::class)
    ->name('team.index');

Route::get('/blog', \App\Livewire\ShowBlog::class)
    ->name('blog.index');