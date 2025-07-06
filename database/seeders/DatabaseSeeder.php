<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Database\Seeders\ServiceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(5)->create();
        Service::factory(10)->create();
        Article::factory(50)->create();
        Faq::factory(50)->create();
        Page::factory(50)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        // ServiceSeeder::run();
    }
}